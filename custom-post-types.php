<?php
/*
// ========= Custom Post Types - Camps ============
*/

add_action( 'init', 'custom_post_type_camps', 0 );

function custom_post_type_camps() {

    $labels = array(
        'name'                => _x( 'Camps', 'Post Type General Name',  'desertdelta' ),
        'singular_name'       => _x( 'Camps',  'Post Type Singular Name', 'desertdelta' ),
        'menu_name'           => __( 'Camps',        'desertdelta' ),
        'parent_item_colon'   => __( 'Parent Camps', 'desertdelta' ),
        'all_items'           => __( 'All Camps',    'desertdelta' ),
        'view_item'           => __( 'View Camps',   'desertdelta' ),
        'add_new_item'        => __( 'Add New Camps', 'desertdelta' ),
        'add_new'             => __( 'Add Camps',     'desertdelta' ),
        'edit_item'           => __( 'Edit Camps',    'desertdelta' ),
        'update_item'         => __( 'Update Camps',  'desertdelta' ),
        'search_items'        => __( 'Search Camps',  'desertdelta' ),
        'not_found'           => __( 'Not Found',             'desertdelta' ),
        'not_found_in_trash'  => __( 'Not found in Trash',    'desertdelta' )
    );
    
    $args = array(
        'label'               => __( 'camps', 'desertdelta' ),
        'description'         => __( 'Camps', 'desertdelta' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'taxonomies' ),
        'menu_icon'           => 'dashicons-admin-multisite',
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'can_export'          => true,
        'has_archive'         => false,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page'
    );
    
    register_post_type( 'camps', $args );
}