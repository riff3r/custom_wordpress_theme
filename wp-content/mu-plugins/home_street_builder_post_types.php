<?php
// Custom Post Type
function home_street_builders_types() {
    register_post_type('project', array(
        'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
        'rewrite' => array('slug' => 'projects'),
        'has_archive' => true,
        'public' => true,
        'show_in_rest' => true,
        'taxonomies' => array('project_category'),
        'labels' => array(
            'name' => 'Projects',
            'add_new' => 'Add New Project',
            'add_new_item' => 'Add New Project',
            'edit_item' => 'Edit Project',
            'all_items' => 'All Projects',
            'singular_name' => 'Project'
        ),
        'menu_icon' => 'dashicons-building'
    ));

    register_post_type('event', array(
        'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
        'rewrite' => array('slug' => 'events'),
        'has_archive' => true,
        'public' => true,
        'show_in_rest' => true,
        'taxonomies' => array( 'event_category'),
        'labels' => array(
            'name' => 'Events',
            'add_new' => 'Add New Event',
            'add_new_item' => 'Add New Event',
            'edit_item' => 'Edit Event',
            'all_items' => 'All Events',
            'singular_name' => 'Event'
        ),
        'menu_icon' => 'dashicons-calendar'
    ));
}

add_action('init', 'home_street_builders_types');

function custom_taxonomy() {
    $projectArgs = array(
        'hierarchical' => true, // Enable hierarchical structure
        'labels' => array(
            'name' => 'Project Categories',
            'singular_name' => 'Project Category',
        ),

        'public' => true, // Set to false to hide from public view
        'show_ui' => true, // Set to false to hide from admin menu
        'show_admin_column' => true,
        'show_in_rest' => true,

//         ... other labels (optional)
        'rewrite' => array(
            'slug' => 'projects',    // This controls the base slug that will display before each term
            'with_front' => false  // Don't display the category base before
        )
    );

    register_taxonomy( 'project_category', array( 'project' ), $projectArgs );

    $eventArgs = array(
        'hierarchical' => true, // Enable hierarchical structure
        'labels' => array(
            'name' => 'Event Categories',
            'singular_name' => 'Event Category',
            // ... other labels (optional)
        ),
        'public' => true, // Set to false to hide from public view
        'show_ui' => true, // Set to false to hide from admin menu
        'show_admin_column' => true,
        'show_in_rest' => true,
        'rewrite' => array(
            'slug' => 'events',    // This controls the base slug that will display before each term
            'with_front' => false  // Don't display the category base before
        )

    );

    register_taxonomy( 'event_category', array( 'event' ), $eventArgs );


}

add_action( 'init', 'custom_taxonomy' );
