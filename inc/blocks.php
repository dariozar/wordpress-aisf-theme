<?php
/**
 * Blocchi dinamici AISF.
 *
 * Sono blocchi "server-side": il markup lo genera PHP, quindi l'anteprima nell'Editor
 * e il sito pubblico mostrano la stessa cosa. Si inseriscono dall'inseritore dei blocchi
 * (sezione "Widget") e hanno pochi attributi, modificabili nel pattern o nel codice del blocco.
 *
 *  - aisf/executive-members : membri del Comitato Esecutivo, raggruppati per mandato.
 *  - aisf/events-list       : eventi "prossimi" o "passati", come cards o come righe compatte.
 *  - aisf/documents-list    : documenti come card con descrizione espandibile, per anno.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action( 'init', function() {
	$supports = array(
		'autoRegister' => true, // anteprima nell'Editor (WordPress 6.7+)
		'html'         => false,
	);

	register_block_type( 'aisf/executive-members', array(
		'api_version'     => 3,
		'title'           => 'Membri del Comitato Esecutivo',
		'description'     => 'Elenco dei membri dell\'Esecutivo, raggruppati per anno di mandato.',
		'category'        => 'widgets',
		'icon'            => 'groups',
		'supports'        => $supports,
		'render_callback' => 'aisf_render_executive_members',
	) );

	register_block_type( 'aisf/events-list', array(
		'api_version'     => 3,
		'title'           => 'Elenco eventi',
		'description'     => 'Eventi in programma o passati, come card o righe compatte.',
		'category'        => 'widgets',
		'icon'            => 'calendar-alt',
		'attributes'      => array(
			'scope'    => array( 'type' => 'string', 'default' => 'upcoming' ), // upcoming | past | all
			'layout'   => array( 'type' => 'string', 'default' => 'cards' ),    // cards | compact
			'limit'    => array( 'type' => 'integer', 'default' => 0 ),         // 0 = tutti
			'fallback' => array( 'type' => 'boolean', 'default' => false ),     // se non ci sono prossimi, mostra i più recenti
		),
		'supports'        => $supports,
		'render_callback' => 'aisf_render_events_list',
	) );

	register_block_type( 'aisf/documents-list', array(
		'api_version'     => 3,
		'title'           => 'Elenco documenti',
		'description'     => 'Elenco di documenti con pulsante direttamente cliccabile, filtrabile per sezione, anno e sottosezioni.',
		'category'        => 'widgets',
		'icon'            => 'media-document',
		'attributes'      => array(
			'category'             => array( 'type' => 'string', 'default' => '' ),
			'subsection'           => array( 'type' => 'string', 'default' => '' ),
			'groupByYear'          => array( 'type' => 'boolean', 'default' => true ),
			'groupByMonth'         => array( 'type' => 'boolean', 'default' => false ),
			'groupBySubsection'    => array( 'type' => 'boolean', 'default' => false ),
			'subsectionTitles'     => array( 'type' => 'string', 'default' => 'Videoconferenze del Comitato Esecutivo, Videoconferenze con i Comitati Locali, Assemblea Generale Annuale' ),
			'showEmptySubsections' => array( 'type' => 'boolean', 'default' => true ),
		),
		'supports'        => $supports,
		'render_callback' => 'aisf_render_documents_list',
	) );
}, 11 );

/* ==========================================================================
   Esecutivo
   ========================================================================== */
