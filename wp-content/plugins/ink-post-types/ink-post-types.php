<?php /*
Plugin Name: Custom Post Types - All About Ink
Description:  Adds custom post types to the site
Author: Tanisha Rose
Plugin URI: 
Author URI:http://www.tanisharosemedia.com
Version: 0.1
License: GPLv3
*/ 

/**
 * Create Products post type
 * @since 0.1
 */

add_action('init', 'ink_setup_posts');

function ink_setup_posts(){

	register_post_type('history', array(
    	'public' 		=> true,
    	'has_archive' 	=> true,
    	'menu_position'	=> 5,
    	'menu_icon'		=> 'dashicons-book',
    	'supports'		=> array('title','editor','thumbnail','excerpt','custom-fields'),
    	'labels' 		=> array(
    		'name' 			=> 'History',
    		'singular_name' => 'History',
    		'add_new_item'	=> 'Add New History',
    		'not_found'		=> 'No history found.'),
		) );

    register_post_type('types', array(
        'public'        => true,
        'has_archive'   => true,
        'menu_position' => 5,
        'menu_icon'     => 'dashicons-book',
        'supports'      => array('title','editor','thumbnail','excerpt','custom-fields'),
        'labels'        => array(
            'name'          => 'Types',
            'singular_name' => 'Type',
            'add_new_item'  => 'Add New Type',
            'not_found'     => 'No types found.' ),
        ) );

    register_post_type('processes', array(
        'public'        => true,
        'has_archive'   => true,
        'menu_position' => 5,
        'menu_icon'     => 'dashicons-book',
        'supports'      => array('title','editor','thumbnail','excerpt','custom-fields'),
        'labels'        => array(
            'name'          => 'Processes',
            'singular_name' => 'Process',
            'add_new_item'  => 'Add New Process',
            'not_found'     => 'No processes found.'),
        ) );

    register_post_type('machines', array(
        'public'        => true,
        'has_archive'   => true,
        'menu_position' => 5,
        'menu_icon'     => 'dashicons-book',
        'supports'      => array('title','editor','thumbnail','excerpt','custom-fields'),
        'labels'        => array(
            'name'          => 'Machines',
            'singular_name' => 'Machine',
            'add_new_item'  => 'Add New Machine',
            'not_found'     => 'No machines found.'),
        ) );

    register_post_type('styles', array(
        'public'        => true,
        'has_archive'   => true,
        'menu_position' => 5,
        'menu_icon'     => 'dashicons-book',
        'supports'      => array('title','editor','thumbnail','excerpt','custom-fields'),
        'labels'        => array(
            'name'          => 'Styles',
            'singular_name' => 'Style',
            'add_new_item'  => 'Add New Style',
            'not_found'     => 'No styles found.'),
        ) );

}

function ink_rewrite_flush(){
    ink_setup_posts();//call the func. that registers CPT/Taxonomies
    
    flush_rewrite_rules();//recreate the htaccess rules
}

register_activation_hook( __FILE__, 'ink_rewrite_flush' );

?>