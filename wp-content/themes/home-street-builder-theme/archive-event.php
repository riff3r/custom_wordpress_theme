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
                    the_post(); ?>
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
                                        2023-08-22
                                    </div>
                                    <div class="card_icon_img_cont">
                                        <img src="https://unimassbd.com/asset/images/icons/Location.svg" alt="">
                                        BGB Banquet Hall , Shimanto sombhar 4th Floor, Road#2, Dhaka 1205
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>


                <?php }
                echo paginate_links();
                ?>

                <div class="all_p_card col-sm-12 col-lg-6 _evnt" id="">
                    <a href="https://unimassbd.com/events/view/23" class="">
                        <div class="card all_proj_card">
                            <div class="proj_img_container">
                                <img src="https://unimassbd.com/uploads/images/events/1692848413_3621_viber_image_2023-08-23_20-04-28-905.jpg"
                                     class="card-img-top card_img all_p_iamge" alt="...">
                            </div>
                            <div class="card-body all_p_crd_bdy">
                                <h5 class="card-title f_p_card_title">
                                    Castle La Paz &amp; La B
                                </h5>

                                <div class="card_icon_img_cont">
                                    <img src="https://unimassbd.com/asset/images/icons/calender.svg" alt="">
                                    2023-08-22
                                </div>
                                <div class="card_icon_img_cont">
                                    <img src="https://unimassbd.com/asset/images/icons/Location.svg" alt="">
                                    BGB Banquet Hall , Shimanto sombhar 4th Floor, Road#2, Dhaka 1205
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="all_p_card col-sm-12 col-lg-6 tour_evnt" id="" style="display: block;">
                    <a href="https://unimassbd.com/events/view/21" class="">
                        <div class="card all_proj_card">
                            <div class="proj_img_container">
                                <img src="https://unimassbd.com/uploads/images/events/1690007797_418_6.jpg"
                                     class="card-img-top card_img all_p_iamge" alt="...">
                            </div>
                            <div class="card-body all_p_crd_bdy">
                                <h5 class="card-title f_p_card_title">
                                    Management training
                                </h5>

                                <div class="card_icon_img_cont">
                                    <img src="https://unimassbd.com/asset/images/icons/calender.svg" alt="">
                                    2023-05-12
                                </div>
                                <div class="card_icon_img_cont">
                                    <img src="https://unimassbd.com/asset/images/icons/Location.svg" alt="">
                                    Unimass Holdings limited, Coporate Office
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="all_p_card col-sm-12 col-lg-6 tour_evnt" id="" style="display: block;">
                    <a href="https://unimassbd.com/events/view/21" class="">
                        <div class="card all_proj_card">
                            <div class="proj_img_container">
                                <img src="https://unimassbd.com/uploads/images/events/1690007797_418_6.jpg"
                                     class="card-img-top card_img all_p_iamge" alt="...">
                            </div>
                            <div class="card-body all_p_crd_bdy">
                                <h5 class="card-title f_p_card_title">
                                    Management training
                                </h5>

                                <div class="card_icon_img_cont">
                                    <img src="https://unimassbd.com/asset/images/icons/calender.svg" alt="">
                                    2023-05-12
                                </div>
                                <div class="card_icon_img_cont">
                                    <img src="https://unimassbd.com/asset/images/icons/Location.svg" alt="">
                                    Unimass Holdings limited, Coporate Office
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
                <?php echo do_shortcode('[list_categories]'); ?>
        </div>
        </div>
    </div>

<?php get_footer(); ?>