function aisf_render_executive_members() {
	$exec_pt        = function_exists( 'aisf_detect_executive_post_type' ) ? aisf_detect_executive_post_type() : 'aisf_executive';
	$roles_priority = function_exists( 'aisf_get_executive_roles' ) ? aisf_get_executive_roles() : array();

	$posts = get_posts( array(
		'post_type'      => $exec_pt,
		'post_status'    => 'publish',
		'posts_per_page' => -1,
		'no_found_rows'  => true,
	) );

	$wrapper = get_block_wrapper_attributes( array( 'class' => 'aisf-exec' ) );

	if ( ! $posts ) {
		return '<div ' . $wrapper . '><p class="aisf-exec__empty">Nessun membro del Comitato Esecutivo ancora pubblicato. Aggiungili dalla bacheca di WordPress selezionando Ruolo, Anno di Mandato e Immagine in evidenza.</p></div>';
	}

	$by_year = array();
	foreach ( $posts as $post ) {
		$year = get_post_meta( $post->ID, '_aisf_exec_year', true );
		if ( ! $year ) { $year = get_post_meta( $post->ID, 'year', true ); }
		if ( ! $year ) { $year = get_post_meta( $post->ID, 'anno', true ); }
		if ( empty( $year ) ) { $year = 'Mandato Corrente'; }

		$role = get_post_meta( $post->ID, '_aisf_exec_role', true );
		if ( ! $role ) { $role = get_post_meta( $post->ID, 'role', true ); }
		if ( ! $role ) { $role = get_post_meta( $post->ID, 'ruolo', true ); }

		$bio = '';
		foreach ( array( '_aisf_exec_bio', 'bio', 'description', 'descrizione', '_description' ) as $bio_key ) {
			$bio = trim( (string) get_post_meta( $post->ID, $bio_key, true ) );
			if ( '' !== $bio ) { break; }
		}
		if ( '' === $bio ) {
			$bio = trim( (string) get_post_field( 'post_excerpt', $post->ID ) );
		}
		if ( '' === $bio ) {
			$bio = trim( (string) get_post_field( 'post_content', $post->ID ) );
		}
		$bio = wp_strip_all_tags( $bio );

		$by_year[ $year ][] = array(
			'name'     => get_the_title( $post ),
			'role'     => (string) $role,
			'priority' => isset( $roles_priority[ $role ] ) ? $roles_priority[ $role ] : 99,
			'photo'    => get_the_post_thumbnail_url( $post->ID, 'medium_large' ),
			'bio'      => $bio,
		);
	}

	krsort( $by_year );

	$html = '<div ' . $wrapper . '>';
	foreach ( $by_year as $year => $members ) {
		usort( $members, function( $a, $b ) {
			return $a['priority'] === $b['priority'] ? strcmp( $a['name'], $b['name'] ) : $a['priority'] - $b['priority'];
		} );

		$html .= '<section class="aisf-exec__year">';
		$html .= '<h2 class="aisf-exec__year-title">Comitato Esecutivo ' . esc_html( $year ) . '</h2>';
		$html .= '<div class="aisf-exec__grid">';
		foreach ( $members as $m ) {
			$html .= '<details class="aisf-exec__card">';
			$html .= '<summary class="aisf-exec__summary">';
			$html .= '<div class="aisf-exec__photo">';
			if ( ! empty( $m['photo'] ) ) {
				$html .= '<img src="' . esc_url( $m['photo'] ) . '" alt="" loading="lazy">';
			} else {
				$html .= '<span class="aisf-exec__initial" aria-hidden="true">' . esc_html( function_exists( 'mb_substr' ) ? mb_substr( $m['name'], 0, 1 ) : substr( $m['name'], 0, 1 ) ) . '</span>';
			}
			$html .= '</div><div class="aisf-exec__info">';
			if ( '' !== $m['role'] ) {
				$html .= '<span class="aisf-exec__role">' . esc_html( $m['role'] ) . '</span>';
			}
			$html .= '<h3 class="aisf-exec__name">' . esc_html( $m['name'] ) . '</h3>';
			$html .= '<span class="aisf-exec__toggle">Scopri il profilo <span aria-hidden="true">＋</span></span>';
			$html .= '</div></summary>';
			$html .= '<div class="aisf-exec__panel"><div class="aisf-exec__panel-inner"><p class="aisf-exec__bio">';
			$html .= '' !== $m['bio'] ? nl2br( esc_html( $m['bio'] ) ) : 'Presentazione in aggiornamento.';
			$html .= '</p></div></div></details>';
		}
		$html .= '</div></section>';
	}
	return $html . '</div>';
}
/* ==========================================================================
   Eventi
   ========================================================================== */

/** Mese + anno scritti a mano ("APRILE 2026", "apr 2026") => array( anno, mese ) oppure null. */
function aisf_parse_month_year( $text ) {
	$months = array(
		'gennaio' => 1, 'gen' => 1, 'febbraio' => 2, 'feb' => 2, 'marzo' => 3, 'mar' => 3, 'aprile' => 4, 'apr' => 4,
		'maggio' => 5, 'mag' => 5, 'giugno' => 6, 'giu' => 6, 'luglio' => 7, 'lug' => 7, 'agosto' => 8, 'ago' => 8,
		'settembre' => 9, 'sett' => 9, 'set' => 9, 'ottobre' => 10, 'ott' => 10, 'novembre' => 11, 'nov' => 11,
		'dicembre' => 12, 'dic' => 12,
		'january' => 1, 'february' => 2, 'march' => 3, 'april' => 4, 'may' => 5, 'june' => 6, 'july' => 7,
		'august' => 8, 'september' => 9, 'october' => 10, 'november' => 11, 'december' => 12,
	);
	if ( preg_match( '/([a-zà]+)\.?\s+(\d{4})/iu', (string) $text, $m ) ) {
		$key = mb_strtolower( $m[1] );
		if ( isset( $months[ $key ] ) ) {
			return array( (int) $m[2], $months[ $key ] );
		}
	}
	return null;
}

