<?php
/**
 * Plugin Name: Ghost AI WP Plugin
 * Version: 1.0.0
 * Plugin URI: https://www.ghostai.rocks
 * Description: This is your starter template for your next WordPress plugin.
 * Author: Hugh Lashbrooke
 * Author URI: https://www.ghostai.rocks
 * Requires at least: 4.0
 * Tested up to: 4.0
 *
 * Text Domain: ghost-ai-wp-plugin
 * Domain Path: /lang/
 *
 * @package WordPress
 * @author Joe Shepard
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Load plugin class files.
require_once 'includes/class-ghost-ai-wp-plugin.php';
require_once 'includes/class-ghost-ai-wp-plugin-settings.php';

// Load plugin libraries.
require_once 'includes/lib/class-ghost-ai-wp-plugin-admin-api.php';
require_once 'includes/lib/class-ghost-ai-wp-plugin-post-type.php';
require_once 'includes/lib/class-ghost-ai-wp-plugin-taxonomy.php';

/**
 * Returns the main instance of Ghost_AI_WP_Plugin to prevent the need to use globals.
 *
 * @since  1.0.0
 * @return object Ghost_AI_WP_Plugin
 */
function ghost_ai_wp_plugin() {
	$instance = Ghost_AI_WP_Plugin::instance( __FILE__, '1.0.0' );

	if ( is_null( $instance->settings ) ) {
		$instance->settings = Ghost_AI_WP_Plugin_Settings::instance( $instance );
	}

	return $instance;
}

ghost_ai_wp_plugin();
