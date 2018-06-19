<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://github.com/mattlaguardia/
 * @since      1.0.0
 *
 * @package    Api_Rest_Form_Plugin
 * @subpackage Api_Rest_Form_Plugin/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Api_Rest_Form_Plugin
 * @subpackage Api_Rest_Form_Plugin/includes
 * @author     Matt <matthewlaguardia@gmail.com>
 */
class Api_Rest_Form_Plugin_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'api-rest-form-plugin',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
