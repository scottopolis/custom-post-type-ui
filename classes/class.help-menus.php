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
			'id'      => 'post_types_starter_notes',
			'title'   => __( 'Post Type Starter Notes', 'cpt-plugin' ),
			'content' => '<p></p>',
		) );

		$screen->add_help_tab( array(
			'id'      => 'post_types_labels',
			'title'   => __( 'Post Type Labels', 'cpt-plugin' ),
			'content' => '<p></p>',
		) );

		$screen->add_help_tab( array(
			'id'      => 'post_types_settings',
			'title'   => __( 'Post Type Settings', 'cpt-plugin' ),
			'content' => '<p></p>',
		) );
	}

	public function taxonomies_help() {
		$screen = get_current_screen();

		$screen->add_help_tab( array(
			'id'      => 'taxonomies_starter_notes',
			'title'   => __( 'Taxonomy Starter Notes', 'cpt-plugin' ),
			'content' => '<p></p>',
		) );

		$screen->add_help_tab( array(
			'id'      => 'taxonomies_labels',
			'title'   => __( 'Taxonomy Labels', 'cpt-plugin' ),
			'content' => '<p></p>',
		) );

		$screen->add_help_tab( array(
			'id'      => 'taxonomies_settings',
			'title'   => __( 'Taxonomy Settings', 'cpt-plugin' ),
			'content' => '<p></p>',
		) );
	}

	public function import_export_help() {
		$screen = get_current_screen();

		$screen->add_help_tab( array(
			'id'      => 'import_export',
			'title'   => __( 'Importing/Exporting', 'cpt-plugin' ),
			'content' => '<p></p>',
		) );

		$screen->add_help_tab( array(
			'id'      => 'get_code',
			'title'   => __( 'Get Code Tab', 'cpt-plugin' ),
			'content' => '<p></p>',
		) );
	}
}
