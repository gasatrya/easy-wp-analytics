<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://wpanalytics.pro/
 * @since      1.0.0
 *
 * @package    Easy_Wp_Analytics
 * @subpackage Easy_Wp_Analytics/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Easy_Wp_Analytics
 * @subpackage Easy_Wp_Analytics/admin
 * @author     Ga Satrya <ga@wpanalytics.pro>
 */
class Easy_Wp_Analytics_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $easyWpAnalytics    The ID of this plugin.
	 */
	private $easyWpAnalytics;

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
	 * @param      string    $easyWpAnalytics       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $easyWpAnalytics, $version ) {

		$this->easyWpAnalytics = $easyWpAnalytics;
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
		 * defined in Easy_Wp_Analytics_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Easy_Wp_Analytics_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->easyWpAnalytics, plugin_dir_url( __FILE__ ) . 'css/easy-wp-analytics-admin.css', array(), $this->version, 'all' );

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
		 * defined in Easy_Wp_Analytics_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Easy_Wp_Analytics_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->easyWpAnalytics, plugin_dir_url( __FILE__ ) . 'js/easy-wp-analytics-admin.js', array( 'jquery' ), $this->version, false );

	}

}
