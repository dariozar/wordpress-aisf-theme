<?php
/**
 * AISF Theme — functions and setup.
 *
 * @package AISF
 */

namespace AISF;

/**
 * Theme setup.
 */
function setup() {
	add_editor_style( 'style.css' );
	remove_theme_support( 'core-block-patterns' );
}
add_action( 'after_setup_theme', __NAMESPACE__ . '\setup' );

/**
 * Enqueue styles.
 */
function enqueue_style_sheet() {
	wp_enqueue_style(
		'aisf',
		get_template_directory_uri() . '/style.css',
		array(),
		wp_get_theme()->get( 'Version' )
	);
}
add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\enqueue_style_sheet' );

/**
 * Load custom block styles only when the block is used.
 */
function enqueue_custom_block_styles() {
	$files = glob( get_template_directory() . '/assets/styles/*.css' );

	foreach ( $files as $file ) {
		$filename   = basename( $file, '.css' );
		$block_name = str_replace( 'core-', 'core/', $filename );

		wp_enqueue_block_style(
			$block_name,
			array(
				'handle' => "aisf-block-{$filename}",
				'src'    => get_theme_file_uri( "assets/styles/{$filename}.css" ),
				'path'   => get_theme_file_path( "assets/styles/{$filename}.css" ),
			)
		);
	}
}
add_action( 'init', __NAMESPACE__ . '\enqueue_custom_block_styles' );

/**
 * Register pattern categories.
 */
function pattern_categories() {
	$categories = array(
		'aisf/header'   => array( 'label' => __( 'Header', 'aisf' ) ),
		'aisf/footer'   => array( 'label' => __( 'Footer', 'aisf' ) ),
		'aisf/hero'     => array( 'label' => __( 'Hero', 'aisf' ) ),
		'aisf/sections' => array( 'label' => __( 'Sections', 'aisf' ) ),
		'aisf/pages'    => array( 'label' => __( 'Pages', 'aisf' ) ),
		'aisf/cards'    => array( 'label' => __( 'Cards', 'aisf' ) ),
		'aisf/cta'      => array( 'label' => __( 'Call to Action', 'aisf' ) ),
	);

	foreach ( $categories as $name => $properties ) {
		register_block_pattern_category( $name, $properties );
	}
}
add_action( 'init', __NAMESPACE__ . '\pattern_categories', 9 );

/**
 * Register Custom Post Types.
 */
