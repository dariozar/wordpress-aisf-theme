<?php
/**
 * AISF Theme - functions.php completo e definitivo
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

require_once get_template_directory() . '/inc/blocks.php'; // blocchi dinamici: Esecutivo, Eventi, Documenti
require_once get_template_directory() . '/inc/pages.php';  // pagine create una volta con contenuto a blocchi
require_once get_template_directory() . '/inc/committees.php'; // comitati: campi, blocco mappa + elenco, dati iniziali

/* ==========================================================================
   1. SETUP DEL TEMA, GOOGLE FONTS, STILI E SCRIPT (da /assets/)
   ========================================================================== */
add_action( 'after_setup_theme', function() {
    add_theme_support( 'wp-block-styles' );
    add_editor_style( 'style.css' ); // l'Editor mostra lo stesso aspetto del sito
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );

    $block_styles = array(
        'core/navigation' => 'core-navigation.css',
        'core/button'     => 'core-button.css',
        'core/cover'      => 'core-cover.css',
        'core/paragraph'  => 'core-paragraph.css',
        'core/group'      => 'core-group.css',
    );

    foreach ( $block_styles as $block_name => $file_name ) {
        $rel_path  = 'assets/styles/' . $file_name;
        $full_path = get_template_directory() . '/' . $rel_path;
        if ( file_exists( $full_path ) ) {
            wp_enqueue_block_style( $block_name, array(
                'handle' => 'aisf-' . sanitize_title( $block_name ),
                'src'    => get_template_directory_uri() . '/' . $rel_path,
                'path'   => $full_path,
            ) );
        }
    }
} );

add_action( 'wp_enqueue_scripts', function() {
    // 1. Carica i Google Fonts usati dal tema AISF
    wp_enqueue_style(
        'aisf-google-fonts',
        'https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,400..700;1,9..40,400..700&family=Instrument+Serif:ital@0;1&family=Inter:wght@400;500;600;700&family=JetBrains+Mono:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Space+Grotesk:wght@400;500;600;700&family=Space+Mono:wght@400;700&family=Syne:wght@600;700;800&display=swap',
        array(),
        null
    );

    // 2. Carica style.css principale
    wp_enqueue_style(
        'aisf-style',
        get_stylesheet_uri(),
        array( 'aisf-google-fonts' ),
        wp_get_theme()->get( 'Version' )
    );

    // 3. Carica assets/js/header.js
    $header_js = get_template_directory() . '/assets/js/header.js';
    if ( file_exists( $header_js ) ) {
        wp_enqueue_script(
            'aisf-header-js',
            get_template_directory_uri() . '/assets/js/header.js',
            array(),
            filemtime( $header_js ),
            true
        );
    }
} );

/* ==========================================================================
   2. CATEGORIE PATTERN, CUSTOM POST TYPES, BLOCK BINDINGS E PAGINE AUTOMATICHE
   ========================================================================== */
function aisf_get_executive_roles() {
    return array(
        'Presidente'          => 1,
        'Segretario'          => 2,
        'Tesoriere'           => 3,
        'IT Manager'          => 4,
        'PR Manager'          => 5,
        'Concept Manager'     => 6,
        'Responsabili Membri' => 7,
        'Responsabili Eventi' => 8,
    );
}

function aisf_detect_executive_post_type() {
    $candidates = array( 'aisf_executive', 'aisf_member', 'executive', 'esecutivo', 'aisf_esecutivo', 'member' );
    foreach ( $candidates as $pt ) {
        if ( post_type_exists( $pt ) ) {
            return $pt;
        }
    }
    return 'aisf_executive';
}

