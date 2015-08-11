<?php 

/*
Plugin Name: Text Toggle
Description: This plugin toggles text on certain archive pages
Author: Tanisha Rose
Plugin URI: 
Author URI:http://www.tanisharosemedia.com
Version: 01
License: GPLv3
*/

add_action('wp_enqueue_scripts', 'ink_toggle_scripts');

function ink_toggle_scripts(){
	// if(is_post_type_archive()):

	$t_path = plugins_url('js/toggle.js' , __FILE__ );
	wp_enqueue_script('ink-toggle-js', $t_path,'jquery', false, true);

	// endif;
}

 ?>