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
                <h1 class="fs-1 fw-bold">
                    <?php the_title(); ?>
                </h1>

                <div class="d-flex align-items-center gap-2">
                    <img src="https://unimassbd.com/asset/images/icons/calender.svg" alt="">
                    <p class="m-0"><?php echo $eventDate->format('Y-m-d') ?></p>
                </div>
                <div class="d-flex align-items-center gap-2">
                    <img src="https://unimassbd.com/asset/images/icons/Location.svg" alt="">
                    <p class="m-0"><?php echo $eventAddress ?></p>
                </div>

                <hr class="w-25 mt-3"/>

                <?php the_post_thumbnail(); ?>

                <?php the_content(); ?>

            </div>

            <div class="col-lg-4">
                <?php echo do_shortcode('[list_categories]'); ?>
            </div>
        </div>
    </div>

<?php get_footer(); ?>