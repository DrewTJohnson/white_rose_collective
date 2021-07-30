<?php

namespace DaisyBootstrap\WordPress;

use WPEmerge\ServiceProviders\ServiceProviderInterface;

/**
 * Register widgets and sidebars.
 */
class ContentTypesServiceProvider implements ServiceProviderInterface
{
	/**
	 * {@inheritDoc}
	 */
	public function register( $container ) {
		// Nothing to register.
	}

	/**
	 * {@inheritDoc}
	 */
	public function bootstrap( $container ) {
		add_action( 'init', [$this, 'registerPostTypes'] );
		add_action( 'init', [$this, 'registerTaxonomies'] );
	}

	/**
	 * Register post types.
	 *
	 * @return void
	 */
	public function registerPostTypes() {
		// phpcs:disable
		/*
		register_post_type(
			'daisy_bootstrap_custom_post_type',
			array(
				'labels'              => array(
					'name'               => __( 'Custom Types', 'daisy_bootstrap' ),
					'singular_name'      => __( 'Custom Type', 'daisy_bootstrap' ),
					'add_new'            => __( 'Add New', 'daisy_bootstrap' ),
					'add_new_item'       => __( 'Add new Custom Type', 'daisy_bootstrap' ),
					'view_item'          => __( 'View Custom Type', 'daisy_bootstrap' ),
					'edit_item'          => __( 'Edit Custom Type', 'daisy_bootstrap' ),
					'new_item'           => __( 'New Custom Type', 'daisy_bootstrap' ),
					'search_items'       => __( 'Search Custom Types', 'daisy_bootstrap' ),
					'not_found'          => __( 'No custom types found', 'daisy_bootstrap' ),
					'not_found_in_trash' => __( 'No custom types found in trash', 'daisy_bootstrap' ),
				),
				'public'              => true,
				'exclude_from_search' => false,
				'show_ui'             => true,
				'capability_type'     => 'post',
				'hierarchical'        => false,
				'query_var'           => true,
				'menu_icon'           => 'dashicons-admin-post',
				'supports'            => array( 'title', 'editor', 'page-attributes' ),
				'rewrite'             => array(
					'slug'       => 'custom-post-type',
					'with_front' => false,
				),
			)
		);
		*/
		// phpcs:enable
	}

	/**
	 * Register taxonomies.
	 *
	 * @return void
	 */
	public function registerTaxonomies() {
		// phpcs:disable
		/*
		register_taxonomy(
			'daisy_bootstrap_custom_taxonomy',
			array( 'post_type' ),
			array(
				'labels'            => array(
					'name'              => __( 'Custom Taxonomies', 'daisy_bootstrap' ),
					'singular_name'     => __( 'Custom Taxonomy', 'daisy_bootstrap' ),
					'search_items'      => __( 'Search Custom Taxonomies', 'daisy_bootstrap' ),
					'all_items'         => __( 'All Custom Taxonomies', 'daisy_bootstrap' ),
					'parent_item'       => __( 'Parent Custom Taxonomy', 'daisy_bootstrap' ),
					'parent_item_colon' => __( 'Parent Custom Taxonomy:', 'daisy_bootstrap' ),
					'view_item'         => __( 'View Custom Taxonomy', 'daisy_bootstrap' ),
					'edit_item'         => __( 'Edit Custom Taxonomy', 'daisy_bootstrap' ),
					'update_item'       => __( 'Update Custom Taxonomy', 'daisy_bootstrap' ),
					'add_new_item'      => __( 'Add New Custom Taxonomy', 'daisy_bootstrap' ),
					'new_item_name'     => __( 'New Custom Taxonomy Name', 'daisy_bootstrap' ),
					'menu_name'         => __( 'Custom Taxonomies', 'daisy_bootstrap' ),
				),
				'hierarchical'      => true,
				'show_ui'           => true,
				'show_admin_column' => true,
				'query_var'         => true,
				'rewrite'           => array( 'slug' => 'custom-taxonomy' ),
			)
		);
		*/
		// phpcs:enable
	}
}
