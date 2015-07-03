<?php
/**
 * Plugin Name: Class05CPT
 */

defined ('ABSPATH') or die("Direct Access is not allowed");

if(!class_exists('Class05CPT')) {
	class Class05CPT {
		public function __construct() {
			//register_activation_hook(__FILE__, array($this, "function_name"));
			//register_deactivation_hook(__FILE__, array($this, "function_name"));

			add_action( 'init', array( $this, 'class05_register_cpt' ) );
		}

		function class05_register_cpt() {
			$args = array(
				'public'        => true,
				'label'         => 'Books',
				'supports'      => array(
					'title',
					'editor',
					'thumbnail',
					'excerpt',
					'custom-fields',
					'page-attributes'
				),
				'hierarchical'  => true,
				'menu_position' => 5,
				'rewrite'=>array(
					'slug'=>'products'
				)
			);
			register_post_type( 'book', $args );
		}
	}

	new Class05CPT();
}