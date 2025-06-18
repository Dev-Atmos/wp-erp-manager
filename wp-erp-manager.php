<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://github.com/Dev-Atmos
 * @since             1.0.0
 * @package           Wp_Erp_Manager
 *
 * @wordpress-plugin
 * Plugin Name:       WP ERP Manager
 * Plugin URI:        https://devatmos.com
 * Description:       A scalable ERP solution for WordPress
 * Version:           1.0.0
 * Author:            DevAtmos
 * Author URI:        https://github.com/Dev-Atmos/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wp-erp-manager
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
define( 'WP_ERP_MANAGER_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-wp-erp-manager-activator.php
 */
function activate_wp_erp_manager() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-erp-manager-activator.php';
	Wp_Erp_Manager_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-wp-erp-manager-deactivator.php
 */
function deactivate_wp_erp_manager() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-erp-manager-deactivator.php';
	Wp_Erp_Manager_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_wp_erp_manager' );
register_deactivation_hook( __FILE__, 'deactivate_wp_erp_manager' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-wp-erp-manager.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_wp_erp_manager() {

	$plugin = new Wp_Erp_Manager();
	$plugin->run();

}
run_wp_erp_manager();
