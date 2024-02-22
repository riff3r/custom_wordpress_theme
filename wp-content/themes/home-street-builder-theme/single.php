<?php

get_header();

while (have_posts()){
    the_post(); ?>
    <div class="page-cover-photo" style="background-image: url(<?php echo get_theme_file_uri('/images/ocean.jpg') ?>);">
        <div class="overlay_shadow"></div>
        <h1 class="page-title ">
            <?php the_title() ?>
        </h1>
    </div>


    <?php the_content(); ?>

    <?php
}

get_footer();

?>