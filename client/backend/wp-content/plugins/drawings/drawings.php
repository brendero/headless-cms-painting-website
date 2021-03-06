<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              brendero.github.io
 * @since             1.0.0
 * @package           Drawings
 *
 * @wordpress-plugin
 * Plugin Name:       Drawings
 * Plugin URI:        sleepy.com
 * Description:       This plugin is to activate the custom post type of the drawings.
 * Version:           1.0.0
 * Author:            Brent De Roeck
 * Author URI:        brendero.github.io
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       Drawings
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
define( 'PLUGIN_NAME_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-drawings-activator.php
 */
function activate_drawings() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-drawings-activator.php';
	Drawings_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-drawings-deactivator.php
 */
function deactivate_drawings() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-drawings-deactivator.php';
	Drawings_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_drawings' );
register_deactivation_hook( __FILE__, 'deactivate_drawings' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-drawings.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_drawings() {

	$plugin = new Drawings();
	$plugin->run();

}
run_drawings();
