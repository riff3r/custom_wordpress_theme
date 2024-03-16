<?php

get_header(); ?>

    <div class="page-cover-photo" style="background-image: url(<?php echo get_theme_file_uri('/images/ocean.jpg') ?>);">
        <div class="overlay_shadow"></div>
        <h1 class="page-title ">
            Our Projects
        </h1>
    </div>

    <div class="container">


        <div class="row">
            <div class="row my-5 ">
                <div class="col-lg-5">
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="col-lg-5">
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>

                <div class="col-lg-2">
                    <button  type="button" class="btn btn-primary">Search Property</button>
                </div>

            </div>

            <ul class="nav nav-underline justify-content-center gap-5">
                <li class="nav-item">
                    <a class="nav-link px-4 active" aria-current="page" href="#">All</a>
                </li>

                <?php
                $term = get_terms()
                ?>
                <li class="nav-item">
                    <a class="nav-link px-4" href="#">Ongoing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-4" href="#">Upcoming</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-4" href="#">Handover</a>
                </li>
            </ul>

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
                                <img src="https://unimassbd.com/asset/images/icons/measurement.svg" alt="">
                            </div>
                            <div class="card_icon_img_cont">
                                <img src="https://unimassbd.com/asset/images/icons/Location.svg" alt="">
                            </div>
                        </div>
                    </div>
                </a>
            </div>

        </div>
    </div>

<?php get_footer(); ?>