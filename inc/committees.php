<?php
/**
 * Comitati locali: campi, blocco "Mappa e elenco comitati" e dati iniziali.
 *
 *  - aisf/committees-map : mappa d'Italia con un punto per comitato + ricerca, filtri
 *                          (Tutti / Attivi / Sospesi) ed elenco a schede apribili.
 *                          Si inserisce dall'inseritore dei blocchi (sezione "Widget").
 *
 * Ogni comitato è un contenuto "Comitati" (aisf_committee):
 *  - titolo                = nome (es. "Bologna")
 *  - Immagine in evidenza  = foto del presidente (facoltativa)
 *  - riquadro "Dati del comitato" = presidente, stato, mappa, contatti
 *
 * I punti sulla mappa vengono da latitudine/longitudine. I comitati con lo stesso punto
 * (es. Roma) si raggruppano da soli in un unico pallino numerato.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/* ==========================================================================
   1. Campi (meta) dei comitati
   ========================================================================== */
function aisf_committee_fields() {
	return array(
		'_committee_president'       => 'Presidente',
		'_committee_status'          => 'Stato',
		'_committee_established'     => 'Attivo dal',
		'_committee_email'           => 'Email',
		'_committee_lat'             => 'Latitudine',
		'_committee_lon'             => 'Longitudine',
		'_committee_past_presidents' => 'Già presidenti',
		'_committee_link'            => 'Social / sito',
		'_committee_rules'           => 'Regolamento (URL)',
		'_committee_photo'           => 'Foto presidente (percorso nel tema)',
	);
}

add_action( 'init', function() {
	if ( ! post_type_exists( 'aisf_committee' ) ) {
		return;
	}
	foreach ( aisf_committee_fields() as $key => $label ) {
		register_post_meta( 'aisf_committee', $key, array(
			'show_in_rest'      => true,
			'single'            => true,
			'type'              => 'string',
			'sanitize_callback' => 'sanitize_text_field',
			'auth_callback'     => '__return_true',
		) );
	}
}, 21 );

add_action( 'add_meta_boxes', function() {
	add_meta_box(
		'aisf_committee_details',
		'Dati del comitato',
		'aisf_committee_metabox',
		'aisf_committee',
		'normal',
		'high'
	);
} );

function aisf_committee_metabox( $post ) {
	wp_nonce_field( 'aisf_committee_meta_save', 'aisf_committee_meta_nonce' );
	$v = function( $key ) use ( $post ) {
		return (string) get_post_meta( $post->ID, $key, true );
	};
	$status = $v( '_committee_status' );
	?>
	<table class="form-table">
		<tr>
			<th><label for="aisf_c_president">Presidente</label></th>
			<td><input type="text" id="aisf_c_president" name="_committee_president" value="<?php echo esc_attr( $v( '_committee_president' ) ); ?>" class="regular-text" />
			<p class="description">La foto del presidente è l'<strong>Immagine in evidenza</strong> (colonna a destra).</p></td>
		</tr>
		<tr>
			<th><label for="aisf_c_status">Stato</label></th>
			<td>
				<select id="aisf_c_status" name="_committee_status">
					<option value="active" <?php selected( $status, 'active' ); ?><?php selected( $status, '' ); ?>>Attivo</option>
					<option value="frozen" <?php selected( $status, 'frozen' ); ?>>Sospeso</option>
				</select>
			</td>
		</tr>
		<tr>
			<th><label for="aisf_c_est">Attivo dal</label></th>
			<td><input type="text" id="aisf_c_est" name="_committee_established" value="<?php echo esc_attr( $v( '_committee_established' ) ); ?>" placeholder="05/2015" class="regular-text" /></td>
		</tr>
		<tr>
			<th><label for="aisf_c_lat">Posizione sulla mappa</label></th>
			<td>
				<input type="text" id="aisf_c_lat" name="_committee_lat" value="<?php echo esc_attr( $v( '_committee_lat' ) ); ?>" placeholder="Latitudine, es. 44.49" style="width:170px" />
				<input type="text" id="aisf_c_lon" name="_committee_lon" value="<?php echo esc_attr( $v( '_committee_lon' ) ); ?>" placeholder="Longitudine, es. 11.34" style="width:170px" />
				<p class="description">Coordinate della città (si copiano da Google Maps con il tasto destro). Se vuote, il comitato compare nell'elenco ma non sulla mappa.</p>
			</td>
		</tr>
		<tr>
			<th><label for="aisf_c_email">Email</label></th>
			<td><input type="email" id="aisf_c_email" name="_committee_email" value="<?php echo esc_attr( $v( '_committee_email' ) ); ?>" class="regular-text" /></td>
		</tr>
		<tr>
			<th><label for="aisf_c_link">Social / sito</label></th>
			<td><input type="url" id="aisf_c_link" name="_committee_link" value="<?php echo esc_attr( $v( '_committee_link' ) ); ?>" class="large-text" placeholder="https://" /></td>
		</tr>
		<tr>
			<th><label for="aisf_c_rules">Regolamento (URL)</label></th>
			<td><input type="url" id="aisf_c_rules" name="_committee_rules" value="<?php echo esc_attr( $v( '_committee_rules' ) ); ?>" class="large-text" placeholder="https://" /></td>
		</tr>
		<tr>
			<th><label for="aisf_c_past">Già presidenti</label></th>
			<td><textarea id="aisf_c_past" name="_committee_past_presidents" rows="3" class="large-text"><?php echo esc_textarea( $v( '_committee_past_presidents' ) ); ?></textarea>
			<p class="description">Nomi separati da virgola.</p></td>
		</tr>
	</table>
	<?php
}

