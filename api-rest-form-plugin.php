<?php

defined('AVSPATH') or die('No SCRIPT KIDDIES please!');

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://github.com/mattlaguardia/
 * @since             1.0.0
 * @package           Api_Rest_Form_Plugin
 *
 * @wordpress-plugin
 * Plugin Name:       API Rest From
 * Plugin URI:        https://github.com/mattlaguardia/api-rest-form-plugin
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Matt
 * Author URI:        https://github.com/mattlaguardia/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       api-rest-form-plugin
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
 * This action is documented in includes/class-api-rest-form-plugin-activator.php
 */
function activate_api_rest_form_plugin() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-api-rest-form-plugin-activator.php';
	Api_Rest_Form_Plugin_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-api-rest-form-plugin-deactivator.php
 */
function deactivate_api_rest_form_plugin() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-api-rest-form-plugin-deactivator.php';
	Api_Rest_Form_Plugin_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_api_rest_form_plugin' );
register_deactivation_hook( __FILE__, 'deactivate_api_rest_form_plugin' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-api-rest-form-plugin.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_api_rest_form_plugin() {

	$plugin = new Api_Rest_Form_Plugin();
	$plugin->run();

}
run_api_rest_form_plugin();