add_action( 'init', function() {
    if ( function_exists( 'register_block_pattern_category' ) ) {
        register_block_pattern_category( 'aisf/header', array( 'label' => 'AISF Header' ) );
        register_block_pattern_category( 'aisf/pages', array( 'label' => 'AISF Pages' ) );
        register_block_pattern_category( 'aisf/sections', array( 'label' => 'AISF Sections' ) );
        register_block_pattern_category( 'aisf-templates', array( 'label' => 'AISF Templates' ) );
    }

    // Eventi
    if ( ! post_type_exists( 'aisf_event' ) ) {
        register_post_type( 'aisf_event', array(
            'labels'       => array( 'name' => 'Eventi', 'singular_name' => 'Evento', 'add_new_item' => 'Aggiungi Evento' ),
            'public'       => true,
            'has_archive'  => true,
            'rewrite'      => array( 'slug' => 'eventi' ),
            'show_in_rest' => true,
            'menu_icon'    => 'dashicons-calendar-alt',
            'supports'     => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields' ),
        ) );
    }

    // Progetti
    if ( ! post_type_exists( 'aisf_project' ) ) {
        register_post_type( 'aisf_project', array(
            'labels'       => array( 'name' => 'Progetti', 'singular_name' => 'Progetto', 'add_new_item' => 'Aggiungi Progetto' ),
            'public'       => true,
            'has_archive'  => true,
            'rewrite'      => array( 'slug' => 'progetti' ),
            'show_in_rest' => true,
            'menu_icon'    => 'dashicons-portfolio',
            'supports'     => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields' ),
        ) );
    }

    // Comitati Locali
    if ( ! post_type_exists( 'aisf_committee' ) ) {
        register_post_type( 'aisf_committee', array(
            'labels'       => array( 'name' => 'Comitati', 'singular_name' => 'Comitato', 'add_new_item' => 'Aggiungi Comitato' ),
            'public'       => true,
            'has_archive'  => true,
            'rewrite'      => array( 'slug' => 'comitati' ),
            'show_in_rest' => true,
            'menu_icon'    => 'dashicons-location-alt',
            'supports'     => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields' ),
        ) );
    }

    // Documenti
    if ( ! post_type_exists( 'aisf_document' ) ) {
        register_post_type( 'aisf_document', array(
            'labels'              => array( 'name' => 'Documenti', 'singular_name' => 'Documento', 'add_new_item' => 'Aggiungi Documento' ),
            'public'              => false,  // niente pagina singola, niente archivio: i documenti sono card nella pagina /documenti
            'publicly_queryable'  => false,
            'exclude_from_search' => true,
            'show_in_nav_menus'   => false,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'has_archive'         => false,
            'rewrite'             => false,
            'show_in_rest'        => true,
            'menu_icon'           => 'dashicons-media-document',
            'supports'            => array( 'title', 'editor', 'excerpt', 'custom-fields' ),
        ) );
    }

    // Membri Esecutivo
    if ( ! post_type_exists( 'aisf_executive' ) ) {
        register_post_type( 'aisf_executive', array(
            'labels'       => array( 'name' => 'Esecutivo', 'singular_name' => 'Membro Esecutivo', 'add_new_item' => 'Aggiungi Membro Esecutivo' ),
            'public'       => true,
            'has_archive'  => false,
            'show_in_rest' => true,
            'menu_icon'    => 'dashicons-groups',
            'supports'     => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields' ),
        ) );
    }

    // Abilita immagine, editor ed estratto anche se il post type era già registrato.
    $exec_pt = aisf_detect_executive_post_type();
    if ( post_type_exists( $exec_pt ) ) {
        add_post_type_support( $exec_pt, 'editor' );
        add_post_type_support( $exec_pt, 'excerpt' );
    }
    foreach ( array( 'aisf_event', 'aisf_project', 'aisf_committee', 'aisf_document', 'aisf_documents', $exec_pt, 'post', 'page' ) as $pt ) {
        if ( post_type_exists( $pt ) ) {
            add_post_type_support( $pt, 'thumbnail' );
        }
    }

    // Registra i Meta Fields per i Block Bindings del tema
    $meta_bindings = array(
        'aisf_event'     => array( '_event_date', '_event_date_iso', '_event_end_date', '_event_type', '_event_location', '_event_registration_url', '_event_registration_deadline' ),
        'aisf_project'   => array( '_project_status', '_project_year', '_project_tag', '_project_url' ),
        'aisf_committee' => array( '_committee_city', '_committee_university', '_committee_email', '_committee_president', '_committee_region' ),
        'aisf_document'  => array( '_document_category', '_document_year', '_document_file', '_aisf_document_file_url' ),
    );

    foreach ( $meta_bindings as $pt => $keys ) {
        if ( post_type_exists( $pt ) ) {
            foreach ( $keys as $key ) {
                register_post_meta( $pt, $key, array(
                    'show_in_rest'      => true,
                    'single'            => true,
                    'type'              => 'string',
                    'sanitize_callback' => 'sanitize_text_field',
                    'auth_callback'     => '__return_true',
                ) );
            }
        }
    }
	// La bio usa il sanitizer textarea per conservare gli a capo inseriti nella scheda del membro.
	$exec_pt = function_exists( 'aisf_detect_executive_post_type' ) ? aisf_detect_executive_post_type() : 'aisf_executive';
	if ( post_type_exists( $exec_pt ) ) {
		register_post_meta( $exec_pt, '_aisf_exec_bio', array(
			'show_in_rest'      => true,
			'single'            => true,
			'type'              => 'string',
			'sanitize_callback' => 'sanitize_textarea_field',
			'auth_callback'     => '__return_true',
		) );
	}
}, 20 );


