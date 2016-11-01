<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://mywebbase.com
 * @since             1.0.0
 * @package           Mwb_customers
 *
 * @wordpress-plugin
 * Plugin Name:       mwb – customers
 * Plugin URI:        https://mywebbase.com
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Peter Pichler
 * Author URI:        https://mywebbase.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       mwb_customers
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-mwb_customers-activator.php
 */
function activate_mwb_customers() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-mwb_customers-activator.php';
	Mwb_customers_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-mwb_customers-deactivator.php
 */
function deactivate_mwb_customers() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-mwb_customers-deactivator.php';
	Mwb_customers_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_mwb_customers' );
register_deactivation_hook( __FILE__, 'deactivate_mwb_customers' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-mwb_customers.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_mwb_customers() {

	$plugin = new mwb_customers();
	$plugin->run();

}
run_mwb_customers();