add_action( 'save_post_aisf_committee', function( $post_id ) {
	if ( ! isset( $_POST['aisf_committee_meta_nonce'] ) || ! wp_verify_nonce( $_POST['aisf_committee_meta_nonce'], 'aisf_committee_meta_save' ) ) {
		return;
	}
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	if ( ! current_user_can( 'edit_post', $post_id ) ) {
		return;
	}

	$text_fields = array( '_committee_president', '_committee_established', '_committee_past_presidents' );
	foreach ( $text_fields as $key ) {
		if ( isset( $_POST[ $key ] ) ) {
			update_post_meta( $post_id, $key, sanitize_textarea_field( wp_unslash( $_POST[ $key ] ) ) );
		}
	}
	if ( isset( $_POST['_committee_status'] ) ) {
		$status = 'frozen' === $_POST['_committee_status'] ? 'frozen' : 'active';
		update_post_meta( $post_id, '_committee_status', $status );
	}
	if ( isset( $_POST['_committee_email'] ) ) {
		update_post_meta( $post_id, '_committee_email', sanitize_email( wp_unslash( $_POST['_committee_email'] ) ) );
	}
	foreach ( array( '_committee_link', '_committee_rules' ) as $key ) {
		if ( isset( $_POST[ $key ] ) ) {
			update_post_meta( $post_id, $key, esc_url_raw( wp_unslash( $_POST[ $key ] ) ) );
		}
	}
	foreach ( array( '_committee_lat', '_committee_lon' ) as $key ) {
		if ( isset( $_POST[ $key ] ) ) {
			$raw = str_replace( ',', '.', trim( (string) wp_unslash( $_POST[ $key ] ) ) );
			if ( '' === $raw ) {
				delete_post_meta( $post_id, $key );
			} elseif ( is_numeric( $raw ) ) {
				update_post_meta( $post_id, $key, (string) (float) $raw );
			}
		}
	}
} );

/* ==========================================================================
   2. Blocco dinamico: mappa + elenco
   ========================================================================== */
add_action( 'init', function() {
	register_block_type( 'aisf/committees-map', array(
		'api_version'     => 3,
		'title'           => 'Mappa e elenco comitati',
		'description'     => 'Mappa d\'Italia con i comitati locali, ricerca, filtri ed elenco a schede.',
		'category'        => 'widgets',
		'icon'            => 'location-alt',
		'attributes'      => array(
			'showFrozenNote' => array( 'type' => 'boolean', 'default' => true ),
		),
		'supports'        => array(
			'autoRegister' => true,
			'html'         => false,
		),
		'render_callback' => 'aisf_render_committees_map',
	) );

	register_block_type( 'aisf/committees-dots', array(
		'api_version'     => 3,
		'title'           => 'Mappa comitati (solo puntini)',
		'description'     => 'Cartina d\'Italia con un puntino per ogni comitato. Non cliccabile: pensata per la home.',
		'category'        => 'widgets',
		'icon'            => 'location-alt',
		'supports'        => array( 'autoRegister' => true, 'html' => false ),
		'render_callback' => 'aisf_render_committees_dots',
	) );

	register_block_type( 'aisf/committees-list', array(
		'api_version'     => 3,
		'title'           => 'Elenco comitati',
		'description'     => 'Nomi dei comitati su due colonne, con collegamento diretto alla scheda nella mappa interattiva.',
		'category'        => 'widgets',
		'icon'            => 'editor-ul',
		'supports'        => array( 'autoRegister' => true, 'html' => false ),
		'render_callback' => 'aisf_render_committees_list',
	) );
}, 11 );

