<?php 

//turn on sleeping features

add_theme_support('post-thumbnails');

add_theme_support('post-formats', array('gallery','video','image','quote'));

add_image_size( 'ink_pic', 300, 300, true ); //name,height,width,crop

/**
 * Turn on Menu Support
 *	@since 0.1
 */

add_action('init', '_menus');

function _menus(){
	register_nav_menus(array(
		'main_nav' 		=> 'Main Navigational Area',
		'footer_nav' 	=> 'Footer Navigational Area',
		));
}

//Remove inline height and width attribute on images

add_filter( 'post_thumbnail_html', 'remove_width_attribute', 10 );
add_filter( 'image_send_to_editor', 'remove_width_attribute', 10 );

function remove_width_attribute( $html ) {
   $html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
   return $html;
}

add_action('widgets_init', '_widgets');

/**
 * Make sidebars or widgets for the different templates on the site. 
 * register_sidebar(array());
 * 
 * $args = array(
			*'name'          => __( 'Sidebar name', 'theme_text_domain' ),
			*'id'            => 'unique-sidebar-id',
			*'description'   => '',
			*'class'         => '',
			*'before_widget' => '<li id="%1" class="widget %2">',
			*'after_widget'  => '</li>',
			*'before_title'  => '<h2 class="widgettitle">',
			*'after_title'   => '</h2>'
		*);
		*register_sidebar( $args );
 */

function _widgets(){

		register_sidebar(array(
		'name' 			=> 'Blog Sidebar',
		'id' 			=> 'blog-sidebar',
		'description' 	=> 'Sidebar for the Blog',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget' 	=> '</section>',
		'before_title' 	=> '<h2>',
		'after_title' 	=> '</h2>'
		));

		register_sidebar(array(
		'name' 			=> 'Front Page Sidebar',
		'id' 			=> 'front-page-sidebar',
		'description' 	=> 'Sidebar for the Front page',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget' 	=> '</section>',
		'before_title' 	=> '<h2>',
		'after_title' 	=> '</h2>'
		));

		register_sidebar(array(
		'name' 			=> 'Footer Sidebar',
		'id' 			=> 'foot-sidebar',
		'description' 	=> 'Sidebar for the Footer page',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget' 	=> '</section>',
		'before_title' 	=> '<h2>',
		'after_title' 	=> '</h2>'
		));

		register_sidebar(array(
		'name' 			=> 'Archive Sidebar',
		'id' 			=> 'archive-sidebar',
		'description' 	=> 'Sidebar for the Archive page',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget' 	=> '</section>',
		'before_title' 	=> '<h2>',
		'after_title' 	=> '</h2>'
		));
}

/**
 * Make default excerpts better
 *@since 0.1
 */
function awesome_ex_length(){
	return 5; //words 
	//default is 55 words
}

add_filter('excerpt_length', 'awesome_ex_length');


function _enqueue_script() {
	wp_enqueue_script( 'jquery' );
}
add_action( 'wp_enqueue_scripts', '_enqueue_script' );