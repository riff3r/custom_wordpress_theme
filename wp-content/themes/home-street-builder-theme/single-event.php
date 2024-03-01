<?php get_header(); ?>

<?php
$eventDate = new DateTime(get_field('event_date'));
$eventAddress = get_field('event_address');
$pageBannerImage = get_field('page_banner_background_image')['url'];
pageBanner(array('title' => 'Our Events', 'photo' => $pageBannerImage))
?>

    <div class="container mt-5">

        <div class="row">
            <div class="col-lg-8">
                <div class="mb-5">
                    <img width="100%" height="347" src="<?php the_post_thumbnail_url(); ?>" alt="" class="rounded-4">
                </div>

                <h1 class="fs-1 fw-bold mb-3">
                    <?php the_title(); ?>
                </h1>

                <div class="d-flex align-items-center gap-2 mb-2">
                    <img src="https://unimassbd.com/asset/images/icons/calender.svg" alt="">
                    <p class="m-0"><?php echo $eventDate->format('Y-m-d') ?></p>
                </div>
                <div class="d-flex align-items-center gap-2">
                    <img src="https://unimassbd.com/asset/images/icons/Location.svg" alt="">
                    <p class="m-0"><?php echo $eventAddress ?></p>
                </div>

                <hr class="w-25 mt-3 mb-4"/>


                <?php the_content(); ?>

            </div>

            <div class="col-lg-4">
                <!--                --><?php //echo do_shortcode('[list_categories]'); ?>

                <div class="border rounded p-3">
                    <h3 class="fs-4 fw-bold">Recent Post</h3>
                    <hr/>

                    <?php

                    $args = array('post_type' => 'event', 'post_status' => 'publish', 'posts_per_page' => 5, 'order' => 'ASC',);
                    $eventPosts = new WP_Query($args);

                    while ($eventPosts->have_posts()) {
                        $eventPosts->the_post();

                        $eventDate = new DateTime(get_field('event_date'));
                        $bannerPhoto = get_field('page_banner_background_image');
                        $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'thumbnail');
                        ?>
                        <div class="event-summary mb-4">
                            <a class="text-decoration-none"
                               href="<?php the_permalink(); ?>">

                                <div class="d-flex gap-4">
                                    <div>
                                        <img width="50" height="50" src="<?php echo $bannerPhoto['url'] ?>" alt=""
                                             class="rounded-4">
                                    </div>
                                    <div>
                                        <p class="m-0 text-black"><?php the_title(); ?></p>

                                        <span class="text-black"><?php echo $eventDate->format('d-m-Y') ?></span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php }
                    wp_reset_postdata();
                    ?>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>