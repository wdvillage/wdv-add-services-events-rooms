<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       http://wdvillage.com
 * @since      1.0.0
 *
 * @package    Wdv_Add_Services_Events_Rooms
 * @subpackage Wdv_Add_Services_Events_Rooms/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Wdv_Add_Services_Events_Rooms
 * @subpackage Wdv_Add_Services_Events_Rooms/includes
 * @author     wdvillage <wdvillage100@gmail.com>
 */
class Wdv_Add_Services_Events_Rooms_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'wdv-add-services-events-rooms',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
