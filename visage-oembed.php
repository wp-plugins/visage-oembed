<?php
/**
 * Plugin Name: Visage oEmbed
 * Plugin URI: http://visage.co/visage-oembed-plugin
 * Description: This plugin adds Visage as an oEmbed provider.
 * Version: 0.1
 * Author: Drew Gourley, Visage
 * Author URI: http://visage.co
 * License: GPL2
 */

/*  Copyright 2015  Visage  (email : drew@visage.co)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

defined('ABSPATH') or die("Nope.");

function visage_oembed_provider() {
	wp_oembed_add_provider( 'http://gorgo.visage.co/chart/embed/*', 'http://gorgo.visage.co/oembed', false );
	wp_oembed_add_provider( 'http://gorgo.visage.co/chart/view/*', 'http://gorgo.visage.co/oembed', false );

	wp_oembed_add_provider( 'http://gorgo-staging.herokuapp.com/chart/embed/*', 'http://gorgo-staging.herokuapp.com/oembed', false );
	wp_oembed_add_provider( 'http://gorgo-staging.herokuapp.com/chart/view/*', 'http://gorgo-staging.herokuapp.com/oembed', false );
}
add_action( 'init', 'visage_oembed_provider' );
?>