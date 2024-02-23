<?php
/*
Plugin Name: Divi Custom Modules
Plugin URI:  #
Description: This plugin adds custom modules to Divi Page Builder
Version:     1.0.0
Author:      Manish Shah
Author URI:  wwww.manishshah.info.np
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: formidable-divi-module

Divi Custom Modules is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

Divi Custom Modules is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with Divi Custom Modules. If not, see https://www.gnu.org/licenses/gpl-2.0.html.
*/

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

if ( ! function_exists( 'fdm_initialize_extension' ) ):
/**
 * Creates the extension's main class instance.
 *
 * @since 1.0.0
 */
function fdm_initialize_extension() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/DiviCustomModules.php';
}
add_action( 'divi_extensions_init', 'fdm_initialize_extension' );


function fdm_enqueue_custom_style() {
    wp_register_style( 'fdm_insert_custom_style', plugins_url( '/assets/style.css', __FILE__ ), array(), '1.0.0', 'all' );
}
add_action( 'wp_enqueue_scripts', 'fdm_enqueue_custom_style' );

endif;
