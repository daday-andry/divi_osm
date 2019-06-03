<?php
/*
Plugin Name: Divi Osm
Plugin URI:  https://github.com/daday-andry/divi_osm
Description: OpenStreetMap Divi integrator tools
Version:     1.0.0
Author:      DADAY Andry
Author URI:  https://andrynirina.portfoliobox.net
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: osm-divi_osm
Domain Path: /languages

Divi Osm is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

Divi Osm is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with Divi Osm. If not, see https://www.gnu.org/licenses/gpl-2.0.html.
*/


if ( ! function_exists( 'osm_initialize_extension' ) ):
/**
 * Creates the extension's main class instance.
 *
 * @since 1.0.0
 */
function osm_initialize_extension() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/DiviOsm.php';
}
add_action( 'divi_extensions_init', 'osm_initialize_extension' );
endif;