/** Data ISO valida (Y-m-d) => timestamp UTC, altrimenti null. */
function aisf_iso_to_ts( $iso ) {
	if ( ! preg_match( '/^(\d{4})-(\d{2})-(\d{2})$/', (string) $iso, $m ) || ! checkdate( (int) $m[2], (int) $m[3], (int) $m[1] ) ) {
		return null;
	}
	return gmmktime( 0, 0, 0, (int) $m[2], (int) $m[3], (int) $m[1] );
}

/**
 * Inizio e fine di un evento (timestamp UTC a mezzanotte) e data da mostrare.
 *
 * Ordine: _event_date_iso (+ _event_end_date) > "mese anno" scritto in _event_date > nulla.
 *
 * @return array{start:?int,end:?int,label:string}
 */
function aisf_event_info( $post_id ) {
	$iso   = trim( (string) get_post_meta( $post_id, '_event_date_iso', true ) );
	$text  = trim( (string) get_post_meta( $post_id, '_event_date', true ) );
	$start = aisf_iso_to_ts( $iso );
	$end   = null;
	$label = $text;

	if ( null !== $start ) {
		$end   = aisf_iso_to_ts( trim( (string) get_post_meta( $post_id, '_event_end_date', true ) ) );
		$end   = ( null !== $end && $end >= $start ) ? $end : $start;
		$label = wp_date( 'j M Y', $start, new DateTimeZone( 'UTC' ) );
	} elseif ( null !== ( $my = aisf_parse_month_year( $text ) ) ) {
		$start = gmmktime( 0, 0, 0, $my[1], 1, $my[0] );
		$end   = gmmktime( 0, 0, 0, $my[1] + 1, 0, $my[0] ); // ultimo giorno del mese
	}

	return array( 'start' => $start, 'end' => $end, 'label' => $label );
}

function aisf_render_event_pill( $label ) {
	return '' === $label ? '' : '<span class="aisf-pill">' . esc_html( $label ) . '</span>';
}

function aisf_render_events_list( $attributes ) {
	$scope    = isset( $attributes['scope'] ) ? $attributes['scope'] : 'upcoming';
	$layout   = isset( $attributes['layout'] ) ? $attributes['layout'] : 'cards';
	$limit    = isset( $attributes['limit'] ) ? (int) $attributes['limit'] : 0;
	$fallback = ! empty( $attributes['fallback'] );

	$posts = get_posts( array(
		'post_type'      => 'aisf_event',
		'post_status'    => 'publish',
		'posts_per_page' => -1,
		'no_found_rows'  => true,
	) );

	$today = strtotime( wp_date( 'Y-m-d' ) . ' UTC' );
	$items = array();
	foreach ( $posts as $post ) {
		$info = aisf_event_info( $post->ID );
		// Senza una data riconoscibile l'evento va in archivio.
		$upcoming = ( null !== $info['end'] && $info['end'] >= $today );
		$sort     = null !== $info['start'] ? $info['start'] : strtotime( $post->post_date_gmt . ' UTC' );
		$items[]  = array( 'post' => $post, 'info' => $info, 'upcoming' => $upcoming, 'sort' => $sort );
	}

	$pick = function( $want_upcoming ) use ( $items ) {
		$list = array_values( array_filter( $items, function( $i ) use ( $want_upcoming ) { return $i['upcoming'] === $want_upcoming; } ) );
		usort( $list, function( $a, $b ) use ( $want_upcoming ) {
			return $want_upcoming ? $a['sort'] <=> $b['sort'] : $b['sort'] <=> $a['sort'];
		} );
		return $list;
	};

	if ( 'past' === $scope ) {
		$list = $pick( false );
	} elseif ( 'all' === $scope ) {
		$list = $items;
		usort( $list, function( $a, $b ) { return $b['sort'] <=> $a['sort']; } );
	} else {
		$list = $pick( true );
		if ( ! $list && $fallback ) {
			$list = $pick( false );
		}
	}

	if ( $limit > 0 ) {
		$list = array_slice( $list, 0, $limit );
	}

	$wrapper = get_block_wrapper_attributes( array( 'class' => 'aisf-events aisf-events--' . ( 'compact' === $layout ? 'compact' : 'cards' ) ) );

	if ( ! $list ) {
		$msg = 'past' === $scope ? 'Nessun evento in archivio.' : 'Nessun evento in programma — torna presto.';
		return '<div ' . $wrapper . '><p class="aisf-events__empty">' . esc_html( $msg ) . '</p></div>';
	}

	$html = '<div ' . $wrapper . '>';
	foreach ( $list as $item ) {
		$post  = $item['post'];
		$label = $item['info']['label'];
		if ( '' === $label ) {
			$label = wp_date( 'M Y', strtotime( $post->post_date_gmt . ' UTC' ), new DateTimeZone( 'UTC' ) );
		}
		$cover    = get_the_post_thumbnail_url( $post->ID, 'large' );
		$type     = trim( (string) get_post_meta( $post->ID, '_event_type', true ) );
		$location = trim( (string) get_post_meta( $post->ID, '_event_location', true ) );
		$title    = get_the_title( $post );
		$href     = get_permalink( $post );

		if ( 'compact' === $layout ) {
			$html .= '<a class="aisf-event-row" href="' . esc_url( $href ) . '">';
			if ( $cover ) {
				$html .= '<img class="aisf-event-row__thumb" src="' . esc_url( $cover ) . '" alt="" loading="lazy">';
			}
			$meta  = trim( $label . ( '' !== $location ? ' · ' . $location : '' ) );
			$html .= '<span class="aisf-event-row__text"><span class="aisf-event-row__meta">' . esc_html( $meta ) . '</span>';
			$html .= '<span class="aisf-event-row__title">' . esc_html( $title ) . '</span></span></a>';
			continue;
		}

		$html .= '<a class="aisf-event-card" href="' . esc_url( $href ) . '">';
		if ( $cover ) {
			$html .= '<span class="aisf-event-card__media"><img src="' . esc_url( $cover ) . '" alt="" loading="lazy">' . aisf_render_event_pill( $label ) . '</span>';
		}
		$html .= '<span class="aisf-event-card__body">';
		if ( ! $cover ) {
			$html .= aisf_render_event_pill( $label );
		}
		$html .= '<span class="aisf-event-card__title">' . esc_html( $title ) . '</span>';
		$html .= '<span class="aisf-event-card__foot"><span>' . esc_html( $type ) . '</span><span>' . esc_html( $location ) . '</span></span>';
		$html .= '</span></a>';
	}
	return $html . '</div>';
}

