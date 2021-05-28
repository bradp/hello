<?php
/**
 * Plugin Name: 👋️
 * Plugin URI:
 * Description: 👋️
 * Author: Brad Parbs
 * Version: 👋️
 * Author URI: https://bradparbs.com
 */

add_action( 'admin_notices', '👋️' );
add_action( 'admin_head', '👋️👋️' );

/**
 * 👋️
 */
function 👋️() {
	echo "<p id='👋️'>👋️</p>";
}

/**
 * 👋️👋️
 */
function 👋️👋️() {
	echo "<style type='text/css'>#👋️ { float: right; padding-right: 15px; padding-top: 5px; margin: 0; font-size: 11px; } </style>";
}
