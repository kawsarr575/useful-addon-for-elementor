<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://elementorex.com
 * @since             1.0.0
 * @package           Uafe
 *
 * @wordpress-plugin
 * Plugin Name:       Useful Addon for Elementor
 * Plugin URI:        https://elementorex.com
 * Description:       All addon need for your website and make your website beautiful
 * Version:           1.0.0
 * Author:            Elementorex
 * Author URI:        https://elementorex.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       uafe
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
define( 'UAFE_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-uafe-activator.php
 */
function activate_uafe() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-uafe-activator.php';
	Uafe_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-uafe-deactivator.php
 */
function deactivate_uafe() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-uafe-deactivator.php';
	Uafe_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_uafe' );
register_deactivation_hook( __FILE__, 'deactivate_uafe' );

/**
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-uafe.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_uafe() {

	$plugin = new Uafe();
	$plugin->run();

}
run_uafe();