/* ==========================================================================
   Documenti
   ========================================================================== */

/**
 * Normalizza il nome della sezione/categoria di un documento per associarlo
 * alle 4 sezioni principali ("Statuto e Atto Fondativo", "Regolamenti",
 * "Piano Strategico", "Verbali") o a eventuali sezioni personalizzate.
 */
function aisf_normalize_doc_category( $raw_cat, $post_title = '', $raw_sub = '' ) {
	$cat   = trim( (string) $raw_cat );
	$lower = function_exists( 'mb_strtolower' ) ? mb_strtolower( $cat ) : strtolower( $cat );

	if ( '' === $lower && '' !== trim( (string) $raw_sub ) ) {
		return 'Verbali';
	}

	$check = '' !== $lower ? $lower : ( function_exists( 'mb_strtolower' ) ? mb_strtolower( (string) $post_title ) : strtolower( (string) $post_title ) );

	if ( false !== strpos( $check, 'statuto' ) || false !== strpos( $check, 'atto fondativo' ) || false !== strpos( $check, 'atto costitutivo' ) ) {
		return 'Statuto e Atto Fondativo';
	}
	if ( false !== strpos( $check, 'regolament' ) ) {
		return 'Regolamenti';
	}
	if ( false !== strpos( $check, 'piano strategico' ) || false !== strpos( $check, 'strategico' ) ) {
		return 'Piano Strategico';
	}
	if ( false !== strpos( $check, 'verbal' ) || false !== strpos( $check, 'videoconferenz' ) || false !== strpos( $check, 'assemblea generale' ) || false !== strpos( $check, 'aga' ) ) {
		return 'Verbali';
	}

	return '' !== $cat ? $cat : 'Statuto e Atto Fondativo';
}

/**
 * Risolve la sottosezione di un documento (es. per i Verbali), mappando le 3 sottosezioni
 * standard ai titoli personalizzabili impostati nel blocco, oppure mantenendo qualsiasi
 * titolo di sottosezione personalizzato inserito nel documento.
 */
