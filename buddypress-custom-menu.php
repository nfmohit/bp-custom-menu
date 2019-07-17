<?php
/**
 * Plugin Name: BuddyPress Custom Menu
 * Plugin URI: https://nahid.dev/project/buddypress-custom-menu
 * Description: Create custom BuddyPress profile menu pages, gracefully.
 * Author: Nahid Ferdous Mohit
 * Version: 1.0
 * Author URI: https://nahid.dev
 * Text Domain: buddypress-custom-menu
 *
 * @since      1.0
 * @package    BuddyPress Custom Menu
 * @author     Nahid Ferdous Mohit
 */

/*
 * If this file is called directly, abort.
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/*
 * Call the plugin loader file
 */
require_once plugin_dir_path( __FILE__ ) . 'includes/loader.php';
