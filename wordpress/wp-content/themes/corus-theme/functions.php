<?php
/**
 * Portfolio functions and definitions
 *
 * 
 */

/* Register navigation menus uses wp_nav_menu in five places. */

function wpb_custom_new_menu() {
  register_nav_menu('my-custom-menu',__( 'My Custom Menu' ));
}
add_action( 'init', 'wpb_custom_new_menu' );


function main_nav_menu_items( $items ) {
    return $items;
}
add_action('wp_nav_menu_menuname_items', 'main_nav_menu_items');



/* Add Featured Image Support To Your WordPress Theme */

function add_featured_image_support_to_your_wordpress_theme() {
	add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'add_featured_image_support_to_your_wordpress_theme' );


function create_posttype() {
 
    register_post_type( 'gallery',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Galleries' ),
                'singular_name' => __( 'Gallery' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'gallery'),
            'show_in_rest' => true,
 
        )
    );
}
add_action( 'init', 'create_posttype' );
