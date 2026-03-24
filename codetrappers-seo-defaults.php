<?php
/**
 * Plugin Name: Codetrappers SEO Defaults
 * Description: Starter plugin for default metadata and indexing rules.
 * Version: 0.1.0
 * Author: Codetrappers
 * License: GPL-2.0-or-later
 * Requires at least: 6.4
 * Requires PHP: 7.4
 * Text Domain: codetrappers-seo-defaults
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'COETRAPPERS_SEO_DEFAULTS_VERSION', '0.1.0' );
define( 'COETRAPPERS_SEO_DEFAULTS_FILE', __FILE__ );
define( 'COETRAPPERS_SEO_DEFAULTS_PATH', plugin_dir_path( __FILE__ ) );
define( 'COETRAPPERS_SEO_DEFAULTS_URL', plugin_dir_url( __FILE__ ) );

require_once COETRAPPERS_SEO_DEFAULTS_PATH . 'includes/class-codetrappers-seo-defaults.php';

function codetrappers_seo_defaults_bootstrap() {
	$plugin = new \Codetrappers\CodetrappersSeoDefaults\CodetrappersSeoDefaultsPlugin();
	$plugin->boot();
}

codetrappers_seo_defaults_bootstrap();