/** Proiezione lat/lon -> % del viewBox 1000x1000 di assets/italy-map.svg (costanti tarate sul file). */
function aisf_map_project( $lat, $lon ) {
	$ax = 58.65740495803866;
	$bx = -236.75628547448636;
	$ay = -78.44513716855866;
	$by = 3747.9549161163013;
	return array(
		'x' => ( $ax * $lon + $bx ) / 10,
		'y' => ( $ay * $lat + $by ) / 10,
	);
}

/** Comitati pubblicati, già normalizzati (nome, stato, contatti, punto sulla mappa). */
function aisf_committees_items() {
	$posts = get_posts( array(
		'post_type'      => 'aisf_committee',
		'post_status'    => 'publish',
		'posts_per_page' => -1,
		'orderby'        => 'title',
		'order'          => 'ASC',
		'no_found_rows'  => true,
	) );

	// Dati normalizzati.
	$items = array();
	foreach ( $posts as $post ) {
		$lat = get_post_meta( $post->ID, '_committee_lat', true );
		$lon = get_post_meta( $post->ID, '_committee_lon', true );
		$photo = get_the_post_thumbnail_url( $post->ID, 'thumbnail' );
		if ( ! $photo ) {
			$rel = trim( (string) get_post_meta( $post->ID, '_committee_photo', true ) );
			if ( '' !== $rel ) {
				$photo = preg_match( '#^https?://#', $rel ) ? $rel : get_theme_file_uri( $rel );
			}
		}
		$items[] = array(
			'id'       => $post->post_name,
			'name'     => get_the_title( $post ),
			'president'=> trim( (string) get_post_meta( $post->ID, '_committee_president', true ) ),
			'frozen'   => 'frozen' === get_post_meta( $post->ID, '_committee_status', true ),
			'founded'  => trim( (string) get_post_meta( $post->ID, '_committee_established', true ) ),
			'past'     => trim( (string) get_post_meta( $post->ID, '_committee_past_presidents', true ) ),
			'email'    => trim( (string) get_post_meta( $post->ID, '_committee_email', true ) ),
			'link'     => trim( (string) get_post_meta( $post->ID, '_committee_link', true ) ),
			'rules'    => trim( (string) get_post_meta( $post->ID, '_committee_rules', true ) ),
			'photo'    => $photo ? $photo : '',
			'point'    => ( is_numeric( $lat ) && is_numeric( $lon ) ) ? aisf_map_project( (float) $lat, (float) $lon ) : null,
		);
	}

	return $items;
}

/** Divide i comitati con un punto in "singoli" e "cluster" (punti quasi coincidenti, es. Roma). */
function aisf_committees_cluster( $items ) {
	// Raggruppa i comitati con punti quasi coincidenti (distanza < 1.5% della mappa), es. Roma e Milano.
	$mapped   = array_values( array_filter( $items, function( $i ) { return null !== $i['point']; } ) );
	$groups   = array(); // ogni gruppo: array di indici in $mapped
	$assigned = array();
	foreach ( $mapped as $a => $item_a ) {
		if ( isset( $assigned[ $a ] ) ) {
			continue;
		}
		$group = array( $a );
		$assigned[ $a ] = true;
		for ( $i = 0; $i < count( $group ); $i++ ) { // single linkage
			foreach ( $mapped as $b => $item_b ) {
				if ( isset( $assigned[ $b ] ) ) {
					continue;
				}
				$p = $mapped[ $group[ $i ] ]['point'];
				$q = $item_b['point'];
				if ( sqrt( ( $p['x'] - $q['x'] ) ** 2 + ( $p['y'] - $q['y'] ) ** 2 ) < 1.5 ) {
					$group[]        = $b;
					$assigned[ $b ] = true;
				}
			}
		}
		$groups[] = $group;
	}

	$singles  = array();
	$clusters = array();
	foreach ( $groups as $group ) {
		if ( 1 === count( $group ) ) {
			$singles[] = $mapped[ $group[0] ];
			continue;
		}
		$x = 0;
		$y = 0;
		$members = array();
		foreach ( $group as $idx ) {
			$x += $mapped[ $idx ]['point']['x'];
			$y += $mapped[ $idx ]['point']['y'];
			$members[] = $mapped[ $idx ];
		}
		$clusters[] = array( 'x' => $x / count( $group ), 'y' => $y / count( $group ), 'members' => $members );
	}

	return array( 'singles' => $singles, 'clusters' => $clusters );
}