function register_post_types() {

	// Events
	register_post_type( 'aisf_event', array(
		'labels'       => array(
			'name'          => __( 'Events', 'aisf' ),
			'singular_name' => __( 'Event', 'aisf' ),
			'add_new_item'  => __( 'Add New Event', 'aisf' ),
			'edit_item'     => __( 'Edit Event', 'aisf' ),
			'view_item'     => __( 'View Event', 'aisf' ),
		),
		'public'       => true,
		'has_archive'  => true,
		'rewrite'      => array( 'slug' => 'eventi' ),
		'show_in_rest' => true,
		'menu_icon'    => 'dashicons-calendar-alt',
		'supports'     => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
		'delete_with_user' => false,
	) );

	register_post_meta( 'aisf_event', '_event_date', array(
		'show_in_rest'  => true,
		'single'        => true,
		'type'          => 'string',
		'auth_callback' => function () { return current_user_can( 'edit_posts' ); },
	) );
	register_post_meta( 'aisf_event', '_event_location', array(
		'show_in_rest'  => true,
		'single'        => true,
		'type'          => 'string',
		'auth_callback' => function () { return current_user_can( 'edit_posts' ); },
	) );
	register_post_meta( 'aisf_event', '_event_type', array(
		'show_in_rest'  => true,
		'single'        => true,
		'type'          => 'string',
		'auth_callback' => function () { return current_user_can( 'edit_posts' ); },
	) );
	register_post_meta( 'aisf_event', '_event_status', array(
		'show_in_rest'  => true,
		'single'        => true,
		'type'          => 'string',
		'auth_callback' => function () { return current_user_can( 'edit_posts' ); },
	) );
	register_post_meta( 'aisf_event', '_registration_deadline', array(
		'show_in_rest'  => true,
		'single'        => true,
		'type'          => 'string',
		'auth_callback' => function () { return current_user_can( 'edit_posts' ); },
	) );

	// Committees
	register_post_type( 'aisf_committee', array(
		'labels'       => array(
			'name'          => __( 'Committees', 'aisf' ),
			'singular_name' => __( 'Committee', 'aisf' ),
			'add_new_item'  => __( 'Add New Committee', 'aisf' ),
			'edit_item'     => __( 'Edit Committee', 'aisf' ),
		),
		'public'       => true,
		'has_archive'  => true,
		'rewrite'      => array( 'slug' => 'comitati' ),
		'show_in_rest' => true,
		'menu_icon'    => 'dashicons-location-alt',
		'supports'     => array( 'title', 'custom-fields' ),
		'delete_with_user' => false,
	) );

	register_post_meta( 'aisf_committee', '_committee_president', array(
		'show_in_rest'  => true,
		'single'        => true,
		'type'          => 'string',
		'auth_callback' => function () { return current_user_can( 'edit_posts' ); },
	) );
	register_post_meta( 'aisf_committee', '_committee_established', array(
		'show_in_rest'  => true,
		'single'        => true,
		'type'          => 'string',
		'auth_callback' => function () { return current_user_can( 'edit_posts' ); },
	) );
	register_post_meta( 'aisf_committee', '_committee_email', array(
		'show_in_rest'  => true,
		'single'        => true,
		'type'          => 'string',
		'auth_callback' => function () { return current_user_can( 'edit_posts' ); },
	) );
	register_post_meta( 'aisf_committee', '_committee_status', array(
		'show_in_rest'  => true,
		'single'        => true,
		'type'          => 'string',
		'auth_callback' => function () { return current_user_can( 'edit_posts' ); },
	) );
	register_post_meta( 'aisf_committee', '_committee_region', array(
		'show_in_rest'  => true,
		'single'        => true,
		'type'          => 'string',
		'auth_callback' => function () { return current_user_can( 'edit_posts' ); },
	) );

	// Executive Members
	register_post_type( 'aisf_executive', array(
		'labels'       => array(
			'name'          => __( 'Executive Members', 'aisf' ),
			'singular_name' => __( 'Executive Member', 'aisf' ),
			'add_new_item'  => __( 'Add New Member', 'aisf' ),
			'edit_item'     => __( 'Edit Member', 'aisf' ),
		),
		'public'       => true,
		'has_archive'  => false,
		'show_in_rest' => true,
		'menu_icon'    => 'dashicons-groups',
		'supports'     => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
		'delete_with_user' => false,
	) );

	register_post_meta( 'aisf_executive', '_executive_role', array(
		'show_in_rest'  => true,
		'single'        => true,
		'type'          => 'string',
		'auth_callback' => function () { return current_user_can( 'edit_posts' ); },
	) );
	register_post_meta( 'aisf_executive', '_executive_mandate', array(
		'show_in_rest'  => true,
		'single'        => true,
		'type'          => 'string',
		'auth_callback' => function () { return current_user_can( 'edit_posts' ); },
	) );
	register_post_meta( 'aisf_executive', '_executive_email', array(
		'show_in_rest'  => true,
		'single'        => true,
		'type'          => 'string',
		'auth_callback' => function () { return current_user_can( 'edit_posts' ); },
	) );

	// Documents
	register_post_type( 'aisf_document', array(
		'labels'       => array(
			'name'          => __( 'Documents', 'aisf' ),
			'singular_name' => __( 'Document', 'aisf' ),
			'add_new_item'  => __( 'Add New Document', 'aisf' ),
			'edit_item'     => __( 'Edit Document', 'aisf' ),
		),
		'public'       => true,
		'has_archive'  => false,
		'show_in_rest' => true,
		'menu_icon'    => 'dashicons-media-document',
		'supports'     => array( 'title', 'custom-fields' ),
		'delete_with_user' => false,
	) );

	register_post_meta( 'aisf_document', '_document_type', array(
		'show_in_rest'  => true,
		'single'        => true,
		'type'          => 'string',
		'auth_callback' => function () { return current_user_can( 'edit_posts' ); },
	) );
	register_post_meta( 'aisf_document', '_document_url', array(
		'show_in_rest'  => true,
		'single'        => true,
		'type'          => 'string',
		'auth_callback' => function () { return current_user_can( 'edit_posts' ); },
	) );
	register_post_meta( 'aisf_document', '_document_date', array(
		'show_in_rest'  => true,
		'single'        => true,
		'type'          => 'string',
		'auth_callback' => function () { return current_user_can( 'edit_posts' ); },
	) );
	register_post_meta( 'aisf_document', '_document_year', array(
		'show_in_rest'  => true,
		'single'        => true,
		'type'          => 'string',
		'auth_callback' => function () { return current_user_can( 'edit_posts' ); },
	) );
}
add_action( 'init', __NAMESPACE__ . '\register_post_types' );

/**
 * Register block style variations.
 */
function register_block_styles() {
	$block_styles = array(
		'core/button'      => array(
			'secondary' => __( 'Secondary', 'aisf' ),
			'warm'      => __( 'Warm', 'aisf' ),
			'ghost'     => __( 'Ghost', 'aisf' ),
			'outline'   => __( 'Outline', 'aisf' ),
		),
		'core/group'       => array(
			'card-tangerine' => __( 'Tangerine Card', 'aisf' ),
			'card-mint'      => __( 'Mint Card', 'aisf' ),
			'card-blush'     => __( 'Blush Card', 'aisf' ),
			'card-sky'       => __( 'Sky Card', 'aisf' ),
			'paper'          => __( 'Paper Card', 'aisf' ),
			'dark'           => __( 'Dark Card', 'aisf' ),
		),
		'core/cover'       => array(
			'rounded-hero' => __( 'Rounded Bottom', 'aisf' ),
		),
		'core/separator'   => array(
			'dark' => __( 'Dark', 'aisf' ),
		),
		'core/image'       => array(
			'rounded' => __( 'Rounded', 'aisf' ),
		),
	);

	foreach ( $block_styles as $block => $styles ) {
		foreach ( $styles as $style_name => $style_label ) {
			register_block_style( $block, array(
				'name'  => $style_name,
				'label' => $style_label,
			) );
		}
	}
}
add_action( 'init', __NAMESPACE__ . '\register_block_styles' );
