<?php

get_header(); ?>

    <div class="page-cover-photo" style="background-image: url(<?php echo get_theme_file_uri('/images/ocean.jpg') ?>);">
        <div class="overlay_shadow"></div>
        <h1 class="page-title ">
            Our Events
        </h1>
    </div>

    <div class="container">

        <div class="row">
        <div class="col-lg-8">
            <div class="row d-flex justify-content-around">

                <?php
                while (have_posts()) {
                    the_post();
                    $eventDate = new DateTime(get_field('event_date'));
                    $eventAddress = get_field('event_address');
                    ?>
                    <div class="all_p_card col-sm-12 col-lg-6 tour_event" id="">
                        <a href="<?php the_permalink(); ?>" class="">
                            <div class="card all_proj_card">
                                <div class="proj_img_container">
                                    <img src="https://unimassbd.com/uploads/images/events/1692848413_3621_viber_image_2023-08-23_20-04-28-905.jpg"
                                         class="card-img-top card_img all_p_iamge" alt="...">
                                </div>
                                <div class="card-body all_p_crd_bdy">
                                    <h5 class="card-title f_p_card_title">
                                        <?php the_title(); ?>
                                    </h5>

                                    <div class="card_icon_img_cont">
                                        <img src="https://unimassbd.com/asset/images/icons/calender.svg" alt="">
                                        <?php echo $eventDate->format('Y-m-d') ?>
                                    </div>
                                    <div class="card_icon_img_cont">
                                        <img src="https://unimassbd.com/asset/images/icons/Location.svg" alt="">
                                        <?php echo $eventAddress ?>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>


                <?php }
                echo paginate_links();
                ?>

            </div>
        </div>

        <div class="col-lg-4">
                <?php echo do_shortcode('[list_categories]'); ?>
        </div>
        </div>
    </div>

<?php get_footer(); ?>