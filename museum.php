<?php
/**
 * Plugin Name:     Museum
 * Plugin URI:      https://github.com/RafaelFunchal/museum
 * Description:     Create Art Collections for museums with Projects and Artists Details.
 * Author:          Rafael Funchal
 * Author URI:      https://www.rafaelfunchal.com.br
 * Text Domain:     museum
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         Museum
 */

// Set var for dir path
$dir = plugin_dir_path( __FILE__ );

// Require Post Types file
require_once $dir . '/post-types.php';

// Require Taxonomies file
require_once $dir . '/taxonomies.php';

// Require Metaboxes file
require_once $dir . '/metaboxes.php';