<?php
/**
 * Pagine del sito, create una volta sola con il loro contenuto a blocchi.
 *
 * Le pagine "L'Associazione", "Comitato Esecutivo" e "Working Groups" NON sono più
 * HTML dentro il tema: il loro contenuto vive nella pagina (Pagine → Modifica) ed è fatto
 * di blocchi WordPress. Il tema le crea la prima volta partendo dai pattern
 * patterns/page-*.php; da quel momento si modificano dall'Editor e non vengono più toccate.
 *
 * Per rieseguire la configurazione (pagine mancanti, permalink, modelli) aumenta AISF_SETUP_VERSION.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'AISF_SETUP_VERSION', '4' );

/** Carica un'immagine del tema nella Libreria media (una volta) e ne restituisce l'ID. */
function aisf_theme_image_attachment( $file ) {
	$map = get_option( 'aisf_theme_image_ids', array() );
	if ( ! empty( $map[ $file ] ) && get_post( $map[ $file ] ) ) {
		return (int) $map[ $file ];
	}

	$path = get_theme_file_path( 'assets/images/' . $file );
	if ( ! file_exists( $path ) ) {
		return 0;
	}

	require_once ABSPATH . 'wp-admin/includes/file.php';
	require_once ABSPATH . 'wp-admin/includes/media.php';
	require_once ABSPATH . 'wp-admin/includes/image.php';

	$tmp = wp_tempnam( $file );
	if ( ! $tmp || ! copy( $path, $tmp ) ) {
		return 0;
	}

	$id = media_handle_sideload( array( 'name' => $file, 'tmp_name' => $tmp ), 0 );
	if ( is_wp_error( $id ) ) {
		@unlink( $tmp ); // phpcs:ignore WordPress.PHP.NoSilencedErrors
		return 0;
	}

	$map[ $file ] = (int) $id;
	update_option( 'aisf_theme_image_ids', $map );
	return (int) $id;
}

/** Nei pattern le immagini del tema sono segnaposto: qui diventano file della Libreria media. */
function aisf_replace_theme_images( $content ) {
	$id = aisf_theme_image_attachment( 'group-photo.jpg' );
	if ( $id ) {
		$content = str_replace( '999999001', (string) $id, $content );
	} else {
		// Libreria media non disponibile: l'immagine resta quella del tema, senza ID.
		$content = str_replace( array( '"id":999999001,', ' wp-image-999999001' ), '', $content );
	}

	return preg_replace_callback( '#https://aisf\.invalid/([A-Za-z0-9._-]+)#', function( $m ) {
		$attachment = aisf_theme_image_attachment( $m[1] );
		return $attachment ? wp_get_attachment_url( $attachment ) : get_theme_file_uri( 'assets/images/' . $m[1] );
	}, $content );
}

function aisf_page_content_from_pattern( $file ) {
	$path = get_theme_file_path( 'patterns/' . $file );
	if ( ! file_exists( $path ) ) {
		return '';
	}
	ob_start();
	include $path;
	return trim( (string) ob_get_clean() );
}

/** Scrive il contenuto iniziale solo se la pagina è vuota e non è mai stata inizializzata. */
function aisf_seed_page( $page_id, $pattern_file ) {
	if ( get_post_meta( $page_id, '_aisf_seeded', true ) ) {
		return;
	}
	$page = get_post( $page_id );
	if ( ! $page || '' !== trim( $page->post_content ) ) {
		return;
	}
	$content = aisf_page_content_from_pattern( $pattern_file );
	if ( '' === $content ) {
		return;
	}
	wp_update_post( wp_slash( array(
		'ID'           => $page_id,
		'post_content' => aisf_replace_theme_images( $content ),
	) ) );
	update_post_meta( $page_id, '_aisf_seeded', 1 );
}

function aisf_run_setup() {
	if ( get_option( 'aisf_setup_version' ) === AISF_SETUP_VERSION ) {
		return;
	}

	$pages = array(
		'about'          => array( "L'Associazione", 'page-about.php' ),
		'esecutivo'      => array( 'Comitato Esecutivo', 'page-executive.php' ),
		'working-groups' => array( 'Working Groups', 'page-working-groups.php' ),
		'iscriviti'      => array( 'Iscriviti', '' ),
		'articoli'       => array( 'Articoli', '' ),
		'documenti'      => array( 'Documenti', '' ),
	);

	foreach ( $pages as $slug => $page ) {
		$existing = get_page_by_path( $slug, OBJECT, 'page' );
		$page_id  = $existing ? $existing->ID : wp_insert_post( array(
			'post_type'      => 'page',
			'post_status'    => 'publish',
			'post_title'     => $page[0],
			'post_name'      => $slug,
			'post_content'   => '',
			'comment_status' => 'closed',
		) );
		if ( $page_id && ! is_wp_error( $page_id ) && '' !== $page[1] ) {
			aisf_seed_page( $page_id, $page[1] );
		}
	}

	// Modelli salvati nel database dall'Editor del sito: hanno la precedenza sui file del tema,
	// quindi si scartano per ripartire dai file aggiornati.
	$reset = array( 'page-articoli', 'front-page' );
	foreach ( $reset as $slug ) {
		$overrides = get_posts( array(
			'post_type'      => 'wp_template',
			'name'           => $slug,
			'post_status'    => 'any',
			'posts_per_page' => -1,
			'no_found_rows'  => true,
			'tax_query'      => array(
				array(
					'taxonomy' => 'wp_theme',
					'field'    => 'name',
					'terms'    => get_stylesheet(),
				),
			),
		) );
		foreach ( $overrides as $override ) {
			wp_delete_post( $override->ID, true );
		}
	}

	flush_rewrite_rules( false );
	update_option( 'aisf_setup_version', AISF_SETUP_VERSION );
}
// Priorità 99: i post type sono già registrati quando si rigenerano i permalink.
add_action( 'init', 'aisf_run_setup', 99 );
