<?php
/**
 * Plugin Name: Adminbar
 * Plugin URI:  https://github.com/jeweltheme/adminbar
 * Description: This plugin adds an adminbar like in Wordpress.com
 * Version:     1.2.1
 * Author:      Liton Arefin
 * Author URI:  https://profiles.wordpress.org/jwthemeltd
 * Text Domain: adminbar
 * Domain Path: /languages/
 * License: GPLv3 or later
 * License URI: https://www.gnu.org/licenses/gpl-3.0.html
 */

 // No, Direct access Sir !!!
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
/** don't call the file directly */
if ( ! defined( 'ABSPATH' ) ) {
	wp_die( __( 'You can\'t access this page', 'adminbar' ) );
}

$jlt_adminbar_plugin_data = get_file_data(
	__FILE__,
	array(
		'Version'     => 'Version',
		'Plugin Name' => 'Plugin Name',
		'Author'      => 'Author',
		'Description' => 'Description',
		'Plugin URI'  => 'Plugin URI',
	),
	false
);


// Define Constants
if ( ! defined( 'JLT_ADMINBAR' ) ) {
	define( 'JLT_ADMINBAR', $jlt_adminbar_plugin_data['Plugin Name'] );
}
if ( ! defined( 'JLT_ADMINBAR_VER' ) ) {
	define( 'JLT_ADMINBAR_VER', $jlt_adminbar_plugin_data['Version'] );
}
if ( ! defined( 'JLT_ADMINBAR_AUTHOR' ) ) {
	define( 'JLT_ADMINBAR_AUTHOR', $jlt_adminbar_plugin_data['Author'] );
}
if ( ! defined( 'JLT_ADMINBAR_DESC' ) ) {
	define( 'JLT_ADMINBAR_DESC', $jlt_adminbar_plugin_data['Author'] );
}
if ( ! defined( 'JLT_ADMINBAR_URI' ) ) {
	define( 'JLT_ADMINBAR_URI', $jlt_adminbar_plugin_data['Plugin URI'] );
}
if ( ! defined( 'JLT_ADMINBAR_DIR' ) ) {
	define( 'JLT_ADMINBAR_DIR', __DIR__ );
}
if ( ! defined( 'JLT_ADMINBAR_FILE' ) ) {
	define( 'JLT_ADMINBAR_FILE', __FILE__ );
}
if ( ! defined( 'JLT_ADMINBAR_SLUG' ) ) {
	define( 'JLT_ADMINBAR_SLUG', dirname( plugin_basename( __FILE__ ) ) );
}
if ( ! defined( 'JLT_ADMINBAR_BASE' ) ) {
	define( 'JLT_ADMINBAR_BASE', plugin_basename( __FILE__ ) );
}
if ( ! defined( 'JLT_ADMINBAR_PATH' ) ) {
	define( 'JLT_ADMINBAR_PATH', trailingslashit( plugin_dir_path( __FILE__ ) ) );
}
if ( ! defined( 'JLT_ADMINBAR_URL' ) ) {
	define( 'JLT_ADMINBAR_URL', trailingslashit( plugins_url( '/', __FILE__ ) ) );
}
if ( ! defined( 'JLT_ADMINBAR_INC' ) ) {
	define( 'JLT_ADMINBAR_INC', JLT_ADMINBAR_PATH . '/Inc/' );
}
if ( ! defined( 'JLT_ADMINBAR_LIBS' ) ) {
	define( 'JLT_ADMINBAR_LIBS', JLT_ADMINBAR_PATH . 'Libs' );
}
if ( ! defined( 'JLT_ADMINBAR_ASSETS' ) ) {
	define( 'JLT_ADMINBAR_ASSETS', JLT_ADMINBAR_URL . 'assets/' );
}
if ( ! defined( 'JLT_ADMINBAR_IMAGES' ) ) {
	define( 'JLT_ADMINBAR_IMAGES', JLT_ADMINBAR_ASSETS . 'images' );
}
if ( ! defined( 'JLT_ADMINBAR_SOURCE' ) ) {
	define( 'JLT_ADMINBAR_SOURCE', 'https://jeweltheme.com' );
}
if ( ! defined( 'JLT_ADMINBAR_INC' ) ) {
	define( 'JLT_ADMINBAR_INC', JLT_ADMINBAR_PATH . '/Inc' );
}

// Admin Bar Class
if ( ! class_exists( 'JltAdminBar' ) ) {
	require_once dirname( __FILE__ ) . '/class-adminbar.php';
}