/**
 * Mappa + puntini. $static = true: solo disegno (nessun pulsante, nessun clic), usato nella home.
 */
function aisf_committees_canvas( $singles, $clusters, $static ) {
	$h  = '<div class="aisf-map__canvas">';
	$h .= '<img class="aisf-map__img" src="' . esc_url( get_theme_file_uri( 'assets/italy-map.svg' ) ) . '" alt="' . ( $static ? '' : 'Italia — comitati locali AISF' ) . '" />';

	foreach ( $singles as $c ) {
		$pos = sprintf( 'left:%.3F%%;top:%.3F%%;', $c['point']['x'], $c['point']['y'] );
		$dot = '<span class="aisf-map__dot-visual' . ( $c['frozen'] ? ' is-frozen' : '' ) . '" data-dot-visual></span>';
		if ( $static ) {
			$h .= '<span class="aisf-map__dot" title="' . esc_attr( $c['name'] ) . '" style="' . esc_attr( $pos ) . '">' . $dot . '</span>';
		} elseif ( $c['frozen'] ) {
			$h .= '<span class="aisf-map__dot" title="' . esc_attr( $c['name'] . ' (sospeso)' ) . '" aria-label="' . esc_attr( $c['name'] . ', comitato sospeso' ) . '" style="' . esc_attr( $pos ) . '">' . $dot . '</span>';
		} else {
			$h .= '<button type="button" class="aisf-map__dot" data-dot="' . esc_attr( $c['id'] ) . '" title="' . esc_attr( $c['name'] ) . '" aria-label="' . esc_attr( $c['name'] . ' — mostra la scheda' ) . '" style="' . esc_attr( $pos ) . '">' . $dot . '</button>';
		}
	}
	foreach ( $clusters as $n => $cl ) {
		$ids = array_map( function( $m ) { return $m['id']; }, $cl['members'] );
		$pos = sprintf( 'left:%.3F%%;top:%.3F%%;', $cl['x'], $cl['y'] );
		if ( $static ) {
			$names = implode( ', ', array_map( function( $m ) { return $m['name']; }, $cl['members'] ) );
			$h    .= '<span class="aisf-map__cluster" title="' . esc_attr( $names ) . '" style="' . esc_attr( $pos ) . '">' . count( $ids ) . '</span>';
		} else {
			$h .= '<button type="button" class="aisf-map__cluster" data-cluster="' . (int) $n . '" data-cluster-ids="' . esc_attr( wp_json_encode( $ids ) ) . '" aria-label="' . esc_attr( count( $ids ) . ' comitati — mostra l\'elenco' ) . '" aria-expanded="false" style="' . esc_attr( $pos ) . '">' . count( $ids ) . '</button>';
		}
	}
	return $h . '</div>';
}

/* --- Blocchi per la home: mappa con i soli puntini + elenco non cliccabile --- */
function aisf_render_committees_dots() {
	$items = aisf_committees_items();
	if ( ! $items ) {
		return '';
	}
	$layout = aisf_committees_cluster( $items );
	return '<div ' . get_block_wrapper_attributes( array( 'class' => 'aisf-map aisf-map--static' ) ) . '>' . aisf_committees_canvas( $layout['singles'], $layout['clusters'], true ) . '</div>';
}

function aisf_render_committees_list() {
	$items = aisf_committees_items();
	if ( ! $items ) {
		return '';
	}
	$archive_url = get_post_type_archive_link( 'aisf_committee' );
	if ( ! $archive_url ) { $archive_url = home_url( '/comitati/' ); }
	$h = '<ul ' . get_block_wrapper_attributes( array( 'class' => 'aisf-committees-names' ) ) . '>';
	foreach ( $items as $c ) {
		$url = trailingslashit( $archive_url ) . '#' . rawurlencode( $c['id'] );
		$h .= '<li' . ( $c['frozen'] ? ' class="is-frozen"' : '' ) . '><a href="' . esc_url( $url ) . '" aria-label="Apri la scheda del comitato ' . esc_attr( $c['name'] ) . '">' . esc_html( $c['name'] ) . '</a></li>';
	}
	return $h . '</ul>';
}

