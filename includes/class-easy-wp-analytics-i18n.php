<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://wpanalytics.pro/
 * @since      1.0.0
 *
 * @package    Easy_WP_Analytics
 * @subpackage Easy_WP_Analytics/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Easy_WP_Analytics
 * @subpackage Easy_WP_Analytics/includes
 * @author     Ga Satrya <ga@wpanalytics.pro>
 */
class Easy_WP_Analytics_I18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'easy-wp-analytics',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);
	}
}
