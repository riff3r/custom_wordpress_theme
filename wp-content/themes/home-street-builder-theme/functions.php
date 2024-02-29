<?php

require get_theme_file_path('/inc/project-route.php');
function pageBanner($args = NULL)
{
    if (!$args['title']) {
        $args['title'] = get_the_title();
    }

    if (!$args['photo']) {
        if (get_field('page_banner_background_image') AND !is_archive() AND !is_home() ) {
            $args['photo'] = get_field('page_banner_background_image');
        } else {
            $args['photo'] = get_theme_file_uri('/images/ocean.jpg');
        }
    }

    ?>
    <div class="page-cover-photo"
         style="background-image: url(<?php echo $args['photo'] ?>)">
        <div class="overlay_shadow"></div>
        <h1 class="page-title ">
            <?php echo $args['title'] ?>
        </h1>
    </div>
<?php
}

// Import Theme CSS & JS file
function home_street_builders_files() {
    wp_enqueue_script( 'bootstrap_js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', null, '5.3.3', true  );
    wp_enqueue_script('main-js', get_theme_file_uri('/build/index.js'), array('jquery'), '1.0', true);

    wp_enqueue_style( 'roboto-font', 'https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;1,100;1,400&display=swap' );
    wp_enqueue_style( 'fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css' );
    wp_enqueue_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css' );
    wp_enqueue_style('home_builder_main_styles', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'home_street_builders_files');

// Theme support
function home_street_builders_theme_features() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'home_street_builders_theme_features');

// Category List
function list_categories_shortcode() {
    $categories = get_categories();

    $output = '<div class="category_container">';
    foreach ($categories as $category) {
        $output .= '<div><a href="' . esc_url(get_category_link($category->term_id)) . '">' . $category->name .  $category->count .' </a></div>';
    }
    $output .= '</div>';

    return $output;
}
add_shortcode('list_categories', 'list_categories_shortcode');

//
function home_street_builder_adjust_queries($query) {
    if (!is_admin() AND is_post_type_archive('event') AND $query->is_main_query()) {
//        $today = date('Ymd');
        $query->set('meta_key', 'event_date');
        $query->set('orderby', 'meta_value_num');
        $query->set('posts_per_page', 10);
//        $query->set('order', 'ASC');
//        $query->set('meta_query', array(
//            array(
//                'key' => 'event_date',
//                'compare' => '>=',
//                'value' => $today,
//                'type' => 'numeric'
//            )
//        ));
    }
}

add_action('pre_get_posts', 'home_street_builder_adjust_queries');