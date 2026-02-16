<?php
function create_releases_cpt() {

    $labels = array(
        'name'                  => _x( 'Releases', 'Post Type General Name', 'gatherpress' ),
        'singular_name'         => _x( 'Release', 'Post Type Singular Name', 'gatherpress' ),
        'menu_name'             => __( 'Releases', 'gatherpress' ),
        'name_admin_bar'        => __( 'Release', 'gatherpress' ),
        'archives'              => __( 'Release Archives', 'gatherpress' ),
        'attributes'            => __( 'Release Attributes', 'gatherpress' ),
        'all_items'             => __( 'All Releases', 'gatherpress' ),
        'add_new_item'          => __( 'Add New Release', 'gatherpress' ),
        'add_new'               => __( 'Add New', 'gatherpress' ),
        'new_item'              => __( 'New Release', 'gatherpress' ),
        'edit_item'             => __( 'Edit Release', 'gatherpress' ),
        'update_item'           => __( 'Update Release', 'gatherpress' ),
        'view_item'             => __( 'View Release', 'gatherpress' ),
        'view_items'            => __( 'View Releases', 'gatherpress' ),
        'search_items'          => __( 'Search Releases', 'gatherpress' ),
        'not_found'             => __( 'Not found', 'gatherpress' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'gatherpress' ),
    );

    $args = array(
        'label'                 => __( 'Releases', 'gatherpress' ),
        'description'           => __( 'Custom post type for Releases', 'gatherpress' ),
        'labels'                => $labels,
        'menu_icon'             => 'dashicons-vault',
        'supports'              => array(
            'title',
            'editor',
            'excerpt',
            'thumbnail',
            'revisions',
            'author',
            'comments',
            'custom-fields'
        ),
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'hierarchical'          => false,
        'exclude_from_search'   => false,
        'show_in_rest'          => true, // Gutenberg + REST API
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
    );

    register_post_type( 'releases', $args );
}
add_action( 'init', 'create_releases_cpt' );


// Register "Release Categories" Taxonomy

function create_release_category_taxonomy() {

    $labels = array(
        'name'              => _x( 'Release Categories', 'taxonomy general name', 'gatherpress' ),
        'singular_name'     => _x( 'Release Category', 'taxonomy singular name', 'gatherpress' ),
        'search_items'      => __( 'Search Release Categories', 'gatherpress' ),
        'all_items'         => __( 'All Release Categories', 'gatherpress' ),
        'parent_item'       => __( 'Parent Release Category', 'gatherpress' ),
        'parent_item_colon' => __( 'Parent Release Category:', 'gatherpress' ),
        'edit_item'         => __( 'Edit Release Category', 'gatherpress' ),
        'update_item'       => __( 'Update Release Category', 'gatherpress' ),
        'add_new_item'      => __( 'Add New Release Category', 'gatherpress' ),
        'new_item_name'     => __( 'New Release Category Name', 'gatherpress' ),
        'menu_name'         => __( 'Release Categories', 'gatherpress' ),
    );

    $args = array(
        'hierarchical'      => true, // works like categories
        'labels'            => $labels,
        'show_ui'           => true,
        'show_in_menu'      => true, // 👈 ensures it shows in admin menu
        'show_admin_column' => true,
        'query_var'         => true,
        'show_in_rest'      => true, // Gutenberg support
        'rewrite'           => array( 'slug' => 'release-category' ),
    );

    register_taxonomy( 'release_category', array( 'releases' ), $args );
}
add_action( 'init', 'create_release_category_taxonomy' );



// Allow Query Loop block to include both 'post' and 'releases' CPT when filtering by category
// Force Query Loop block to always include both 'post' and 'releases' post types