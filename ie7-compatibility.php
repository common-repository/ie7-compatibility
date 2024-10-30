<?php
/*
Plugin Name: IE7 Compatibility
Plugin URI: http://wordpress.org/extend/plugins/ie7-compatibility/
Description: Enables IE7 compatibility until your blog works with IE8.
Author: Matt Strum
Version: 1.0
Author URI: http://www.mstrum.com/
*/

/*
Copyright 2009  Matt Strum  (email : public@mstrum.com)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/
$favi_dom = "ie7-compatibility";

// Activate
register_activation_hook( __FILE__, 'ie7comp_activate' );
function ie7comp_activate() {
	if (!(get_option("ie7comp_setup")=="false")) {
		add_option("ie7comp_setup", "false");
	}
}

// Deactivate
register_deactivation_hook( __FILE__, 'ie7comp_deactivate' );
function ie7comp_deactivate() {
	delete_option("ie7comp_setup");
}

// Blog Head
add_action("wp_head", "ie7comp_head");
function ie7comp_head() {
	echo "\n<meta http-equiv=\"X-UA-Compatible\" content=\"IE=EmulateIE7\" />\n";
}

?>