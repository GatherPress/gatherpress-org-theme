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
				'events' => array(
					'name'        => __( 'Events', 'gatherpress-org-theme' ),
					'description' => __( 'Control how GatherPress event content is handled.', 'gatherpress-org-theme' ),
					'options'     => array(
						'blank_event_editor' => array(
							'labels' => array(
								'name' => __( 'Blank Event Editor', 'gatherpress-org-theme' ),
							),
							'field'  => array(
								'label'   => __( 'New events start with a blank editor instead of pre-filled GatherPress blocks.', 'gatherpress-org-theme' ),
								'type'    => 'checkbox',
								'options' => array(
									'default' => true,
								),
							),
						),
						'suppress_gatherpress_blocks' => array(
							'labels' => array(
								'name' => __( 'Suppress GatherPress Blocks', 'gatherpress-org-theme' ),
							),
							'field'  => array(
								'label'   => __( 'GatherPress blocks will not render in the event content on the front end. Use FSE templates to control the event layout instead.', 'gatherpress-org-theme' ),
								'type'    => 'checkbox',
								'options' => array(
									'default' => true,
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
