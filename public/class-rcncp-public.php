<?php
/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://junaidbinjaman.com
 * @since      1.0.0
 *
 * @package    Rcncp
 * @subpackage Rcncp/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Rcncp
 * @subpackage Rcncp/public
 * @author     Junaid Bin Jaman <me@junaidbinjaman.com>
 */
class Rcncp_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

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
	 * @param      string $plugin_name       The name of the plugin.
	 * @param      string $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version     = $version;
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
		 * defined in Rcncp_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Rcncp_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/rcncp-public.css', array(), $this->version, 'all' );
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
		 * defined in Rcncp_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Rcncp_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/rcncp-public.js', array( 'jquery' ), $this->version, false );
	}

	/**
	 * Register shortcodes
	 *
	 * @since   1.0.0
	 */
	public function rcncp_multi_step_application() {

		/**
		 * Require shortcode callback functions class
		 *
		 * @var  string Initializing the Rcncp_Shortcode_Callbacks class.
		 */
		require_once plugin_dir_path( __DIR__ ) . 'includes/class-rcncp-shortcode-callbacks.php';
		$shortcode_callback = new Rcncp_Shortcode_Callbacks();

		/**
		 * Calling add_shortcode() inside this function block.
		 *
		 * Write your callback function inside includes/class-shortcodes.php
		 * defined in Rcncp_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Rcncp_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */
		add_shortcode( 'rcncp_multi_step_application', array( $shortcode_callback, 'multi_step_application' ) );
	}
}
