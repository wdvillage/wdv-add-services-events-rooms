<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://wdvillage.com
 * @since      1.0.0
 *
 * @package    Wdv_Add_Services_Events_Rooms
 * @subpackage Wdv_Add_Services_Events_Rooms/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Wdv_Add_Services_Events_Rooms
 * @subpackage Wdv_Add_Services_Events_Rooms/admin
 * @author     wdvillage <wdvillage100@gmail.com>
 */
class Wdv_Add_Services_Events_Rooms_Admin {

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
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Wdv_Add_Services_Events_Rooms_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Wdv_Add_Services_Events_Rooms_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/wdv-add-services-events-rooms-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Wdv_Add_Services_Events_Rooms_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Wdv_Add_Services_Events_Rooms_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/wdv-add-services-events-rooms-admin.js', array( 'jquery' ), $this->version, false );

	}
        
        /**
	 * Creates a new custom post type
	 *
	 * @since 	1.0.0
	 * @access 	public
	 * @uses 	register_post_type()
	 */
        public static function wdv_post_type_services() {
	$labels = array(
		"name" => __( "Services", "aniro-hotel-light" ),
		"singular_name" => __( "Service", "aniro-hotel-light" ),
		"menu_name" => __( "Services", "aniro-hotel-light" ),
		"all_items" => __( "All Services", "aniro-hotel-light" ),
		"add_new" => __( "Add New", "aniro-hotel-light" ),
		"add_new_item" => __( "Add New Service", "aniro-hotel-light" ),
		"edit_item" => __( "Edit Service", "aniro-hotel-light" ),
		"new_item" => __( "New Service", "aniro-hotel-light" ),
		"view_item" => __( "View Service", "aniro-hotel-light" ),
		"view_items" => __( "View Services", "aniro-hotel-light" ),
		"archives" => __( "services", "aniro-hotel-light" ),
	);

	$args = array(
		"label" => __( "Services", "aniro-hotel-light" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => false,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "services", "with_front" => true ),
		"query_var" => true,
		"supports" => array( "title", "editor", "thumbnail", "excerpt", "trackbacks", "custom-fields", "comments", "revisions", "author", "page-attributes", "post-formats" ),
	);

	register_post_type( "services", $args );
            
        }
        public static function wdv_post_type_events() {
	$labels = array(
		"name" => __( "Events", "aniro-hotel-light" ),
		"singular_name" => __( "Event", "aniro-hotel-light" ),
		"menu_name" => __( "Events", "aniro-hotel-light" ),
		"all_items" => __( "All Events", "aniro-hotel-light" ),
		"add_new" => __( "Add Event", "aniro-hotel-light" ),
		"archives" => __( "events", "aniro-hotel-light" ),
	);

	$args = array(
		"label" => __( "Events", "aniro-hotel-light" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => false,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "events", "with_front" => true ),
		"query_var" => true,
		"supports" => array( "title", "editor", "thumbnail", "excerpt", "custom-fields", "comments", "post-formats" ),
	);

	register_post_type( "events", $args );            
        }  
        
        public static function wdv_post_type_rooms() {
	$labels = array(
		"name" => __( "Rooms", "aniro-hotel-light" ),
		"singular_name" => __( "Room", "aniro-hotel-light" ),
		"archives" => __( "rooms", "aniro-hotel-light" ),
	);

	$args = array(
		"label" => __( "Rooms", "aniro-hotel-light" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => false,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "rooms", "with_front" => true ),
		"query_var" => true,
		"supports" => array( "title", "editor", "thumbnail", "custom-fields" ),
	);

	register_post_type( "rooms", $args );            
        }       
}
