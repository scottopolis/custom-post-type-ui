<?php
/**
 * This file controls all of the content for the help tabs.
 */

# Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class CPTUI_Help_Menu {
	public function post_types_help() {
		$screen = get_current_screen();

		$screen->add_help_tab( array(
			'id'      => 'my_help_tab',
			'title'   => __( 'My Help Tab' ),
			'content' => '<p>' . __( 'EET WORKS!' ) . '</p>',
		) );
	}

	public function taxonomies_help() {
		$screen = get_current_screen();

		$screen->add_help_tab( array(
			'id'      => 'my_help_tab',
			'title'   => __( 'My Help Tab' ),
			'content' => '<p>' . __( 'EET WORKS STILL!' ) . '</p>',
		) );
	}

	public function import_export_help() {

	}
}