function aisf_render_committees_map( $attributes ) {
	$show_note = ! isset( $attributes['showFrozenNote'] ) || $attributes['showFrozenNote'];

	$items   = aisf_committees_items();
	$wrapper = get_block_wrapper_attributes( array( 'class' => 'aisf-committees' ) );

	if ( ! $items ) {
		return '<div ' . $wrapper . '><p class="aisf-committees__empty-msg">Nessun comitato pubblicato. Aggiungili da Comitati → Aggiungi nuovo.</p></div>';
	}

	$layout   = aisf_committees_cluster( $items );
	$singles  = $layout['singles'];
	$clusters = $layout['clusters'];

	$archive_url = get_post_type_archive_link( 'aisf_committee' );
	$frozen_names = array();
	foreach ( $items as $i ) {
		if ( $i['frozen'] ) {
			$frozen_names[] = $i['name'];
		}
	}

	$js = get_template_directory() . '/assets/js/committees.js';
	if ( file_exists( $js ) ) {
		wp_enqueue_script( 'aisf-committees', get_template_directory_uri() . '/assets/js/committees.js', array(), filemtime( $js ), true );
	}

	$h = '<div ' . $wrapper . '><div class="aisf-committees__grid">';

	/* --- Colonna mappa --- */
	$h .= '<div class="aisf-committees__mapcol">';
	$h .= '<div class="aisf-map" data-committee-map data-link-base="' . esc_url( $archive_url ) . '">';
	$h .= aisf_committees_canvas( $singles, $clusters, false );
	$h .= '<div class="aisf-map__caption" data-map-caption aria-live="polite">Tocca un punto per il comitato</div>';
	foreach ( $clusters as $n => $cl ) {
		$h .= '<div class="aisf-map__panel" data-cluster-panel="' . (int) $n . '" hidden>';
		foreach ( $cl['members'] as $m ) {
			$h .= '<button type="button" class="aisf-map__goto" data-goto="' . esc_attr( $m['id'] ) . '">' . esc_html( $m['name'] ) . '</button>';
		}
		$h .= '</div>';
	}
	$h .= '</div></div>'; // map, mapcol

	/* --- Colonna elenco --- */
	$h .= '<div class="aisf-committees__listcol">';
	$h .= '<div class="aisf-committees__tools">';
	$h .= '<input id="lc-search" class="aisf-committees__search" type="search" placeholder="Cerca per città o presidente…" aria-label="Cerca un comitato" />';
	$h .= '<div class="aisf-committees__filters" role="group" aria-label="Filtra per stato">';
	$h .= '<button type="button" data-lc-filter="all" aria-pressed="true">Tutti</button>';
	$h .= '<button type="button" data-lc-filter="active" aria-pressed="false">Attivi</button>';
	$h .= '<button type="button" data-lc-filter="frozen" aria-pressed="false">Sospesi</button>';
	$h .= '</div></div>';
	$h .= '<p id="lc-count" class="aisf-committees__count" aria-live="polite"></p>';

	$h .= '<div id="lc-list" class="aisf-committees__list">';
	foreach ( $items as $c ) {
		$search = function_exists( 'mb_strtolower' ) ? mb_strtolower( $c['name'] . ' ' . $c['president'] ) : strtolower( $c['name'] . ' ' . $c['president'] );
		$h .= '<details id="' . esc_attr( $c['id'] ) . '" class="aisf-lc" data-committee-card data-status="' . ( $c['frozen'] ? 'frozen' : 'active' ) . '" data-search="' . esc_attr( $search ) . '">';
		$h .= '<summary class="aisf-lc__summary">';
		if ( '' !== $c['photo'] ) {
			$h .= '<img class="aisf-lc__avatar" src="' . esc_url( $c['photo'] ) . '" alt="" loading="lazy" />';
		} else {
			$initial = function_exists( 'mb_substr' ) ? mb_substr( $c['name'], 0, 1 ) : substr( $c['name'], 0, 1 );
			$h .= '<span class="aisf-lc__avatar aisf-lc__avatar--initial" aria-hidden="true">' . esc_html( $initial ) . '</span>';
		}
		$h .= '<span class="aisf-lc__heading"><span class="aisf-lc__name">' . esc_html( $c['name'] ) . '</span>';
		if ( '' !== $c['president'] ) {
			$h .= '<span class="aisf-lc__president">' . esc_html( $c['president'] ) . '</span>';
		}
		$h .= '</span>';
		if ( $c['frozen'] ) {
			$h .= '<span class="aisf-lc__badge">Sospeso</span>';
		}
		$h .= '<svg class="aisf-lc__chevron" width="16" height="16" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" aria-hidden="true"><path d="M4 6l4 4 4-4"/></svg>';
		$h .= '</summary>';

		$h .= '<div class="aisf-lc__body">';
		if ( '' !== $c['founded'] || '' !== $c['past'] ) {
			$h .= '<p class="aisf-lc__meta">';
			if ( '' !== $c['founded'] ) {
				$h .= '<span class="aisf-lc__since">' . esc_html( ( $c['frozen'] ? 'Fondato ' : 'Attivo dal ' ) . $c['founded'] ) . '</span>';
			}
			if ( '' !== $c['founded'] && '' !== $c['past'] ) {
				$h .= '<br>';
			}
			if ( '' !== $c['past'] ) {
				$h .= '<span>Già presidenti: ' . esc_html( $c['past'] ) . '</span>';
			}
			$h .= '</p>';
		}
		$h .= '<div class="aisf-lc__links">';
		if ( null !== $c['point'] ) {
			$h .= '<button type="button" class="aisf-lc__locate" data-locate="' . esc_attr( $c['id'] ) . '"><svg width="12" height="12" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.6" aria-hidden="true"><path d="M8 14s5-4.6 5-8a5 5 0 1 0-10 0c0 3.4 5 8 5 8z"/><circle cx="8" cy="6" r="1.6"/></svg>Mappa</button>';
		}
		if ( '' !== $c['email'] ) {
			$h .= '<a class="aisf-lc__mail" href="' . esc_url( 'mailto:' . $c['email'] ) . '">' . esc_html( $c['email'] ) . '</a>';
		}
		if ( '' !== $c['link'] ) {
			$h .= '<a class="aisf-lc__ext" href="' . esc_url( $c['link'] ) . '" target="_blank" rel="noopener">Social →</a>';
		}
		if ( '' !== $c['rules'] ) {
			$h .= '<a class="aisf-lc__ext" href="' . esc_url( $c['rules'] ) . '" target="_blank" rel="noopener">Regolamento →</a>';
		}
		$h .= '</div></div></details>';
	}
	$h .= '</div>';

	$h .= '<div id="lc-empty" class="aisf-committees__empty is-hidden"><p class="aisf-committees__empty-title">Nessun comitato trovato.</p><p>Prova a cercare un\'altra città.</p></div>';

	if ( $show_note && $frozen_names ) {
		$h .= '<div class="aisf-committees__note"><strong>Comitati sospesi:</strong> ' . esc_html( implode( ' · ', $frozen_names ) ) . ' — in cerca di nuovi referenti per ripartire. Vuoi riavviarne uno? <a href="mailto:info@ai-sf.it">Scrivici →</a></div>';
	}

	$h .= '</div></div></div>'; // listcol, grid, wrapper
	return $h;
}