function aisf_resolve_doc_subsection( $raw_sub, $post_title, $configured_titles ) {
	$sub_0 = isset( $configured_titles[0] ) && '' !== $configured_titles[0] ? $configured_titles[0] : 'Videoconferenze del Comitato Esecutivo';
	$sub_1 = isset( $configured_titles[1] ) && '' !== $configured_titles[1] ? $configured_titles[1] : 'Videoconferenze con i Comitati Locali';
	$sub_2 = isset( $configured_titles[2] ) && '' !== $configured_titles[2] ? $configured_titles[2] : 'Assemblea Generale Annuale';

	$sub   = trim( (string) $raw_sub );
	$lower = function_exists( 'mb_strtolower' ) ? mb_strtolower( $sub ) : strtolower( $sub );

	if ( '' !== $sub ) {
		// Se corrisponde esattamente a uno dei titoli configurati nel blocco, usa quello.
		foreach ( $configured_titles as $ct ) {
			$ct_lower = function_exists( 'mb_strtolower' ) ? mb_strtolower( $ct ) : strtolower( $ct );
			if ( $lower === $ct_lower ) {
				return $ct;
			}
		}
		if ( false !== strpos( $lower, 'comitato esecutivo' ) || 'ce' === $lower || 'verbali ce' === $lower ) {
			return $sub_0;
		}
		if ( false !== strpos( $lower, 'comitati locali' ) || 'lc' === $lower || 'verbali lc' === $lower ) {
			return $sub_1;
		}
		if ( false !== strpos( $lower, 'assemblea generale' ) || 'aga' === $lower || 'verbali aga' === $lower ) {
			return $sub_2;
		}
		// Sottosezione personalizzata inserita dall'utente: mantieni il titolo esatto.
		return $sub;
	}

	// Inferenza dal titolo del documento se il campo sottosezione non è stato compilato
	$title_lower = function_exists( 'mb_strtolower' ) ? mb_strtolower( (string) $post_title ) : strtolower( (string) $post_title );
	if ( false !== strpos( $title_lower, 'comitati locali' ) || preg_match( '/\blc\b/u', $title_lower ) ) {
		return $sub_1;
	}
	if ( false !== strpos( $title_lower, 'assemblea generale' ) || preg_match( '/\baga\b/u', $title_lower ) ) {
		return $sub_2;
	}
	return $sub_0;
}

/**
 * Restituisce l'anno accademico (es. "2025/2026") a partire dal campo _document_year
 * oppure, se vuoto o indicato come singolo anno solare, lo calcola/normalizza nel formato AAAA/AAAA.
 */
function aisf_format_academic_year( $raw_year, $post_ts = 0 ) {
	$val = trim( (string) $raw_year );

	// Già nel formato "2025/2026" o "2025-2026"
	if ( preg_match( '/^(\d{4})\s*[\/\-]\s*(\d{4})$/', $val, $m ) ) {
		return $m[1] . '/' . $m[2];
	}
	// Formato abbreviato "2025/26" o "2025-26"
	if ( preg_match( '/^(\d{4})\s*[\/\-]\s*(\d{2})$/', $val, $m ) ) {
		$prefix = substr( $m[1], 0, 2 );
		return $m[1] . '/' . $prefix . $m[2];
	}
	// Singolo anno a 4 cifre (es. "2025"): converte in anno accademico "2025/2026"
	if ( preg_match( '/^(\d{4})$/', $val, $m ) ) {
		$y = (int) $m[1];
		if ( $y >= 1900 && $y <= 2100 ) {
			return $y . '/' . ( $y + 1 );
		}
	}
	// Qualsiasi altra stringa personalizzata non vuota inserita dall'utente
	if ( '' !== $val ) {
		return $val;
	}

	// Calcolo automatico dalla data del documento (da settembre inizia il nuovo A.A.)
	$ts    = $post_ts > 0 ? $post_ts : time();
	$year  = (int) gmdate( 'Y', $ts );
	$month = (int) gmdate( 'n', $ts );
	if ( $month >= 9 ) {
		return $year . '/' . ( $year + 1 );
	}
	return ( $year - 1 ) . '/' . $year;
}

