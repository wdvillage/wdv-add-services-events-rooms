<?php

/**
 *
 * @link              http://wdvillage.com
 * @since             1.0.0
 * @package           Wdv_Add_Services_Events_Rooms
 *
 * @wordpress-plugin
 * Plugin Name:       WDV - Add Services, Events, Rooms
 * Plugin URI:        http://wdvillage.com/product/wdv-add-services-events-rooms-plugin/
 * Description:       The plugin "WDV - Add Services, Events, Rooms" added custom post types "Services", "Abouts", "Rooms", "Testimonials", "Advertisements" to WP theme "Aniro Hotel Light".
 * Version:           1.1.0
 * Author:            wdvillage
 * Author URI:        http://wdvillage.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wdv-add-services-events-rooms
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'WDV_ADD_SERVICES_EVENTS_ROOMS_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-wdv-add-services-events-rooms-activator.php
 */
function activate_wdv_add_services_events_rooms() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wdv-add-services-events-rooms-activator.php';
	Wdv_Add_Services_Events_Rooms_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-wdv-add-services-events-rooms-deactivator.php
 */
function deactivate_wdv_add_services_events_rooms() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wdv-add-services-events-rooms-deactivator.php';
	Wdv_Add_Services_Events_Rooms_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_wdv_add_services_events_rooms' );
register_deactivation_hook( __FILE__, 'deactivate_wdv_add_services_events_rooms' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-wdv-add-services-events-rooms.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_wdv_add_services_events_rooms() {

	$plugin = new Wdv_Add_Services_Events_Rooms();
	$plugin->run();

}
run_wdv_add_services_events_rooms();