/* ==========================================================================
   3. Dati iniziali: i 21 comitati, caricati una volta sola se non ce n'è nessuno
   ========================================================================== */
add_action( 'init', function() {
	if ( get_option( 'aisf_committees_seeded' ) || ! post_type_exists( 'aisf_committee' ) ) {
		return;
	}
	update_option( 'aisf_committees_seeded', 1 );

	$existing = get_posts( array(
		'post_type'      => 'aisf_committee',
		'post_status'    => 'any',
		'posts_per_page' => 1,
		'fields'         => 'ids',
		'no_found_rows'  => true,
	) );
	if ( $existing ) {
		return; // già inseriti a mano: non si tocca nulla
	}

	$file = get_theme_file_path( 'inc/committees-seed.json' );
	$data = file_exists( $file ) ? json_decode( (string) file_get_contents( $file ), true ) : null;
	if ( ! is_array( $data ) ) {
		return;
	}

	foreach ( $data as $c ) {
		$meta = array(
			'_committee_president'       => $c['president'],
			'_committee_status'          => $c['status'],
			'_committee_established'     => $c['established'],
			'_committee_email'           => $c['email'],
			'_committee_past_presidents' => $c['past_presidents'],
			'_committee_link'            => $c['link'],
			'_committee_rules'           => $c['rules'],
			'_committee_photo'           => $c['photo'],
		);
		if ( null !== $c['lat'] && null !== $c['lon'] ) {
			$meta['_committee_lat'] = (string) $c['lat'];
			$meta['_committee_lon'] = (string) $c['lon'];
		}
		wp_insert_post( array(
			'post_type'   => 'aisf_committee',
			'post_status' => 'publish',
			'post_title'  => $c['name'],
			'post_name'   => $c['slug'],
			'meta_input'  => $meta,
		) );
	}
}, 30 );
