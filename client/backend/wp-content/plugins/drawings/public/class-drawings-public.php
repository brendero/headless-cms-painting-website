<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       brendero.github.io
 * @since      1.0.0
 *
 * @package    Drawings
 * @subpackage Drawings/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Drawings
 * @subpackage Drawings/public
 * @author     Brent De Roeck <brendero@student.arteveldehs.be>
 */
class Drawings_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Drawings_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Drawings_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/drawings-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Drawings_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Drawings_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/drawings-public.js', array( 'jquery' ), $this->version, false );

	}
	
	function backend_register_drawings() {
		$labels = array(
			'name' => __('Drawings', 'backend'),
			'singular_name' => __('Drawing', 'backend'),
			'add_new' => __('Add New Drawing', 'backend'),
			'all_items' => __('All Drawings', 'backend'),
			'add_new_items' => __('Add New Drawing', 'backend'),
			'edit_item' => __('Edit Drawing', 'backend'),
			'new_item' => __('New Drawing', 'backend'),
			'view_item' => __('View Drawing', 'backend'),
			'search_item' => __('Search Drawing', 'backend'),
			'not_found' => __('Drawing not found', 'backend'),
			'not_found_in_trash' => __('Drawing not found in the trash', 'backend'),
			'parent_item_colon' => __('Parent Drawing', 'backend'),

		);
		$args = array(
			'labels' => $labels,
			'public' => true,
			'has_archive' => true,
			'publicly_queryable' => true,
			'query_var' => true,
			'capability_type' => 'post',
			'hierarchical' => false,
			'supports' => array(
				'title',
				'editor',
				'thumbnail'
			),
			'menu_position' => 7,
			'exclude_from_search' => false,
			'menu_icon' => 'dashicons-edit',
			'show_in_rest' => true,
			'rest_base' => 'rest_drawings'
		);
    register_post_type('drawings', $args);
	}


}
