<?php
/**
 * GatherPress Org Theme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package GatherPress_Org_Theme
 * @since 1.0
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit; // @codeCoverageIgnore

// Constants.
define( 'GATHERPRESS_ORG_THEME_VERSION', wp_get_theme()->get( 'Version' ) );
define( 'GATHERPRESS_ORG_THEME_PATH', __DIR__ );

/**
 * Adds the GatherPress_Org_Theme namespace to the GatherPress autoloader.
 *
 * @param array $namespace An associative array of namespaces and their paths.
 * @return array Modified array of namespaces and their paths.
 */
function gatherpress_org_theme_autoloader( array $namespace ): array {
	$namespace['GatherPress_Org_Theme'] = GATHERPRESS_ORG_THEME_PATH;

	return $namespace;
}
add_filter( 'gatherpress_autoloader', 'gatherpress_org_theme_autoloader' );

/**
 * Initializes the GatherPress Org Theme setup.
 *
 * Only runs if the GatherPress plugin is active.
 *
 * @return void
 */
function gatherpress_org_theme_setup(): void {
	if ( defined( 'GATHERPRESS_VERSION' ) ) {
		GatherPress_Org_Theme\Setup::get_instance();
	}
}
add_action( 'after_setup_theme', 'gatherpress_org_theme_setup' );

// -------------------------------------------------------------------------
// Standard WordPress theme features (work without GatherPress).
// -------------------------------------------------------------------------

// Adds theme support for post formats.
if ( ! function_exists( 'gatherpress_org_theme_post_format_setup' ) ) :
	/**
	 * Adds theme support for post formats.
	 *
	 * @return void
	 */
	function gatherpress_org_theme_post_format_setup(): void {
		add_theme_support( 'post-formats', array( 'aside', 'audio', 'chat', 'gallery', 'image', 'link', 'quote', 'status', 'video' ) );
	}
endif;
add_action( 'after_setup_theme', 'gatherpress_org_theme_post_format_setup' );

// Enqueues editor-style.css in the editors.
if ( ! function_exists( 'gatherpress_org_theme_editor_style' ) ) :
	/**
	 * Enqueues editor-style.css in the editors.
	 *
	 * @return void
	 */
	function gatherpress_org_theme_editor_style(): void {
		add_editor_style( 'assets/css/editor-style.css' );
	}
endif;
add_action( 'after_setup_theme', 'gatherpress_org_theme_editor_style' );

// Registers custom block styles.
if ( ! function_exists( 'gatherpress_org_theme_block_styles' ) ) :
	/**
	 * Registers custom block styles.
	 *
	 * @return void
	 */
	function gatherpress_org_theme_block_styles(): void {
		register_block_style(
			'core/list',
			array(
				'name'         => 'checkmark-list',
				'label'        => __( 'Checkmark', 'gatherpress-org-theme' ),
				'inline_style' => '
				ul.is-style-checkmark-list {
					list-style-type: "\2713";
				}

				ul.is-style-checkmark-list li {
					padding-inline-start: 1ch;
				}',
			)
		);
	}
endif;
add_action( 'init', 'gatherpress_org_theme_block_styles' );

// Registers pattern categories.
if ( ! function_exists( 'gatherpress_org_theme_pattern_categories' ) ) :
	/**
	 * Registers pattern categories.
	 *
	 * @return void
	 */
	function gatherpress_org_theme_pattern_categories(): void {
		register_block_pattern_category(
			'gatherpress_page',
			array(
				'label'       => __( 'Pages', 'gatherpress-org-theme' ),
				'description' => __( 'A collection of full page layouts.', 'gatherpress-org-theme' ),
			)
		);

		register_block_pattern_category(
			'gatherpress_event',
			array(
				'label'       => __( 'Events', 'gatherpress-org-theme' ),
				'description' => __( 'Event-focused patterns for GatherPress.', 'gatherpress-org-theme' ),
			)
		);
	}
endif;
add_action( 'init', 'gatherpress_org_theme_pattern_categories' );

// Registers block binding sources.
if ( ! function_exists( 'gatherpress_org_theme_register_block_bindings' ) ) :
	/**
	 * Registers the post format block binding source.
	 *
	 * @return void
	 */
	function gatherpress_org_theme_register_block_bindings(): void {
		register_block_bindings_source(
			'gatherpress/format',
			array(
				'label'              => _x( 'Post format name', 'Label for the block binding placeholder in the editor', 'gatherpress-org-theme' ),
				'get_value_callback' => 'gatherpress_org_theme_format_binding',
			)
		);
	}
endif;
add_action( 'init', 'gatherpress_org_theme_register_block_bindings' );

// Block binding callback for the post format name.
if ( ! function_exists( 'gatherpress_org_theme_format_binding' ) ) :
	/**
	 * Callback function for the post format name block binding source.
	 *
	 * @return string|void Post format name, or nothing if the format is 'standard'.
	 */
	function gatherpress_org_theme_format_binding() {
		$post_format_slug = get_post_format();

		if ( $post_format_slug && 'standard' !== $post_format_slug ) {
			return get_post_format_string( $post_format_slug );
		}
	}
endif;
