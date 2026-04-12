<?php
/**
 * Manages settings for GatherPress Org Theme.
 *
 * @package GatherPress_Org_Theme
 */

namespace GatherPress_Org_Theme;

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit; // @codeCoverageIgnore

use GatherPress\Core\Traits\Singleton;

/**
 * Class Settings.
 *
 * Registers a settings sub-page in the GatherPress admin.
 */
class Settings {
	/**
	 * Enforces a single instance of this class.
	 */
	use Singleton;

	/**
	 * Constructor for the Settings class.
	 */
	protected function __construct() {
		$this->setup_hooks();
	}

	/**
	 * Set up hooks for settings registration.
	 *
	 * @return void
	 */
	protected function setup_hooks(): void {
		add_filter( 'gatherpress_sub_pages', array( $this, 'setup_sub_page' ) );
	}

	/**
	 * Adds a Theme sub-page to the GatherPress settings.
	 *
	 * @param array $sub_pages An associative array of existing sub-pages.
	 * @return array Modified array of sub-pages.
	 */
	public function setup_sub_page( array $sub_pages ): array {
		$sub_pages['theme'] = array(
			'name'     => __( 'Theme', 'gatherpress-org-theme' ),
			'priority' => 9,
			'sections' => array(
				'general'  => array(
					'name'        => __( 'General', 'gatherpress-org-theme' ),
					'description' => __( 'General theme settings for the GatherPress Org Theme.', 'gatherpress-org-theme' ),
					'options'     => array(
						'svg_upload'    => array(
							'labels' => array(
								'name' => __( 'SVG Upload Support', 'gatherpress-org-theme' ),
							),
							'field'  => array(
								'label'   => __( 'Allow SVG file uploads in the media library.', 'gatherpress-org-theme' ),
								'type'    => 'checkbox',
								'options' => array(
									'default' => true,
								),
							),
						),
						'enable_swiper' => array(
							'labels' => array(
								'name' => __( 'Swiper Library', 'gatherpress-org-theme' ),
							),
							'field'  => array(
								'label'   => __( 'Enqueue the Swiper.js carousel library on the frontend.', 'gatherpress-org-theme' ),
								'type'    => 'checkbox',
								'options' => array(
									'default' => false,
								),
							),
						),
					),
				),
				'login'    => array(
					'name'        => __( 'Login & Redirect', 'gatherpress-org-theme' ),
					'description' => __( 'Configure where users are redirected after login and logout.', 'gatherpress-org-theme' ),
					'options'     => array(
						'login_redirect'  => array(
							'labels' => array(
								'name' => __( 'Login Redirect', 'gatherpress-org-theme' ),
							),
							'field'  => array(
								'label'   => __( 'URL path to redirect users after login.', 'gatherpress-org-theme' ),
								'type'    => 'text',
								'options' => array(
									'default' => '/',
								),
							),
						),
						'logout_redirect' => array(
							'labels' => array(
								'name' => __( 'Logout Redirect', 'gatherpress-org-theme' ),
							),
							'field'  => array(
								'label'   => __( 'URL path to redirect users after logout.', 'gatherpress-org-theme' ),
								'type'    => 'text',
								'options' => array(
									'default' => '/',
								),
							),
						),
					),
				),
				'events'   => array(
					'name'        => __( 'Events', 'gatherpress-org-theme' ),
					'description' => __( 'Control how GatherPress event content is handled.', 'gatherpress-org-theme' ),
					'options'     => array(
						'use_fse_event_template' => array(
							'labels'      => array(
								'name' => __( 'Use FSE Templates for Events', 'gatherpress-org-theme' ),
							),
							'description' => __( 'When enabled, new events start with a blank editor and GatherPress blocks are not rendered in the event content. Use Full Site Editing templates to control the event layout instead.', 'gatherpress-org-theme' ),
							'field'       => array(
								'label'   => __( 'Remove default GatherPress blocks from new events and use FSE templates for event layout.', 'gatherpress-org-theme' ),
								'type'    => 'checkbox',
								'options' => array(
									'default' => false,
								),
							),
						),
					),
				),
				'comments' => array(
					'name'        => __( 'Comments', 'gatherpress-org-theme' ),
					'description' => __( 'Customize the comment form behavior.', 'gatherpress-org-theme' ),
					'options'     => array(
						'custom_comment_form' => array(
							'labels' => array(
								'name' => __( 'Custom Comment Form', 'gatherpress-org-theme' ),
							),
							'field'  => array(
								'label'   => __( 'Use the theme\'s custom comment form textarea.', 'gatherpress-org-theme' ),
								'type'    => 'checkbox',
								'options' => array(
									'default' => true,
								),
							),
						),
						'submit_button_text'  => array(
							'labels' => array(
								'name' => __( 'Submit Button Text', 'gatherpress-org-theme' ),
							),
							'field'  => array(
								'label'   => __( 'Text for the comment form submit button.', 'gatherpress-org-theme' ),
								'type'    => 'text',
								'options' => array(
									'default' => __( 'Post Comments', 'gatherpress-org-theme' ),
								),
							),
						),
					),
				),
			),
		);

		return $sub_pages;
	}
}
