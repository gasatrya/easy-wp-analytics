<?php
/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://wpanalytics.pro/
 * @since      1.0.0
 *
 * @package    Easy_WP_Analytics
 * @subpackage Easy_WP_Analytics/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Easy_WP_Analytics
 * @subpackage Easy_WP_Analytics/public
 * @author     Ga Satrya <ga@wpanalytics.pro>
 */
class Easy_WP_Analytics_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $easy_wp_analytics    The ID of this plugin.
	 */
	private $easy_wp_analytics;

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
	 * @param    string $easy_wp_analytics       The name of the plugin.
	 * @param    string $version    The version of this plugin.
	 */
	public function __construct( $easy_wp_analytics, $version ) {

		$this->easy_wp_analytics = $easy_wp_analytics;
		$this->version           = $version;
	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Easy_WP_Analytics_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Easy_WP_Analytics_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->easy_wp_analytics, plugin_dir_url( __FILE__ ) . 'css/easy-wp-analytics-public.css', array(), $this->version, 'all' );
	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Easy_WP_Analytics_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Easy_WP_Analytics_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->easy_wp_analytics, plugin_dir_url( __FILE__ ) . 'js/easy-wp-analytics-public.js', array( 'jquery' ), $this->version, false );
	}
}