// Fallback automatico sia sul sito che nell'Editor (REST API) se _event_date, _event_type o _event_location sono vuoti.
// NB: dentro una closure __FUNCTION__ vale "{closure}", quindi remove_filter() non la toglie e get_post_meta()
// richiamerebbe il filtro all'infinito (errore 500 nelle richieste REST dell'editor). Si usa un flag statico.
add_filter( 'get_post_metadata', function( $value, $object_id, $meta_key, $single ) {
    static $running = false;

    if ( $running || null !== $value ) {
        return $value;
    }
    if ( ! in_array( $meta_key, array( '_event_date', '_event_type', '_event_location' ), true ) ) {
        return $value;
    }
    if ( 'aisf_event' !== get_post_type( $object_id ) ) {
        return $value;
    }
    // Non sovrascrivere i campi input quando sei nella schermata di modifica del singolo evento (post.php)
    if ( is_admin() && ( ! defined( 'REST_REQUEST' ) || ! REST_REQUEST ) ) {
        return $value;
    }

    $running = true;
    $actual  = get_post_meta( $object_id, $meta_key, true );
    $running = false;

    if ( empty( $actual ) ) {
        $fallbacks = array(
            '_event_date'     => strtoupper( get_the_date( 'M Y', $object_id ) ),
            '_event_type'     => 'EVENTO NAZIONALE',
            '_event_location' => 'ITALIA',
        );
        $fallback = $fallbacks[ $meta_key ];
        return $single ? $fallback : array( $fallback );
    }

    return $value;
}, 10, 4 );
/* ==========================================================================
   3. META BOX: EVENTI (DATA/TIPO/LUOGO + GALLERIA), ESECUTIVO, DOCUMENTI (PDF/DOCX)
   ========================================================================== */
add_action( 'admin_enqueue_scripts', function( $hook ) {
    if ( 'post.php' === $hook || 'post-new.php' === $hook ) {
        wp_enqueue_media();
    }
} );

