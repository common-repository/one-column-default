<?php
/*
Plugin Name: One Column Default
Plugin URI: http://13ham.com/1col-default/
Description: Sets user's default dashboard to one column.
Author: Jake Pharr
Version: 0.1
Author URI: http://13ham.com
*/

/*
This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License (Version 2 - GPLv2) as published by
the Free Software Foundation.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
*/

/*
Installation: unzip, upload to wp-content/plugins/ folder, 
*/

function one_column_default() {
global $user_ID;
$options = get_user_option("screen_layout_dashboard", $user_ID);

	if ($options != 1){
	update_user_option($user_ID, "screen_layout_dashboard", 1, true);
	?>
	<script type="text/javascript">
	<!--
	window.location = ""
	//-->
	</script>
	<?
	}
}

add_action('wp_dashboard_setup', 'one_column_default' );

?>
