<?php
/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://wpanalytics.pro/
 * @since             1.0.0
 * @package           Easy_Wp_Analytics
 *
 * @wordpress-plugin
 * Plugin Name:       Easy WP Analytics
 * Plugin URI:        https://wpanalytics.pro/
 * Description:       Easyly to add google analytics tracking code to your WordPress website.
 * Version:           1.0.0
 * Author:            Ga Satrya
 * Author URI:        https://wpanalytics.pro//
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       easy-wp-analytics
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
define( 'EASY_WP_ANALYTICS_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-easy-wp-analytics-activator.php
 */
function activate_easy_wp_analytics() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-easy-wp-analytics-activator.php';
	Easy_Wp_Analytics_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-easy-wp-analytics-deactivator.php
 */
function deactivate_easy_wp_analytics() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-easy-wp-analytics-deactivator.php';
	Easy_Wp_Analytics_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_easy_wp_analytics' );
register_deactivation_hook( __FILE__, 'deactivate_easy_wp_analytics' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-easy-wp-analytics.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_easy_wp_analytics() {
	$plugin = new Easy_Wp_Analytics();
	$plugin->run();
}
run_easy_wp_analytics();