add_action( 'add_meta_boxes', function() {
    // A) Meta Box Esecutivo: Selettore 8 Ruoli + Anno di Mandato
    $exec_pt = aisf_detect_executive_post_type();
    add_meta_box(
        'aisf_exec_role_year_box',
        'Ruolo e Anno di Mandato (Pagina /esecutivo)',
        function( $post ) {
            wp_nonce_field( 'aisf_extra_meta_save', 'aisf_extra_meta_nonce' );
            $current_role = get_post_meta( $post->ID, '_aisf_exec_role', true );
            if ( ! $current_role ) $current_role = get_post_meta( $post->ID, 'role', true );

            $current_year = get_post_meta( $post->ID, '_aisf_exec_year', true );
            if ( ! $current_year ) $current_year = get_post_meta( $post->ID, 'year', true );

            $roles = aisf_get_executive_roles();
            ?>
            <table class="form-table">
                <tr>
                    <th><label for="aisf_exec_role">Ruolo nell'Esecutivo</label></th>
                    <td>
                        <select id="aisf_exec_role" name="aisf_exec_role" style="min-width: 260px;">
                            <option value="">-- Seleziona un ruolo --</option>
                            <?php foreach ( $roles as $role_name => $priority ) : ?>
                                <option value="<?php echo esc_attr( $role_name ); ?>" <?php selected( $current_role, $role_name ); ?>>
                                    <?php echo esc_html( $role_name ); ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th><label for="aisf_exec_year">Anno di Mandato</label></th>
                    <td>
                        <input type="text" id="aisf_exec_year" name="aisf_exec_year" value="<?php echo esc_attr( $current_year ); ?>" placeholder="es. 2025/2026" class="regular-text" />
                        <p class="description">Es. <code>2025/2026</code>, <code>2024/2025</code>. Per la foto usa <strong>Immagine in evidenza</strong> a destra.</p>
                    </td>
                </tr>
                <tr>
                    <th><label for="aisf_exec_bio">Presentazione del membro</label></th>
                    <td>
                        <textarea id="aisf_exec_bio" name="aisf_exec_bio" rows="5" class="large-text" placeholder="Scrivi una breve descrizione del membro, delle sue attività o dei suoi interessi."><?php echo esc_textarea( get_post_meta( $post->ID, '_aisf_exec_bio', true ) ); ?></textarea>
                        <p class="description">Questa descrizione compare nella flashcard espandibile del membro sulla pagina /esecutivo.</p>
                    </td>
                </tr>
            </table>
            <?php
        },
        $exec_pt,
        'normal',
        'high'
    );

    // B) Meta Box Documenti: Upload PDF / DOCX
    foreach ( array( 'aisf_document', 'aisf_documents' ) as $doc_pt ) {
        if ( post_type_exists( $doc_pt ) ) {
            add_meta_box(
                'aisf_document_file_box',
                'Allegato Documento (PDF / DOCX)',
                function( $post ) {
                    wp_nonce_field( 'aisf_extra_meta_save', 'aisf_extra_meta_nonce' );
                    $file_url = get_post_meta( $post->ID, '_aisf_document_file_url', true );
                    ?>
                    <p>Seleziona o carica il file PDF o Word (.docx) da associare a questo documento:</p>
                    <div style="display:flex; gap:10px; align-items:center;">
                        <input type="text" id="aisf_document_file_url" name="aisf_document_file_url" value="<?php echo esc_attr( $file_url ); ?>" style="width:100%; max-width:500px;" placeholder="https://.../documento.pdf" />
                        <button type="button" class="button button-primary" id="aisf_upload_doc_btn">Carica / Scegli File</button>
                    </div>
                    <script>
                    jQuery(document).ready(function($){
                        var docFrame;
                        $('#aisf_upload_doc_btn').on('click', function(e){
                            e.preventDefault();
                            if (docFrame) { docFrame.open(); return; }
                            docFrame = wp.media({
                                title: 'Seleziona File PDF o DOCX',
                                button: { text: 'Usa questo file' },
                                library: { type: ['application/pdf', 'application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'] },
                                multiple: false
                            });
                            docFrame.on('select', function(){
                                var attachment = docFrame.state().get('selection').first().toJSON();
                                $('#aisf_document_file_url').val(attachment.url);
                            });
                            docFrame.open();
                        });
                    });
                    </script>
                    <?php
                },
                $doc_pt,
                'normal',
                'high'
            );
        }
    }

    // C) Meta Box Eventi: Dettagli (Data, Tipo, Luogo) + Galleria Fotografica
    if ( post_type_exists( 'aisf_event' ) ) {
        add_meta_box(
            'aisf_event_details_box',
            'Dettagli Card Evento (Data, Tipo, Luogo)',
            function( $post ) {
                wp_nonce_field( 'aisf_extra_meta_save', 'aisf_extra_meta_nonce' );
                $date = get_post_meta( $post->ID, '_event_date', true );
                $type = get_post_meta( $post->ID, '_event_type', true );
                $loc  = get_post_meta( $post->ID, '_event_location', true );
                ?>
                <table class="form-table">
                    <tr>
                        <th><label for="_event_date">Data Evento (Pillola arancione)</label></th>
                        <td><input type="text" id="_event_date" name="_event_date" value="<?php echo esc_attr( $date ); ?>" placeholder="es. APRILE 2026" class="regular-text" /></td>
                    </tr>
                    <tr>
                        <th><label for="_event_type">Tipo Evento (in basso a sinistra)</label></th>
                        <td><input type="text" id="_event_type" name="_event_type" value="<?php echo esc_attr( $type ); ?>" placeholder="es. CONFERENZA NAZIONALE" class="regular-text" /></td>
                    </tr>
                    <tr>
                        <th><label for="_event_location">Luogo (in basso a destra)</label></th>
                        <td><input type="text" id="_event_location" name="_event_location" value="<?php echo esc_attr( $loc ); ?>" placeholder="es. ROMA" class="regular-text" /></td>
                    </tr>
                    <tr>
                        <th><label for="_event_date_iso">Data di inizio</label></th>
                        <td>
                            <input type="date" id="_event_date_iso" name="_event_date_iso" value="<?php echo esc_attr( get_post_meta( $post->ID, '_event_date_iso', true ) ); ?>" />
                            <p class="description">Serve a mettere l'evento tra i "Prossimi" o tra i "Passati". Se la compili, la pillola arancione mostra questa data.</p>
                        </td>
                    </tr>
                    <tr>
                        <th><label for="_event_end_date">Data di fine (facoltativa)</label></th>
                        <td><input type="date" id="_event_end_date" name="_event_end_date" value="<?php echo esc_attr( get_post_meta( $post->ID, '_event_end_date', true ) ); ?>" /></td>
                    </tr>
                    <tr>
                        <th><label for="_event_registration_deadline">Scadenza iscrizioni (facoltativa)</label></th>
                        <td>
                            <input type="date" id="_event_registration_deadline" name="_event_registration_deadline" value="<?php echo esc_attr( get_post_meta( $post->ID, '_event_registration_deadline', true ) ); ?>" />
                            <p class="description">Compare nel riquadro "Informazioni" della pagina dell'evento solo se compilata.</p>
                        </td>
                    </tr>
                    <tr>
                        <th><label for="_event_registration_url">Link per iscriversi (facoltativo)</label></th>
                        <td>
                            <input type="url" id="_event_registration_url" name="_event_registration_url" value="<?php echo esc_attr( get_post_meta( $post->ID, '_event_registration_url', true ) ); ?>" class="large-text" placeholder="https://" />
                            <p class="description">Se compilato, nel riquadro compare il pulsante "Iscriviti all'evento".</p>
                        </td>
                    </tr>
                </table>
                <?php
            },
            'aisf_event',
            'normal',
            'high'
        );

        add_meta_box(
            'aisf_event_gallery_box',
            'Galleria Fotografica Evento',
            function( $post ) {
                wp_nonce_field( 'aisf_extra_meta_save', 'aisf_extra_meta_nonce' );
                $gallery_ids = get_post_meta( $post->ID, '_aisf_event_gallery_ids', true );
                ?>
                <p>Seleziona le immagini per la galleria di questo evento:</p>
                <input type="hidden" id="aisf_event_gallery_ids" name="aisf_event_gallery_ids" value="<?php echo esc_attr( $gallery_ids ); ?>" />
                <div id="aisf_gallery_preview" style="display:flex; flex-wrap:wrap; gap:10px; margin-bottom:15px;">
                    <?php
                    if ( ! empty( $gallery_ids ) ) {
                        foreach ( explode( ',', $gallery_ids ) as $id ) {
                            $img = wp_get_attachment_image_src( intval( $id ), 'thumbnail' );
                            if ( $img ) {
                                echo '<img src="' . esc_url( $img[0] ) . '" style="width:80px;height:80px;object-fit:cover;border-radius:6px;border:1px solid #ccc;" />';
                            }
                        }
                    }
                    ?>
                </div>
                <button type="button" class="button button-primary" id="aisf_manage_gallery_btn">Aggiungi / Modifica Foto Galleria</button>
                <button type="button" class="button" id="aisf_clear_gallery_btn">Svuota Galleria</button>
                <script>
                jQuery(document).ready(function($){
                    var galleryFrame;
                    $('#aisf_manage_gallery_btn').on('click', function(e){
                        e.preventDefault();
                        if (galleryFrame) { galleryFrame.open(); return; }
                        galleryFrame = wp.media({
                            title: 'Seleziona le foto della Galleria',
                            button: { text: 'Inserisci nella Galleria' },
                            library: { type: 'image' },
                            multiple: true
                        });
                        galleryFrame.on('select', function(){
                            var selection = galleryFrame.state().get('selection');
                            var ids = [];
                            var previewHtml = '';
                            selection.map(function(attachment){
                                attachment = attachment.toJSON();
                                ids.push(attachment.id);
                                var thumbUrl = (attachment.sizes && attachment.sizes.thumbnail) ? attachment.sizes.thumbnail.url : attachment.url;
                                previewHtml += '<img src="' + thumbUrl + '" style="width:80px;height:80px;object-fit:cover;border-radius:6px;border:1px solid #ccc;" />';
                            });
                            $('#aisf_event_gallery_ids').val(ids.join(','));
                            $('#aisf_gallery_preview').html(previewHtml);
                        });
                        galleryFrame.open();
                    });
                    $('#aisf_clear_gallery_btn').on('click', function(e){
                        e.preventDefault();
                        $('#aisf_event_gallery_ids').val('');
                        $('#aisf_gallery_preview').empty();
                    });
                });
                </script>
                <?php
            },
            'aisf_event',
            'normal',
            'high'
        );
    }
}, 99 );

