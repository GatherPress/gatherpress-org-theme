<?php
/**
 * Manages theme setup for GatherPress Org Theme.
 *
 * @package GatherPress_Org_Theme
 */

namespace GatherPress_Org_Theme;

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit; // @codeCoverageIgnore

use GatherPress\Core\Traits\Singleton;

/**
 * Class Setup.
 *
 * Orchestrates theme initialization and hooks.
 */
class Setup {
	/**
	 * Enforces a single instance of this class.
	 */
	use Singleton;

	/**
	 * Constructor for the Setup class.
	 *
	 * Initializes and sets up various components of the theme.
	 */
	protected function __construct() {
		$this->setup_hooks();
		$this->instantiate_classes();
	}

	/**
	 * Instantiate theme classes.
	 *
	 * @return void
	 */
	protected function instantiate_classes(): void {
		Settings::get_instance();
		Enqueue::get_instance();
	}

	/**
	 * Set up hooks for various purposes.
	 *
	 * @return void
	 */
	protected function setup_hooks(): void {
		add_filter( 'upload_mimes', array( $this, 'add_svg_mime_type' ) );
		add_filter( 'comment_form_defaults', array( $this, 'custom_comment_textarea' ) );
		add_filter( 'logout_redirect', array( $this, 'redirect_after_logout' ), 10, 3 );
		add_filter( 'login_redirect', array( $this, 'redirect_after_login' ), 10, 3 );
		add_filter( 'register_post_type_args', array( $this, 'maybe_clear_event_template' ), 20, 2 );
		add_filter( 'the_content', array( $this, 'maybe_remove_gatherpress_blocks_from_content' ), 8 );
	}

	/**
	 * Check if the blank event editor setting is enabled.
	 *
	 * @return bool
	 */
	protected function is_blank_event_editor(): bool {
		if ( ! class_exists( '\GatherPress\Core\Settings' ) ) {
			return false;
		}

		return (bool) \GatherPress\Core\Settings::get_instance()->get( 'blank_event_editor' );
	}

	/**
	 * Check if GatherPress block suppression is enabled for events.
	 *
	 * @return bool
	 */
	protected function is_suppress_gatherpress_blocks(): bool {
		if ( ! class_exists( '\GatherPress\Core\Settings' ) ) {
			return false;
		}

		return (bool) \GatherPress\Core\Settings::get_instance()->get( 'suppress_gatherpress_blocks' );
	}

	/**
	 * Check if the blank venue editor setting is enabled.
	 *
	 * @return bool
	 */
	protected function is_blank_venue_editor(): bool {
		if ( ! class_exists( '\GatherPress\Core\Settings' ) ) {
			return false;
		}

		return (bool) \GatherPress\Core\Settings::get_instance()->get( 'blank_venue_editor' );
	}

	/**
	 * Check if GatherPress block suppression is enabled for venues.
	 *
	 * @return bool
	 */
	protected function is_suppress_gatherpress_venue_blocks(): bool {
		if ( ! class_exists( '\GatherPress\Core\Settings' ) ) {
			return false;
		}

		return (bool) \GatherPress\Core\Settings::get_instance()->get( 'suppress_gatherpress_venue_blocks' );
	}

	/**
	 * Remove default GatherPress blocks from event or venue post type templates.
	 *
	 * When enabled, new events/venues start with a blank editor instead of
	 * the default GatherPress block template.
	 *
	 * @param array  $args      Post type registration arguments.
	 * @param string $post_type Post type slug.
	 * @return array Modified arguments.
	 */
	public function maybe_clear_event_template( array $args, string $post_type ): array {
		if ( 'gatherpress_event' === $post_type && $this->is_blank_event_editor() ) {
			$args['template'] = array();
		}

		if ( 'gatherpress_venue' === $post_type && $this->is_blank_venue_editor() ) {
			$args['template'] = array();
		}

		return $args;
	}

	/**
	 * Remove GatherPress blocks from event or venue post content.
	 *
	 * When enabled, strips any block with a 'gatherpress/' namespace from
	 * the post content so that FSE templates control the layout.
	 * Only affects the post content — blocks placed in FSE templates
	 * are not touched.
	 *
	 * @param string $content The post content.
	 * @return string Modified content with GatherPress blocks removed.
	 */
	public function maybe_remove_gatherpress_blocks_from_content( string $content ): string {
		$should_suppress = false;

		if ( is_singular( 'gatherpress_event' ) && $this->is_suppress_gatherpress_blocks() ) {
			$should_suppress = true;
		}

		if ( is_singular( 'gatherpress_venue' ) && $this->is_suppress_gatherpress_venue_blocks() ) {
			$should_suppress = true;
		}

		if ( ! $should_suppress ) {
			return $content;
		}

		$blocks  = parse_blocks( $content );
		$cleaned = array();

		foreach ( $blocks as $block ) {
			if ( ! empty( $block['blockName'] ) && 0 === strpos( $block['blockName'], 'gatherpress/' ) ) {
				continue;
			}

			$cleaned[] = $block;
		}

		return serialize_blocks( $cleaned );
	}

	/**
	 * Add SVG mime type support.
	 *
	 * @param array $mimes Allowed mime types.
	 * @return array Modified mime types.
	 */
	public function add_svg_mime_type( array $mimes ): array {
		$mimes['svg'] = 'image/svg+xml';

		return $mimes;
	}

	/**
	 * Customize the comment form textarea and submit button.
	 *
	 * @param array $defaults Default comment form settings.
	 * @return array Modified comment form settings.
	 */
	public function custom_comment_textarea( array $defaults ): array {
		$defaults['comment_field'] = '<p class="comment-form-comment">
			<label for="comment">' . esc_html__( 'Comments', 'gatherpress-org-theme' ) . ' <span class="required">*</span></label>
			<textarea id="comment" name="comment" rows="4" placeholder="' . esc_attr__( 'Enter Your Comment..', 'gatherpress-org-theme' ) . '" required></textarea>
		</p>';

		$defaults['label_submit'] = __( 'Post Comments', 'gatherpress-org-theme' );

		return $defaults;
	}

	/**
	 * Redirect users to home page after logout.
	 *
	 * @param string   $redirect_to           Default redirect URL.
	 * @param string   $requested_redirect_to Requested redirect URL.
	 * @param \WP_User $user                  The user object.
	 * @return string Redirect URL.
	 */
	public function redirect_after_logout( string $redirect_to, string $requested_redirect_to, $user ): string {
		return home_url( '/' );
	}

	/**
	 * Redirect users to home page after login.
	 *
	 * @param string   $redirect_to           Default redirect URL.
	 * @param string   $requested_redirect_to Requested redirect URL.
	 * @param \WP_User $user                  The user object.
	 * @return string Redirect URL.
	 */
	public function redirect_after_login( string $redirect_to, string $requested_redirect_to, $user ): string {
		if ( ! is_a( $user, 'WP_User' ) ) {
			return $redirect_to;
		}

		return home_url( '/' );
	}
}
