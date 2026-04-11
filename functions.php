<?php
/**
 * Gather-Press functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Gather_Press
 * @since Gather-Press 1.0
 */


require_once get_template_directory() . '/inc/custom-post-type.php';

// Enqueue built assets from src/ via @wordpress/scripts.
function gatherpress_enqueue_build_assets() {
    $build_dir = get_template_directory() . '/build';
    $build_uri = get_template_directory_uri() . '/build';

    // Theme stylesheet (compiled from src/scss/).
    wp_enqueue_style(
        'gatherpress-theme-style',
        $build_uri . '/style-style.css',
        array(),
        filemtime( $build_dir . '/style-style.css' )
    );

    // Custom comment form JS.
    $comment_asset_file = $build_dir . '/js/custom-comment-form.asset.php';
    $comment_asset       = file_exists( $comment_asset_file ) ? require $comment_asset_file : array( 'dependencies' => array(), 'version' => false );

    wp_enqueue_script(
        'gatherpress-custom-comment-form',
        $build_uri . '/js/custom-comment-form.js',
        $comment_asset['dependencies'],
        $comment_asset['version'],
        true
    );

    // Event search JS.
    $search_asset_file = $build_dir . '/js/event-search.asset.php';
    $search_asset       = file_exists( $search_asset_file ) ? require $search_asset_file : array( 'dependencies' => array(), 'version' => false );

    wp_enqueue_script(
        'gatherpress-event-search',
        $build_uri . '/js/event-search.js',
        $search_asset['dependencies'],
        $search_asset['version'],
        true
    );
}
add_action( 'wp_enqueue_scripts', 'gatherpress_enqueue_build_assets' );


// Adds theme support for post formats.
if ( ! function_exists( 'gatherpress_post_format_setup' ) ) :
	/**
	 * Adds theme support for post formats.
	 *
	 * @since Gather-Press 1.0
	 *
	 * @return void
	 */
	function gatherpress_post_format_setup() {
		add_theme_support( 'post-formats', array( 'aside', 'audio', 'chat', 'gallery', 'image', 'link', 'quote', 'status', 'video' ) );
	}
endif;
add_action( 'after_setup_theme', 'gatherpress_post_format_setup' );

// Enqueues editor-style.css in the editors.
if ( ! function_exists( 'gatherpress_editor_style' ) ) :
	/**
	 * Enqueues editor-style.css in the editors.
	 *
	 * @since Gather-Press 1.0
	 *
	 * @return void
	 */
	function gatherpress_editor_style() {
		add_editor_style( 'assets/css/editor-style.css' );
	}
endif;
add_action( 'after_setup_theme', 'gatherpress_editor_style' );


// Registers custom block styles.
if ( ! function_exists( 'gatherpress_block_styles' ) ) :
	/**
	 * Registers custom block styles.
	 *
	 * @since Gather-Press 1.0
	 *
	 * @return void
	 */
	function gatherpress_block_styles() {
		register_block_style(
			'core/list',
			array(
				'name'         => 'checkmark-list',
				'label'        => __( 'Checkmark', 'gatherpress' ),
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
add_action( 'init', 'gatherpress_block_styles' );

// Registers pattern categories.
if ( ! function_exists( 'gatherpress_pattern_categories' ) ) :
	/**
	 * Registers pattern categories.
	 *
	 * @since Gather-Press 1.0
	 *
	 * @return void
	 */
	function gatherpress_pattern_categories() {

		register_block_pattern_category(
			'gatherpress_page',
			array(
				'label'       => __( 'Pages', 'gatherpress' ),
				'description' => __( 'A collection of full page layouts.', 'gatherpress' ),
			)
		);

		register_block_pattern_category(
			'gatherpress_post-format',
			array(
				'label'       => __( 'Post formats', 'gatherpress' ),
				'description' => __( 'A collection of post format patterns.', 'gatherpress' ),
			)
		);
	}
endif;
add_action( 'init', 'gatherpress_pattern_categories' );

// Registers block binding sources.
if ( ! function_exists( 'gatherpress_register_block_bindings' ) ) :
	/**
	 * Registers the post format block binding source.
	 *
	 * @since Gather-Press 1.0
	 *
	 * @return void
	 */
	function gatherpress_register_block_bindings() {
		register_block_bindings_source(
			'gatherpress/format',
			array(
				'label'              => _x( 'Post format name', 'Label for the block binding placeholder in the editor', 'gatherpress' ),
				'get_value_callback' => 'gatherpress_format_binding',
			)
		);
	}
endif;
add_action( 'init', 'gatherpress_register_block_bindings' );

// Registers block binding callback function for the post format name.
if ( ! function_exists( 'gatherpress_format_binding' ) ) :
	/**
	 * Callback function for the post format name block binding source.
	 *
	 * @since Gather-Press 1.0
	 *
	 * @return string|void Post format name, or nothing if the format is 'standard'.
	 */
	function gatherpress_format_binding() {
		$post_format_slug = get_post_format();

		if ( $post_format_slug && 'standard' !== $post_format_slug ) {
			return get_post_format_string( $post_format_slug );
		}
	}
endif;



function my_own_mime_types( $mimes ) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter( 'upload_mimes', 'my_own_mime_types' );

function my_custom_comment_textarea( $defaults ) {
    $defaults['comment_field'] = '<p class="comment-form-comment">
        <label for="comment">Comments <span class="required">*</span></label>
        <textarea id="comment" name="comment" rows="4" placeholder="Enter Your Comment.." required></textarea>
    </p>';

    // Change button text
    $defaults['label_submit'] = 'Post Comments';

    return $defaults;
}
add_filter( 'comment_form_defaults', 'my_custom_comment_textarea' );


// Enqueue Swiper library
function enqueue_swiper_assets() {
    // Swiper CSS
    wp_enqueue_style(
        'swiper-css',
        'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css',
        array(),
        null
    );

    // Swiper JS
    wp_enqueue_script(
        'swiper-js',
        'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js',
        array(),
        null,
        true
    );
}

add_filter( 'logout_redirect', function ( $redirect_to, $requested_redirect_to, $user ) {
    return home_url( '/' );
}, 10, 3 );

add_filter( 'login_redirect', function ( $redirect_to, $requested_redirect_to, $user ) {

    // If login failed or user object not available, do nothing
    if ( ! is_a( $user, 'WP_User' ) ) {
        return $redirect_to;
    }

    // Always send user to home page after login
    return home_url( '/' );

}, 10, 3 );