// Salvataggio unificato di tutti i Meta Box
add_action( 'save_post', function( $post_id ) {
    if ( ! isset( $_POST['aisf_extra_meta_nonce'] ) || ! wp_verify_nonce( $_POST['aisf_extra_meta_nonce'], 'aisf_extra_meta_save' ) ) {
        return;
    }
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return;
    }
    if ( ! current_user_can( 'edit_post', $post_id ) ) {
        return;
    }

    if ( isset( $_POST['aisf_exec_role'] ) ) {
        $role = sanitize_text_field( $_POST['aisf_exec_role'] );
        update_post_meta( $post_id, '_aisf_exec_role', $role );
        update_post_meta( $post_id, 'role', $role );
    }

    if ( isset( $_POST['aisf_exec_year'] ) ) {
        $year = sanitize_text_field( wp_unslash( $_POST['aisf_exec_year'] ) );
        update_post_meta( $post_id, '_aisf_exec_year', $year );
        update_post_meta( $post_id, 'year', $year );
    }

    if ( isset( $_POST['aisf_exec_bio'] ) ) {
        $bio = sanitize_textarea_field( wp_unslash( $_POST['aisf_exec_bio'] ) );
        if ( '' === $bio ) {
            delete_post_meta( $post_id, '_aisf_exec_bio' );
        } else {
            update_post_meta( $post_id, '_aisf_exec_bio', $bio );
        }
    }

    if ( isset( $_POST['aisf_document_file_url'] ) ) {
        $url = esc_url_raw( $_POST['aisf_document_file_url'] );
        update_post_meta( $post_id, '_aisf_document_file_url', $url );
        update_post_meta( $post_id, 'file_url', $url );
        update_post_meta( $post_id, '_document_file', $url );
    }

    if ( isset( $_POST['aisf_event_gallery_ids'] ) ) {
        update_post_meta( $post_id, '_aisf_event_gallery_ids', sanitize_text_field( $_POST['aisf_event_gallery_ids'] ) );
    }

    foreach ( array( '_event_date', '_event_type', '_event_location' ) as $field ) {
        if ( isset( $_POST[ $field ] ) ) {
            update_post_meta( $post_id, $field, sanitize_text_field( $_POST[ $field ] ) );
        }
    }

    // Date vere (Y-m-d): servono a dividere eventi in programma e passati
    foreach ( array( '_event_date_iso', '_event_end_date', '_event_registration_deadline' ) as $field ) {
        if ( isset( $_POST[ $field ] ) ) {
            $value = sanitize_text_field( $_POST[ $field ] );
            if ( '' === $value ) {
                delete_post_meta( $post_id, $field );
            } elseif ( preg_match( '/^\d{4}-\d{2}-\d{2}$/', $value ) ) {
                update_post_meta( $post_id, $field, $value );
            }
        }
    }

    if ( isset( $_POST['_event_registration_url'] ) ) {
        update_post_meta( $post_id, '_event_registration_url', esc_url_raw( wp_unslash( $_POST['_event_registration_url'] ) ) );
    }

    // Se c'è la data vera ma la pillola è vuota, la compila da sola (es. "13 APR 2026")
    $iso_date = (string) get_post_meta( $post_id, '_event_date_iso', true );
    $pill     = trim( (string) get_post_meta( $post_id, '_event_date', true ) );
    $iso_ts   = preg_match( '/^\d{4}-\d{2}-\d{2}$/', $iso_date ) ? strtotime( $iso_date . ' UTC' ) : false;
    if ( false !== $iso_ts && '' === $pill ) {
        update_post_meta( $post_id, '_event_date', strtoupper( wp_date( 'j M Y', $iso_ts, new DateTimeZone( 'UTC' ) ) ) );
    }
} );

