<?php // Creating a members Custom Post Type
function crunchify_members_custom_post_type() {
    $labels = array(
        'name'                => __( 'members' ),
        'singular_name'       => __( 'members'),
        'menu_name'           => __( 'members'),
        'parent_item_colon'   => __( 'Parent members'),
        'all_items'           => __( 'All members'),
        'view_item'           => __( 'View members'),
        'add_new_item'        => __( 'Add New members'),
        'add_new'             => __( 'Add New'),
        'edit_item'           => __( 'Edit members'),
        'update_item'         => __( 'Update members'),
        'search_items'        => __( 'Search members'),
        'not_found'           => __( 'Not Found'),
        'not_found_in_trash'  => __( 'Not found in Trash')
    );
    $args = array(
        'label'               => __( 'members'),
        'description'         => __( 'Best Crunchify members'),
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields'),
        'public'              => true,
        'hierarchical'        => false,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'has_archive'         => true,
        'can_export'          => true,
        'exclude_from_search' => false,
            'yarpp_support'       => true,
        'taxonomies'          => array('post_tag'),
        'publicly_queryable'  => true,
        'capability_type'     => 'page'
);
    register_post_type( 'members', $args );
}
add_action( 'init', 'crunchify_members_custom_post_type', 0 );


// Let us create Taxonomy for Custom Post Type
add_action( 'init', 'crunchify_create_members_custom_taxonomy', 0 );
 
//create a custom taxonomy name it "type" for your posts
function crunchify_create_members_custom_taxonomy() {
 
  $labels = array(
    'name' => _x( 'Types', 'taxonomy general name' ),
    'singular_name' => _x( 'Type', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Types' ),
    'all_items' => __( 'All Types' ),
    'parent_item' => __( 'Parent Type' ),
    'parent_item_colon' => __( 'Parent Type:' ),
    'edit_item' => __( 'Edit Type' ), 
    'update_item' => __( 'Update Type' ),
    'add_new_item' => __( 'Add New Type' ),
    'new_item_name' => __( 'New Type Name' ),
    'menu_name' => __( 'Types' ),
  );    
 
  register_taxonomy('types',array('members'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'type' ),
  ));
}