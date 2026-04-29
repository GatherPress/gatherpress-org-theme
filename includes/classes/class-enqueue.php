<?php
/**
 * Manages asset enqueueing for GatherPress Org Theme.
 *
 * @package GatherPress_Org_Theme
 */

namespace GatherPress_Org_Theme;

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit; // @codeCoverageIgnore

use GatherPress\Core\Traits\Singleton;

/**
 * Class Enqueue.
 *
 * Handles enqueueing of theme stylesheets and scripts.
 */
class Enqueue {
	/**
	 * Enforces a single instance of this class.
	 */
	use Singleton;

	/**
	 * Constructor for the Enqueue class.
	 */
	protected function __construct() {
		$this->setup_hooks();
	}

	/**
	 * Set up hooks for asset enqueueing.
	 *
	 * @return void
	 */
	protected function setup_hooks(): void {
		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_build_assets' ) );
	}

	/**
	 * Enqueue built assets from the build directory.
	 *
	 * @return void
	 */
	public function enqueue_build_assets(): void {
		$build_dir = GATHERPRESS_ORG_THEME_PATH . '/build';
		$build_uri = get_template_directory_uri() . '/build';

		// Theme stylesheet (compiled from src/scss/).
		$style_file = $build_dir . '/style-style.css';

		if ( file_exists( $style_file ) ) {
			wp_enqueue_style(
				'gatherpress-theme-style',
				$build_uri . '/style-style.css',
				array(),
				filemtime( $style_file )
			);
		}

		// Custom comment form JS.
		$this->enqueue_script(
			'gatherpress-custom-comment-form',
			$build_dir,
			$build_uri,
			'/js/custom-comment-form'
		);

		// Event search JS.
		$this->enqueue_script(
			'gatherpress-event-search',
			$build_dir,
			$build_uri,
			'/js/event-search'
		);

		// Smart sticky header JS.
		$this->enqueue_script(
			'gatherpress-sticky-header',
			$build_dir,
			$build_uri,
			'/js/sticky-header'
		);

		// Conditionally enqueue Swiper library.
		$this->maybe_enqueue_swiper();
	}

	/**
	 * Enqueue a script from the build directory using its asset file.
	 *
	 * @param string $handle    Script handle.
	 * @param string $build_dir Absolute path to build directory.
	 * @param string $build_uri URI to build directory.
	 * @param string $path      Relative path to the script (without .js extension).
	 * @return void
	 */
	protected function enqueue_script( string $handle, string $build_dir, string $build_uri, string $path ): void {
		$asset_file = $build_dir . $path . '.asset.php';
		$asset      = file_exists( $asset_file )
			? require $asset_file
			: array(
				'dependencies' => array(),
				'version'      => false,
			);

		$script_file = $build_dir . $path . '.js';

		if ( file_exists( $script_file ) ) {
			wp_enqueue_script(
				$handle,
				$build_uri . $path . '.js',
				$asset['dependencies'],
				$asset['version'],
				true
			);
		}
	}

	/**
	 * Conditionally enqueue Swiper library based on settings.
	 *
	 * @return void
	 */
	protected function maybe_enqueue_swiper(): void {
		if ( ! class_exists( '\GatherPress\Core\Settings' ) ) {
			return;
		}

		$settings      = \GatherPress\Core\Settings::get_instance();
		$enable_swiper = $settings->get( 'enable_swiper' );

		if ( ! $enable_swiper ) {
			return;
		}

		wp_enqueue_style(
			'swiper-css',
			'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css',
			array(),
			null
		);

		wp_enqueue_script(
			'swiper-js',
			'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js',
			array(),
			null,
			true
		);
	}
}