// Stampa automatica della Galleria in fondo ai singoli Eventi
add_filter( 'the_content', function( $content ) {
    if ( is_admin() || ( defined( 'REST_REQUEST' ) && REST_REQUEST ) ) {
        return $content;
    }
    if ( is_singular( 'aisf_event' ) ) {
        $gallery_ids = get_post_meta( get_the_ID(), '_aisf_event_gallery_ids', true );
        if ( ! empty( $gallery_ids ) ) {
            $ids = array_filter( array_map( 'intval', explode( ',', $gallery_ids ) ) );
            if ( ! empty( $ids ) ) {
                $html = '<div class="aisf-event-gallery-wrap"><h3>Galleria fotografica</h3><div class="aisf-event-gallery-grid">';
                foreach ( $ids as $id ) {
                    $full = wp_get_attachment_image_url( $id, 'full' );
                    $med  = wp_get_attachment_image_url( $id, 'medium_large' );
                    if ( $full ) {
                        $html .= '<a href="' . esc_url( $full ) . '" target="_blank" rel="noopener"><img src="' . esc_url( $med ? $med : $full ) . '" alt="" loading="lazy" /></a>';
                    }
                }
                $html .= '</div></div>';
                $content .= $html;
            }
        }
    }
    return $content;
} );

// Aggiunge la classe body 'aisf-is-signup' quando sei su /iscriviti
add_filter( 'body_class', function( $classes ) {
    if ( is_page( 'iscriviti' ) ) {
        $classes[] = 'aisf-is-signup';
    }
    return $classes;
} );

/* ==========================================================================
   4. STILI CSS GLOBALI (SOLO FRONT-END)
   ========================================================================== */
