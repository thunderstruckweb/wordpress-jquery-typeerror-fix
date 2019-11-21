<?php
/*
Plugin Name:	WordPress jQuery TypeError fix
Description:	Fixes Uncaught TypeError: $ is not a function caused by WordPress update
Version:		1.0.0
Author:			Patrick
License:		GPL-2.0+
License URI:	http://www.gnu.org/licenses/gpl-2.0.txt

This plugin is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

This plugin is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with This plugin. If not, see {URI to Plugin License}.
*/

if ( ! defined( 'WPINC' ) ) {
	die;
}

add_action("admin_head", function () {
    echo "<script> var $ = jQuery; </script>";
});
// AND... ANOTHER LINE OF CODE, NEARLY THE SAME BUT WITH DIFFERENT HOOK ENTRY
add_action("wp_head", function () {
    echo "<script> var $ = jQuery; </script>";
});