function aisf_render_documents_list( $attributes ) {
	$filter_cat      = isset( $attributes['category'] ) ? trim( (string) $attributes['category'] ) : '';
	$filter_sub      = isset( $attributes['subsection'] ) ? trim( (string) $attributes['subsection'] ) : '';
	$by_year         = ! isset( $attributes['groupByYear'] ) || $attributes['groupByYear'];
	$by_month        = ! empty( $attributes['groupByMonth'] );
	$by_sub          = ! empty( $attributes['groupBySubsection'] );
	$show_empty_subs = ! isset( $attributes['showEmptySubsections'] ) || ! empty( $attributes['showEmptySubsections'] );
	$utc             = new DateTimeZone( 'UTC' );

	$raw_sub_titles = isset( $attributes['subsectionTitles'] )
		? (string) $attributes['subsectionTitles']
		: 'Videoconferenze del Comitato Esecutivo, Videoconferenze con i Comitati Locali, Assemblea Generale Annuale';
	$configured_subs = array_values( array_filter( array_map( 'trim', explode( ',', $raw_sub_titles ) ), 'strlen' ) );
	if ( empty( $configured_subs ) ) {
		$configured_subs = array(
			'Videoconferenze del Comitato Esecutivo',
			'Videoconferenze con i Comitati Locali',
			'Assemblea Generale Annuale',
		);
	}

	$posts = get_posts( array(
		'post_type'      => 'aisf_document',
		'post_status'    => 'publish',
		'posts_per_page' => -1,
		'no_found_rows'  => true,
	) );

	$target_cat = '' !== $filter_cat ? aisf_normalize_doc_category( $filter_cat ) : '';

	$filtered = array();
	foreach ( $posts as $post ) {
		$raw_cat  = get_post_meta( $post->ID, '_document_category', true );
		$raw_sub  = get_post_meta( $post->ID, '_document_subsection', true );
		$norm_cat = aisf_normalize_doc_category( $raw_cat, get_the_title( $post ), $raw_sub );

		if ( '' !== $target_cat ) {
			$match_norm = ( function_exists( 'mb_strtolower' ) ? mb_strtolower( $norm_cat ) : strtolower( $norm_cat ) ) === ( function_exists( 'mb_strtolower' ) ? mb_strtolower( $target_cat ) : strtolower( $target_cat ) );
			$match_raw  = ( function_exists( 'mb_strtolower' ) ? mb_strtolower( trim( (string) $raw_cat ) ) : strtolower( trim( (string) $raw_cat ) ) ) === ( function_exists( 'mb_strtolower' ) ? mb_strtolower( $filter_cat ) : strtolower( $filter_cat ) );
			if ( ! $match_norm && ! $match_raw ) {
				continue;
			}
		}

		$resolved_sub = aisf_resolve_doc_subsection( $raw_sub, get_the_title( $post ), $configured_subs );
		if ( '' !== $filter_sub ) {
			$sub_a = function_exists( 'mb_strtolower' ) ? mb_strtolower( $resolved_sub ) : strtolower( $resolved_sub );
			$sub_b = function_exists( 'mb_strtolower' ) ? mb_strtolower( $filter_sub ) : strtolower( $filter_sub );
			$sub_c = function_exists( 'mb_strtolower' ) ? mb_strtolower( trim( (string) $raw_sub ) ) : strtolower( trim( (string) $raw_sub ) );
			if ( $sub_a !== $sub_b && $sub_c !== $sub_b ) {
				continue;
			}
		}

		$filtered[] = array(
			'post'       => $post,
			'subsection' => $resolved_sub,
		);
	}

	$wrapper = get_block_wrapper_attributes( array( 'class' => 'aisf-docs' ) );

	// Se non ci sono ancora documenti in questa sezione:
	// - Se sono attive le sottosezioni (es. Verbali) e showEmptySubsections è attivo, mostra comunque la struttura dell'anno accademico corrente e i menù a tendina delle sottosezioni.
	if ( empty( $filtered ) ) {
		if ( $by_sub && $show_empty_subs ) {
			$cur_aa = aisf_format_academic_year( '', time() );
			$html   = '<div ' . $wrapper . '>';
			$html  .= '<section class="aisf-docs__year' . ( $by_year ? '' : ' aisf-docs__year--flat' ) . '">';
			if ( $by_year ) {
				$html .= '<h3 class="aisf-docs__year-title">' . esc_html( $cur_aa ) . '</h3>';
			}
			$html .= '<div class="aisf-docs__body">';
			foreach ( $configured_subs as $sub_title ) {
				$html .= '<details class="aisf-docs__subsection">';
				$html .= '<summary class="aisf-docs__subsection-summary">';
				$html .= '<span class="aisf-docs__subsection-title">' . esc_html( $sub_title ) . '</span>';
				$html .= '<span class="aisf-docs__subsection-meta"><span class="aisf-docs__subsection-count">0</span><span class="aisf-docs__subsection-chevron" aria-hidden="true"></span></span>';
				$html .= '</summary>';
				$html .= '<div class="aisf-docs__subsection-body">';
				$html .= '<p class="aisf-docs__empty">Nessun documento caricato in questa sottosezione.</p>';
				$html .= '</div></details>';
			}
			$html .= '</div></section></div>';
			return $html;
		}
		return '<div ' . $wrapper . '><p class="aisf-docs__empty">Nessun documento pubblicato in questa sezione.</p></div>';
	}

	// Caso 1: Raggruppamento per Sottosezione a menù a tendina (es. Verbali divisi per Anno Accademico e Sottosezione)
	if ( $by_sub ) {
		$tree = array();
		foreach ( $filtered as $entry ) {
			$post     = $entry['post'];
			$sub      = $entry['subsection'];
			$ts       = strtotime( $post->post_date_gmt . ' UTC' );
			$raw_year = get_post_meta( $post->ID, '_document_year', true );
			$year_key = $by_year ? aisf_format_academic_year( $raw_year, $ts ) : '';
			$tree[ $year_key ][ $sub ][] = array( $ts, $post );
		}
		krsort( $tree, SORT_NATURAL );

		$html = '<div ' . $wrapper . '>';
		foreach ( $tree as $year_label => $subs_map ) {
			$html .= '<section class="aisf-docs__year' . ( $by_year ? '' : ' aisf-docs__year--flat' ) . '">';
			if ( $by_year && '' !== (string) $year_label ) {
				$html .= '<h3 class="aisf-docs__year-title">' . esc_html( (string) $year_label ) . '</h3>';
			}
			$html .= '<div class="aisf-docs__body">';

			// Costruisci l'ordine delle sottosezioni: prima quelle configurate nel blocco, poi eventuali sottosezioni personalizzate aggiuntive
			$ordered_sub_keys = $configured_subs;
			foreach ( array_keys( $subs_map ) as $existing_sub ) {
				if ( ! in_array( $existing_sub, $ordered_sub_keys, true ) ) {
					$ordered_sub_keys[] = $existing_sub;
				}
			}

			foreach ( $ordered_sub_keys as $sub_title ) {
				$items = isset( $subs_map[ $sub_title ] ) ? $subs_map[ $sub_title ] : array();
				if ( empty( $items ) && ! $show_empty_subs ) {
					continue;
				}
				$count = count( $items );
				$html .= '<details class="aisf-docs__subsection">';
				$html .= '<summary class="aisf-docs__subsection-summary">';
				$html .= '<span class="aisf-docs__subsection-title">' . esc_html( $sub_title ) . '</span>';
				$html .= '<span class="aisf-docs__subsection-meta"><span class="aisf-docs__subsection-count">' . (int) $count . '</span><span class="aisf-docs__subsection-chevron" aria-hidden="true"></span></span>';
				$html .= '</summary>';
				$html .= '<div class="aisf-docs__subsection-body">';
				if ( ! empty( $items ) ) {
					usort( $items, function( $a, $b ) { return $b[0] <=> $a[0]; } );
					$html .= '<div class="aisf-docs__list">';
					foreach ( $items as $item ) {
						$html .= aisf_render_document_card( $item[1] );
					}
					$html .= '</div>';
				} else {
					$html .= '<p class="aisf-docs__empty">Nessun documento caricato in questa sottosezione.</p>';
				}
				$html .= '</div></details>';
			}

			$html .= '</div></section>';
		}
		return $html . '</div>';
	}

	// Caso 2: Elenco standard (piatto o diviso per anno accademico, es. Statuto, Regolamenti, Piano Strategico)
	$tree = array();
	foreach ( $filtered as $entry ) {
		$post     = $entry['post'];
		$ts       = strtotime( $post->post_date_gmt . ' UTC' );
		$raw_year = get_post_meta( $post->ID, '_document_year', true );
		$year_key = $by_year ? aisf_format_academic_year( $raw_year, $ts ) : '';
		$month    = $by_month ? (int) gmdate( 'n', $ts ) : 0;
		$tree[ $year_key ][ $month ][] = array( $ts, $post );
	}
	krsort( $tree, SORT_NATURAL );

	$html = '<div ' . $wrapper . '>';
	foreach ( $tree as $year_label => $months ) {
		krsort( $months );
		$html .= '<section class="aisf-docs__year' . ( $by_year ? '' : ' aisf-docs__year--flat' ) . '">';
		if ( $by_year && '' !== (string) $year_label ) {
			$html .= '<h3 class="aisf-docs__year-title">' . esc_html( (string) $year_label ) . '</h3>';
		}
		$html .= '<div class="aisf-docs__body">';
		foreach ( $months as $month => $items ) {
			usort( $items, function( $a, $b ) { return $b[0] <=> $a[0]; } );
			if ( $by_month && $month > 0 ) {
				$html .= '<h4 class="aisf-docs__month">' . esc_html( wp_date( 'F', gmmktime( 0, 0, 0, (int) $month, 1, 2000 ), $utc ) ) . '</h4>';
			}
			$html .= '<div class="aisf-docs__list">';
			foreach ( $items as $item ) {
				$html .= aisf_render_document_card( $item[1] );
			}
			$html .= '</div>';
		}
		$html .= '</div></section>';
	}
	return $html . '</div>';
}