add_action( 'wp_head', function() {
    ?>
    <style id="aisf-custom-suite-css">
        /* 0. STICKY FOOTER (Solo sul front-end) */
        body:not(.wp-admin) .wp-site-blocks {
            min-height: 100vh !important;
            display: flex !important;
            flex-direction: column !important;
        }
        body:not(.wp-admin) .wp-site-blocks > main {
            flex: 1 0 auto !important;
            width: 100%;
        }
        body:not(.wp-admin) .wp-site-blocks > footer,
        body:not(.wp-admin) footer.wp-block-template-part {
            margin-top: auto !important;
            flex-shrink: 0 !important;
        }

        /* Sicurezza extra: se una pagina interna non inizia con l'Hero scuro (.has-ink-background-color), la stacca dalla navbar */
        body.page:not(.home):not(.wp-admin) .wp-site-blocks > main > :first-child:not(.has-ink-background-color):not(.wp-block-post-content) {
            padding-top: 140px !important;
        }
        /* Pagine il cui contenuto sta in "Contenuto" (L'Associazione, Esecutivo, Working Groups…):
           lo spazio sotto la navbar lo dà l'hero scuro dentro la pagina, non il contenitore */
        body.page:not(.home):not(.wp-admin) .wp-site-blocks > main > .wp-block-post-content {
            padding-top: 0 !important;
        }
        body.page:not(.home):not(.wp-admin) .wp-site-blocks > main > .wp-block-post-content > :first-child:not(.has-ink-background-color):not(.wp-block-cover) {
            padding-top: 140px !important;
        }

        /* 1. Card della stessa altezza SOLO nella pagina /iscriviti */
        body.aisf-is-signup .wp-block-columns {
            align-items: stretch !important;
        }
        body.aisf-is-signup .wp-block-column {
            display: flex !important;
            flex-direction: column !important;
        }
        body.aisf-is-signup .wp-block-column > .wp-block-group {
            height: 100% !important;
            display: flex !important;
            flex-direction: column !important;
            justify-content: center !important;
            align-items: stretch !important;
            text-align: left !important;
            box-sizing: border-box !important;
        }
        body.aisf-is-signup .wp-block-column > .wp-block-group > * {
            width: 100% !important;
            max-width: 100% !important;
            margin-left: 0 !important;
            margin-right: 0 !important;
        }
        body.aisf-is-signup .wp-block-column > .wp-block-group .wp-block-group.is-layout-flex {
            display: flex !important;
            flex-direction: row !important;
            justify-content: space-between !important;
            align-items: baseline !important;
        }

        /* 2. Menu a tendina (Dropdown): eredita il font e lo stile glass della navbar.
              I colori vivono in due variabili che cambiano con lo stato della navbar
              (in alto / fluttuante / sopra una sezione scura): le usano sia il pannello
              sia il triangolino, quindi restano sempre identici. */
        .aisf-nav {
            --aisf-sub-bg: rgba(255, 255, 255, 0.45);
            --aisf-sub-border: rgba(15, 23, 42, 0.08);
            --aisf-sub-shadow: 0 12px 32px rgba(15, 23, 42, 0.08);
            --aisf-sub-text: var(--wp--preset--color--text-muted, #5A6580);
            --aisf-sub-text-hover: var(--wp--preset--color--ink, #0E1830);
        }
        .aisf-nav.is-floating {
            --aisf-sub-bg: rgba(255, 255, 255, 0.72);
            --aisf-sub-border: rgba(15, 23, 42, 0.1);
            --aisf-sub-shadow: 0 16px 40px rgba(15, 23, 42, 0.12);
        }
        .aisf-nav.over-dark {
            --aisf-sub-bg: rgba(15, 23, 42, 0.65);
            --aisf-sub-border: rgba(255, 255, 255, 0.14);
            --aisf-sub-shadow: 0 16px 40px rgba(0, 0, 0, 0.4);
            --aisf-sub-text: rgba(247, 242, 236, 0.9);
            --aisf-sub-text-hover: var(--wp--preset--color--paper, #F7F2EC);
        }
        .aisf-nav .wp-block-navigation-submenu {
            position: relative;
            font-family: inherit !important;
        }
        .aisf-nav .wp-block-navigation__submenu-container {
            font-family: inherit !important;
            font-size: inherit !important;
            letter-spacing: inherit !important;
            background: var(--aisf-sub-bg) !important;
            backdrop-filter: blur(20px) saturate(160%) !important;
            -webkit-backdrop-filter: blur(20px) saturate(160%) !important;
            border: 1px solid var(--aisf-sub-border) !important;
            border-radius: 16px !important;
            padding: 8px !important;
            min-width: 220px !important;
            box-shadow: var(--aisf-sub-shadow) !important;
            color: inherit !important;
            overflow: visible !important;
            transition: background 0.25s ease, border-color 0.25s ease, color 0.25s ease, box-shadow 0.25s ease !important;
        }
        .aisf-nav.over-dark .wp-block-navigation__submenu-container {
            color: #ffffff !important;
        }
        .aisf-nav .wp-block-navigation__submenu-container .wp-block-navigation-item,
        .aisf-nav .wp-block-navigation__submenu-container .wp-block-navigation-item__content {
            font-family: inherit !important;
            font-size: inherit !important;
            font-weight: inherit !important;
            letter-spacing: inherit !important;
            line-height: inherit !important;
            padding: 10px 14px !important;
            border-radius: 10px !important;
            color: inherit !important;
            transition: background 0.15s ease, opacity 0.15s ease !important;
        }
        .aisf-nav .wp-block-navigation__submenu-container .wp-block-navigation-item__content:hover {
            background: rgba(15, 23, 42, 0.06) !important;
        }
        .aisf-nav.over-dark .wp-block-navigation__submenu-container .wp-block-navigation-item__content:hover {
            background: rgba(255, 255, 255, 0.12) !important;
        }

        /* 2b. Triangolino del sottomenù (solo menu desktop, solo primo livello).
               Stesso colore del pannello (variabile --aisf-sub-bg): cambia insieme alla navbar. */
        .aisf-nav .wp-block-navigation__responsive-container:not(.is-menu-open) .wp-block-navigation__container > .wp-block-navigation-submenu {
            /* l'area di hover arriva fino al pannello: il mouse non "cade" nel vuoto sotto il triangolino */
            padding-bottom: 14px;
            margin-bottom: -14px;
        }
        .aisf-nav .wp-block-navigation__responsive-container:not(.is-menu-open) .wp-block-navigation__container > .wp-block-navigation-submenu > .wp-block-navigation__submenu-container::before {
            content: "";
            position: absolute;
            top: -9px;
            left: 32px;
            width: 18px;
            height: 10px;
            background: var(--aisf-sub-bg);
            /* punta in alto + 1px di base che copre il bordo superiore del pannello */
            clip-path: polygon(50% 0, 100% 9px, 100% 100%, 0 100%, 0 9px);
            pointer-events: none;
            transition: background 0.25s ease;
        }

        /* 2c. Freccina accanto a "Chi siamo": segue il colore del link (prima restava scura sopra le sezioni scure) */
        .aisf-nav .wp-block-navigation__submenu-icon {
            color: var(--aisf-sub-text);
            transition: color 0.2s ease;
        }
        .aisf-nav .wp-block-navigation__submenu-icon svg {
            stroke: currentColor;
        }
        .aisf-nav .wp-block-navigation-submenu:hover > .wp-block-navigation__submenu-icon,
        .aisf-nav .wp-block-navigation-submenu:focus-within > .wp-block-navigation__submenu-icon {
            color: var(--aisf-sub-text-hover);
        }

        /* 3. Griglia Esecutivo (/esecutivo) */
        .aisf-exec-year-section { margin-bottom: 4.5rem; }
        .aisf-exec-year-heading { font-size: 1.75rem; margin-bottom: 1.5rem; padding-bottom: 0.5rem; border-bottom: 2px solid rgba(15,23,42,0.08); color: #0f172a; font-family: inherit; }
        .aisf-exec-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(240px, 1fr)); gap: 24px; align-items: stretch; }
        .aisf-exec-card { background: var(--wp--preset--color--paper, #faf8f5); border-radius: 16px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.05); border: 1px solid rgba(0,0,0,0.08); display: flex; flex-direction: column; height: 100%; transition: transform 0.2s ease; }
        .aisf-exec-card:hover { transform: translateY(-4px); }
        .aisf-exec-photo-wrap { width: 100%; aspect-ratio: 1 / 1; background: #e2e8f0; overflow: hidden; }
        .aisf-exec-photo-wrap img { width: 100%; height: 100%; object-fit: cover; display: block; }
        .aisf-exec-photo-placeholder { width: 100%; height: 100%; display: flex; align-items: center; justify-content: center; background: linear-gradient(135deg, #6ee7b7, #93c5fd); color: #0f172a; font-size: 3rem; font-weight: 700; }
        .aisf-exec-info { padding: 1.25rem; display: flex; flex-direction: column; flex-grow: 1; justify-content: center; text-align: center; }
        .aisf-exec-role-badge {
            display: inline-block;
            align-self: center;
            font-family: var(--wp--preset--font-family--mono, monospace);
            background: var(--wp--preset--color--tangerine, #f97316);
            color: var(--wp--preset--color--ink, #0f172a);
            font-size: 0.72rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.08em;
            padding: 4px 12px;
            border-radius: 999px;
            margin-bottom: 0.6rem;
        }
        .aisf-exec-name { font-size: 1.2rem; font-weight: 700; margin: 0; color: #0f172a; font-family: inherit; }

        /* 4. Griglia Working Groups e About Cards */
        .aisf-wg-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 24px; margin-bottom: 3.5rem; align-items: stretch; }
        .aisf-wg-card { background: var(--wp--preset--color--paper, #faf8f5); border-radius: 18px; padding: 2rem; border: 1px solid rgba(15,23,42,0.08); box-shadow: 0 4px 18px rgba(0,0,0,0.04); display: flex; flex-direction: column; justify-content: center; }
        .aisf-wg-tag {
            display: inline-block;
            align-self: flex-start;
            font-family: var(--wp--preset--font-family--mono, monospace);
            font-size: 0.72rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.08em;
            background: var(--wp--preset--color--tangerine, #f97316);
            color: var(--wp--preset--color--ink, #0f172a);
            padding: 4px 11px;
            border-radius: 999px;
            margin-bottom: 0.75rem;
        }
        .aisf-wg-card h3 { font-size: 1.35rem; margin: 0 0 0.75rem 0; color: #0f172a; font-family: inherit; }
        .aisf-wg-card p { font-size: 0.98rem; line-height: 1.6; color: #475569; margin: 0; font-family: inherit; }
        .aisf-wg-cta-box { background: var(--wp--preset--color--paper, #faf8f5); border-radius: 20px; padding: 2.5rem; border: 1px solid rgba(15,23,42,0.08); text-align: center; margin-bottom: 2rem; }
        .aisf-wg-cta-box h2 { margin-top: 0; color: #0f172a; font-family: inherit; }
        .aisf-wg-cta-box p { max-width: 650px; margin: 0 auto 1.5rem; color: #475569; font-family: inherit; }

        /* 5. Galleria Eventi */
        .aisf-event-gallery-wrap { margin-top: 3rem; padding-top: 2rem; border-top: 1px solid rgba(0,0,0,0.1); }
        .aisf-event-gallery-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(220px, 1fr)); gap: 16px; margin-top: 1.5rem; }
        .aisf-event-gallery-grid img { width: 100%; height: 200px; object-fit: cover; border-radius: 12px; display: block; transition: transform 0.2s ease; }
        .aisf-event-gallery-grid a:hover img { transform: scale(1.02); }
	</style>
    <?php
} );

/* ==========================================================================
   5. RENDI CLICCABILI LE CARD DEGLI EVENTI (TITOLO + INTERA CARD)
   ========================================================================== */
add_filter( 'render_block_data', function( $parsed_block ) {
    if ( isset( $parsed_block['blockName'] ) && in_array( $parsed_block['blockName'], array( 'core/post-title', 'core/post-featured-image' ), true ) ) {
        if ( ! is_singular() ) {
            $parsed_block['attrs']['isLink'] = true;
        }
    }
    return $parsed_block;
} );

add_action( 'wp_footer', function() {
    ?>
    <script id="aisf-clickable-cards-js">
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('.wp-block-post, .type-aisf_event').forEach(function(card) {
            var link = card.querySelector('a[href]');
            if (!link) return;
            card.style.cursor = 'pointer';
            card.addEventListener('click', function(e) {
                if (e.target.closest('a, button')) return;
                window.location.href = link.getAttribute('href');
            });
        });
    });
    </script>
    <?php
} );
