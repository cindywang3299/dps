<?php

add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {

    $parent_style = 'parent-style';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );

}

// Get page ancestor
function get_ancestor_id() {

	  global $post;

	  if ($post->post_parent) {
		     $ancestors = array_reverse(get_post_ancestors($post->ID));
		     return $ancestors[0];
	  }

    return $post->ID;

}

// Determine whether page has children
function has_children() {

	  global $post;

	  $pages = get_pages('child_of=' . $post->ID);

	  return count($pages);

}
