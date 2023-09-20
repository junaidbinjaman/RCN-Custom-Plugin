<?php
/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://junaidbinjaman.com
 * @since             1.0.0
 * @package           Rcncp
 *
 * @wordpress-plugin
 * Plugin Name:       RCN Custom Plugin
 * Plugin URI:        https://github.com/junaidbinjaman/RCN-Custom-Plugin
 * Description:       This is a custom plugin developed for RCN official website.
 *                    Please visit plugin code for detail documentation.
 * Version:           1.0.0
 * Author:            Junaid Bin Jaman
 * Author URI:        https://junaidbinjaman.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       rcncp
 * Domain Path:       /languages
 *
 * Text Domain "rcncp" stands for RCN Custom plugin.
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
define( 'RCNCP_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-rcncp-activator.php
 */
function activate_rcncp() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-rcncp-activator.php';
	Rcncp_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-rcncp-deactivator.php
 */
function deactivate_rcncp() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-rcncp-deactivator.php';
	Rcncp_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_rcncp' );
register_deactivation_hook( __FILE__, 'deactivate_rcncp' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-rcncp.php';
require plugin_dir_path( __FILE__ ) . 'text.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_rcncp() {
	$plugin = new Rcncp();
	$plugin->run();
}
run_rcncp();