/**
 * Riga documento compatta: niente fisarmonica espandibile, titolo (con eventuale breve descrizione accanto)
 * e pulsante di apertura/consultazione immediatamente cliccabile (supporta link Google Drive in sola lettura e file PDF/DOCX).
 */
function aisf_render_document_card( $post ) {
	$url = trim( (string) get_post_meta( $post->ID, '_aisf_document_file_url', true ) );
	if ( '' === $url ) {
		$url = trim( (string) get_post_meta( $post->ID, '_document_file', true ) );
	}
	if ( '' === $url ) {
		$url = trim( (string) get_post_meta( $post->ID, 'file_url', true ) );
	}

	$desc_meta = trim( (string) get_post_meta( $post->ID, '_aisf_document_description', true ) );
	if ( '' === $desc_meta ) {
		$desc_meta = trim( (string) $post->post_excerpt );
	}
	if ( '' === $desc_meta ) {
		$desc_meta = trim( (string) $post->post_content );
	}
	$short_desc = trim( preg_replace( '/\s+/', ' ', wp_strip_all_tags( $desc_meta ) ) );

	$is_drive = ( false !== stripos( $url, 'drive.google.com' ) || false !== stripos( $url, 'docs.google.com' ) );
	$ext      = strtoupper( pathinfo( (string) wp_parse_url( $url, PHP_URL_PATH ), PATHINFO_EXTENSION ) );
	if ( $is_drive ) {
		$cta = 'Apri su Drive';
	} elseif ( in_array( $ext, array( 'PDF', 'DOC', 'DOCX' ), true ) ) {
		$cta = 'Apri ' . $ext;
	} else {
		$cta = 'Apri documento';
	}

	$html  = '<div class="aisf-doc-row">';
	$html .= '<div class="aisf-doc-row__main">';
	$html .= '<span class="aisf-doc-row__title">' . esc_html( get_the_title( $post ) ) . '</span>';
	if ( '' !== $short_desc ) {
		$html .= '<span class="aisf-doc-row__desc">' . esc_html( $short_desc ) . '</span>';
	}
	$html .= '</div>';
	if ( '' !== $url ) {
		$html .= '<a class="aisf-doc-row__btn" href="' . esc_url( $url ) . '" target="_blank" rel="noopener noreferrer">' . esc_html( $cta ) . ' <span aria-hidden="true">→</span></a>';
	} else {
		$html .= '<span class="aisf-doc-row__btn aisf-doc-row__btn--disabled">File non disponibile</span>';
	}
	$html .= '</div>';
	return $html;
}


