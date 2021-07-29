<?php
add_action('init', 'register_post_curators');
function register_post_curators(){
    $labels = array(
            'name' => __('Curators'), 
            'singular_name' => __('Curators'),
            'menu_name' => __('Curators'), 
            'all_items' => __('All Items'),           
            'add_new' => __('Add New'),
            'add_new_item' => __('Add New Item'),
            'edit_item' => __('Edit Item'),
            'view_item' => __('View Item'),
            'search_items' => __('Search Item'),
            'not_found' =>  __('Not Found'),
            'not_found_in_trash' => __('Not Found In Trash'),
            'new_item' => __('New Item'),
            );
    $supports = array(
            'title',
            'thumbnail',
            'editor',
            );
    $rewrite = array(
            'slug' => 'curators',
            'with_front' => false,
            'pages' => true,
            );
    $args = array(
            'labels' => $labels,
            'supports' => $supports,
            'rewrite' => $rewrite,
            'label' => 'curators',
            'public' => true,
            'publicly_queryable' => true,
            'exclude_from_search' => true,
            'show_ui' => true,
            'show_in_admin_bar' => true,
            'show_in_menu' => true,
            'menu_position' => 10,
            'menu_icon' => 'dashicons-businessperson',
            'hierarchical' => false,
            'has_archive' => false,
            'query_var' => true,    
    );
  register_post_type('curators',$args);

add_filter( 'enter_title_here', 'enter_curators_name', 10, 2 );
function enter_curators_name( $text, $post ) {
    if ( $post->post_type === 'curators' ) {
        $text = __( 'Curator Name' );
    }
    return $text;
    }
}

add_action('init', 'register_post_groups');
function register_post_groups(){
    $labels = array(
            'name' => __('Groups'), 
            'singular_name' => __('Groups'),
            'menu_name' => __('Groups'), 
            'all_items' => __('All Items'),           
            'add_new' => __('Add New'),
            'add_new_item' => __('Add New Item'),
            'edit_item' => __('Edit Item'),
            'view_item' => __('View Item'),
            'search_items' => __('Search Item'),
            'not_found' =>  __('Not Found'),
            'not_found_in_trash' => __('Not Found In Trash'),
            'new_item' => __('New Item'),
            );
    $supports = array(
            'title',
            'thumbnail',
            'editor',
            );
    $rewrite = array(
            'slug' => 'groups',
            'with_front' => false,
            'pages' => true,
            );
    $args = array(
            'labels' => $labels,
            'supports' => $supports,
            'rewrite' => $rewrite,
            'label' => 'groups',
            'public' => true,
            'publicly_queryable' => true,
            'exclude_from_search' => true,
            'show_ui' => true,
            'show_in_admin_bar' => true,
            'show_in_menu' => true,
            'menu_position' => 10,
            'menu_icon' => 'dashicons-groups',
            'hierarchical' => false,
            'has_archive' => false,
            'query_var' => true,    
    );
  register_post_type('groups',$args);

add_filter( 'enter_title_here', 'enter_groups_name', 10, 2 );
function enter_groups_name( $text, $post ) {
    if ( $post->post_type === 'groups' ) {
        $text = __( 'Groups Name' );
    }
    return $text;
    }
}