<?php

add_action('rest_api_init', 'homeBuilderRegisterProjects');

function homeBuilderRegisterProjects() {
  register_rest_route('home-builder/v1', 'projects', array(
    'methods' => WP_REST_SERVER::READABLE,
    'callback' => 'homeBuilderProjectResults'
  ));
}

function homeBuilderProjectResults($data) {
  $professors = new WP_Query(array(
    'post_type' => 'project',
    's' => sanitize_text_field($data['term'])
  ));

  $professorResults = array();

  while($professors->have_posts()) {
    $professors->the_post();
    array_push($professorResults, array(
      'title' => get_the_title(),
      'permalink' => get_the_permalink()
    ));
  }

  return $professorResults;

}