/* ==========================================================================
   Riquadro "Informazioni" nella pagina del singolo evento (aisf/event-info)
   Mostra solo i campi compilati. La scadenza iscrizioni compare solo se inserita.
   ========================================================================== */
add_action( 'init', function() {
	register_block_type( 'aisf/event-info', array(
		'api_version'     => 3,
		'title'           => 'Informazioni evento',
		'description'     => 'Riquadro con data, luogo, tipo, scadenza iscrizioni e pulsante di iscrizione dell\'evento.',
		'category'        => 'widgets',
		'icon'            => 'info-outline',
		'uses_context'    => array( 'postId' ),
		'supports'        => array( 'autoRegister' => true, 'html' => false ),
		'render_callback' => 'aisf_render_event_info',
	) );
}, 12 );

function aisf_render_event_info( $attributes, $content, $block ) {
	$post_id = ( isset( $block->context['postId'] ) && $block->context['postId'] ) ? (int) $block->context['postId'] : (int) get_the_ID();
	if ( ! $post_id ) {
		return '';
	}

	$info  = aisf_event_info( $post_id );
	$tz    = new DateTimeZone( 'UTC' );
	$when  = $info['label'];
	$iso   = trim( (string) get_post_meta( $post_id, '_event_date_iso', true ) );
	if ( null !== aisf_iso_to_ts( $iso ) && null !== $info['end'] && $info['end'] > $info['start'] ) {
		$when = wp_date( 'j M Y', $info['start'], $tz ) . ' – ' . wp_date( 'j M Y', $info['end'], $tz );
	}

	$where = trim( (string) get_post_meta( $post_id, '_event_location', true ) );
	$type  = trim( (string) get_post_meta( $post_id, '_event_type', true ) );
	$url   = trim( (string) get_post_meta( $post_id, '_event_registration_url', true ) );

	$deadline_ts = aisf_iso_to_ts( trim( (string) get_post_meta( $post_id, '_event_registration_deadline', true ) ) );
	$closed      = ( null !== $deadline_ts && $deadline_ts < strtotime( 'today', current_time( 'timestamp', true ) ) );

	$rows = array(
		'Data'  => $when,
		'Luogo' => $where,
		'Tipo'  => $type,
	);
	if ( null !== $deadline_ts ) {
		$rows['Scadenza iscrizioni'] = wp_date( 'j F Y', $deadline_ts, $tz );
	}

	$h = '<aside ' . get_block_wrapper_attributes( array( 'class' => 'aisf-event-info' ) ) . '>';
	$h .= '<p class="aisf-event-info__title">Informazioni</p><dl class="aisf-event-info__list">';
	foreach ( $rows as $label => $value ) {
		if ( '' === trim( (string) $value ) ) {
			continue;
		}
		$h .= '<div class="aisf-event-info__row"><dt>' . esc_html( $label ) . '</dt><dd>' . esc_html( $value ) . '</dd></div>';
	}
	$h .= '</dl>';

	if ( '' !== $url ) {
		if ( $closed ) {
			$h .= '<p class="aisf-event-info__closed">Iscrizioni chiuse</p>';
		} else {
			$h .= '<a class="aisf-event-info__cta" href="' . esc_url( $url ) . '" target="_blank" rel="noopener">Iscriviti all\'evento →</a>';
		}
	}
	return $h . '</aside>';
}
