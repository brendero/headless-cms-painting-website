<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       brendero.github.io
 * @since      1.0.0
 *
 * @package    Paintings
 * @subpackage Paintings/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Paintings
 * @subpackage Paintings/public
 * @author     Brent De Roeck <brendero@student.arteveldehs.be>
 */
class Paintings_Public {

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
		 * defined in Paintings_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Paintings_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/Paintings-public.css', array(), $this->version, 'all' );

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
		 * defined in Paintings_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Paintings_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/Paintings-public.js', array( 'jquery' ), $this->version, false );

	}
	
	function backend_register_Paintings() {
		$labels = array(
			'name' => __('Paintings', 'backend'),
			'singular_name' => __('Painting', 'backend'),
			'add_new' => __('Add New Painting', 'backend'),
			'all_items' => __('All Paintings', 'backend'),
			'add_new_items' => __('Add New Painting', 'backend'),
			'edit_item' => __('Edit Painting', 'backend'),
			'new_item' => __('New Painting', 'backend'),
			'view_item' => __('View Painting', 'backend'),
			'search_item' => __('Search Painting', 'backend'),
			'not_found' => __('Painting not found', 'backend'),
			'not_found_in_trash' => __('Painting not found in the trash', 'backend'),
			'parent_item_colon' => __('Parent Tool', 'backend'),

		);
		$args = array(
			'labels' => $labels,
			'description' => "This is a plugin to activate the custom post type for the paintings",
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
			'menu_position' => 6,
			'exclude_from_search' => false,
			'menu_icon' => 'dashicons-admin-appearance',
			'show_in_rest' => true,
			'rest_base' => 'rest_paintings'
		);
    register_post_type('Paintings', $args);
	}

	/**
	 * Disables standard posts
	 *
	 */

	function post_remove() {
		remove_menu_page('edit.php');
	}

}
