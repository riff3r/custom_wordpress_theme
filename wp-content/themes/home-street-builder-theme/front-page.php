<?php get_header(); ?>
    <!--    Slider    -->
    <div class="CSSgal">
        <!-- Don't wrap targets in parent -->
        <s id="s1"></s>
        <s id="s2"></s>
        <s id="s3"></s>
        <s id="s4"></s>

        <div class="slider">
            <div class="slider-item">
                <div class="slider-text">
                    <div class="slider-title">Ayesha Nurul Lake Serenity</div>
                    <div class="slider-subtitle">Gulshan Lake drive road</div>
                </div>
                <img
                        class="slid-image"
                        src="https://unimassbd.com/uploads/images/project/1687769671_1387_web cover.jpg"
                        alt=""
                />
            </div>
            <div class="slider-item">
                <div class="slider-text">
                    <div class="slider-title">South Serenade</div>
                    <div class="slider-subtitle">Bashundhara, block-J</div>
                </div>
                <img
                        class="slid-image"
                        src="https://unimassbd.com/uploads/images/project/1687770591_4654_web cover-01-01.jpg"
                        alt=""
                />
            </div>
            <div class="slider-item">
                <div class="slider-text">
                    <div class="slider-title">Siraj Dreamsville</div>
                    <div class="slider-subtitle">Sher E Bangla Road</div>
                </div>
                <img
                        class="slid-image"
                        src="https://unimassbd.com/uploads/images/project/1687770642_3023_Web cover-01.jpg"
                        alt=""
                />
            </div>
            <div class="slider-item">
                <div class="slider-text">
                    <div class="slider-title">Casa Lucido Di Bashar</div>
                    <div class="slider-subtitle">Pallabi R/A</div>
                </div>
                <img
                        class="slid-image"
                        src="https://unimassbd.com/uploads/images/project/1687771082_6992_web banner-01-01.jpg"
                        alt=""
                />
            </div>
        </div>

        <div class="bullets-container">
            <div class="bullets bullets-custom">
                <a class="bullet_anchor" href="#s1">01</a>
                <a class="bullet_anchor" href="#s2">02</a>
                <a class="bullet_anchor" href="#s3">03</a>
                <a class="bullet_anchor" href="#s4">04</a>
            </div>
        </div>
    </div>

    <div class="container">

        <!-- About Section -->
        <div class="row">
            <div class="about_home_container">
                <div class="h_title mb-md-5 mb-sm-4 mb-4 text-center">
                    <div class="_title">Welcome to Home Street Builders Limited</div>
                    <div class="_title_line"></div>
                </div>

                <div class="row overflow-hidden hm_abt_sec_dt">
                    <div class="col-12 col-lg-6 col-md-12 col-sm-12 ">
                        <div class="combo_image_container _mr-5">
                            <img src="https://unimassbd.com/asset/images/image 27.png" alt=""
                                 class="img-fluid home_abt_image">


                        </div>
                    </div>
                    <div class="col-12 col-lg-6 col-md-12 col-sm-12 home_about_sec_cont_lg">

                        <div class="ml-5">
                            <div class="paragraph_description about_desc mb-5" id="about_desc">
                                <div class="abt_lg">
                                    <p>
                                        Since its inception in 2010, Unimass Holdings Ltd. creates greater value of
                                        living
                                        for its Clients,
                                        Landowners and Stakeholders. Unimass Holdings Ltd. has made it a success story
                                        by
                                        establishing long term mutually
                                        beneficial relationship with its valued Clients, Prospects, Landowners, Patrons
                                        and
                                        Business Associates through quality,
                                        commitment and professionalism. With a team of experienced Management Members,
                                        Engineers and Consultants,
                                        Unimass Holdings Ltd. always gives top priority to the structural aspect of
                                        building
                                        construction,
                                        which ought to be the primary concern because a fanciful façade ca...
                                    </p>
                                </div>
                            </div>


                            <a type="button" class="abt_btn_cont" href="https://unimassbd.com/about">
                                <button type="button" class="btn btn-primary home_abt_btn"
                                        style="--bs-btn-padding-y: .75rem; --bs-btn-padding-x: 1.8rem; --bs-btn-font-size: 1rem;">
                                    Know more
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Featured Project       -->

        <?php
        // Check if there are any featured projects
        $featured_projects_args = array('post_type' => 'project', // Assuming "project" is your custom post type name
            'meta_key' => 'is_featured', 'meta_value' => true, // Only get projects where is_featured is true
            'posts_per_page' => -1, // Get all featured projects
        );

        $featured_projects_query = new WP_Query($featured_projects_args);


        if ($featured_projects_query->have_posts()) : ?>
            <div class="row">
                <div class="featured_home_container">
                    <div class="h_title mb-md-5 mb-sm-4 mb-4 text-center">
                        <div class="_title">Our Featured Projects</div>
                        <div class="_title_line"></div>
                    </div>
                </div>

                <div>
                    <?php while ($featured_projects_query->have_posts()) : $featured_projects_query->the_post(); ?>

                    <div class="pt-0 position-relative card_width">
                        <?php
                        // Get featured image
                        $featured_image_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
                        if ($featured_image_url) :
                            ?>
                            <img class="image__hover img-fluid" height="384" src="<?php echo $featured_image_url; ?>" alt="<?php the_title(); ?>">
                        <?php endif; ?>


                        <div class="blur_text">
                            <h3 class="text-center"><?php the_title(); ?></h3>
                            <hr/>
                            <div class="d-flex gap-2 blur_text_div">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                     class="bi bi-check2" viewBox="0 0 16 16">
                                    <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0"/>
                                </svg>

                                <p class="text-white mb-1">Land Area: This is a features This is a features </p>
                            </div>
                            <div class="d-flex gap-1 blur_text_div">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                     class="bi bi-check2" viewBox="0 0 16 16">
                                    <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0"/>
                                </svg>
                                <p class="text-white mb-1">Facing: This is a features</p>
                            </div>
                            <div class="d-flex gap-1 blur_text_div">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                     class="bi bi-check2" viewBox="0 0 16 16">
                                    <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0"/>
                                </svg>
                                <p class="text-white mb-1">Storied: This is a features</p>
                            </div>
                            <div class="d-flex gap-1 blur_text_div">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                     class="bi bi-check2" viewBox="0 0 16 16">
                                    <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0"/>
                                </svg>
                                <p class="text-white mb-1">Number of Apartments: This is a features</p>
                            </div>
                            <div class="d-flex gap-1 blur_text_div">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                     class="bi bi-check2" viewBox="0 0 16 16">
                                    <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0"/>
                                </svg>
                                <p class="text-white mb-1">Size of unit: This is a features</p>
                            </div>
                        </div>

                        <div class="p-3 cursor-pointer">
                            <p class="card_title">Lorem Ipsum</p>
                            <div class="d-flex gap-2 align-item-center card_subtitle_height">
                                <img height="20" width="20" src="https://unimassbd.com/asset/images/icons/Location.svg"
                                     alt="">
                                <p class="">lorem ipsum lorem ipsum lorem ipsum</p>
                            </div>
                            <div class="d-flex gap-2 align-item-center card_subtitle_height">
                                <img height="20" width="20"
                                     src="https://unimassbd.com/asset/images/icons/measurement.svg"
                                     alt="">
                                <p>2072 & 1853 Sft. Sq. Ft. </p>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; ?>
                </div>

            </div>
            <?php wp_reset_postdata(); endif; ?>
        <!-- Projects Section   -->

        <div class="row">
            <div class="project_home_container">
                <div class="h_title mb-md-5 mb-sm-4 mb-4 text-center">
                    <div class="_title">Our Projects</div>
                    <div class="_title_line"></div>
                </div>

                <ul class="nav nav-underline justify-content-center gap-5 mb-5">
                    <li class="nav-item">
                        <a class="nav-link px-4 active" aria-current="page" href="#">All</a>
                    </li>
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
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="pt-0 position-relative card_width mb-5">
                            <img
                                    class="image__hover img-fluid"
                                    height="384"
                                    src="https://images.unsplash.com/photo-1706026803368-d84389566a80?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                    alt=""
                            />

                            <div class="blur_text">
                                <h3 class="text-center">Hello City </h3>
                                <hr/>
                                <div class="d-flex gap-2 blur_text_div">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                         class="bi bi-check2" viewBox="0 0 16 16">
                                        <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0"/>
                                    </svg>

                                    <p class="text-white mb-1">Land Area: This is a features This is a features </p>
                                </div>
                                <div class="d-flex gap-1 blur_text_div">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                         class="bi bi-check2" viewBox="0 0 16 16">
                                        <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0"/>
                                    </svg>
                                    <p class="text-white mb-1">Facing: This is a features</p>
                                </div>
                                <div class="d-flex gap-1 blur_text_div">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                         class="bi bi-check2" viewBox="0 0 16 16">
                                        <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0"/>
                                    </svg>
                                    <p class="text-white mb-1">Storied: This is a features</p>
                                </div>
                                <div class="d-flex gap-1 blur_text_div">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                         class="bi bi-check2" viewBox="0 0 16 16">
                                        <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0"/>
                                    </svg>
                                    <p class="text-white mb-1">Number of Apartments: This is a features</p>
                                </div>
                                <div class="d-flex gap-1 blur_text_div">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                         class="bi bi-check2" viewBox="0 0 16 16">
                                        <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0"/>
                                    </svg>
                                    <p class="text-white mb-1">Size of unit: This is a features</p>
                                </div>
                            </div>

                            <div class="p-3 cursor-pointer">
                                <p class="card_title">Lorem Ipsum</p>
                                <div class="d-flex gap-2 align-item-center card_subtitle_height">
                                    <img height="20" width="20"
                                         src="https://unimassbd.com/asset/images/icons/Location.svg"
                                         alt="">
                                    <p class="">lorem ipsum lorem ipsum lorem ipsum</p>
                                </div>
                                <div class="d-flex gap-2 align-item-center card_subtitle_height">
                                    <img height="20" width="20"
                                         src="https://unimassbd.com/asset/images/icons/measurement.svg"
                                         alt="">
                                    <p>2072 & 1853 Sft. Sq. Ft. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="pt-0 position-relative card_width mb-5">
                            <img
                                    class="image__hover img-fluid"
                                    height="384"
                                    src="https://images.unsplash.com/photo-1706026803368-d84389566a80?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                    alt=""
                            />

                            <div class="blur_text">
                                <h3 class="text-center">Hello City </h3>
                                <hr/>
                                <div class="d-flex gap-2 blur_text_div">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                         class="bi bi-check2" viewBox="0 0 16 16">
                                        <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0"/>
                                    </svg>

                                    <p class="text-white mb-1">Land Area: This is a features This is a features </p>
                                </div>
                                <div class="d-flex gap-1 blur_text_div">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                         class="bi bi-check2" viewBox="0 0 16 16">
                                        <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0"/>
                                    </svg>
                                    <p class="text-white mb-1">Facing: This is a features</p>
                                </div>
                                <div class="d-flex gap-1 blur_text_div">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                         class="bi bi-check2" viewBox="0 0 16 16">
                                        <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0"/>
                                    </svg>
                                    <p class="text-white mb-1">Storied: This is a features</p>
                                </div>
                                <div class="d-flex gap-1 blur_text_div">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                         class="bi bi-check2" viewBox="0 0 16 16">
                                        <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0"/>
                                    </svg>
                                    <p class="text-white mb-1">Number of Apartments: This is a features</p>
                                </div>
                                <div class="d-flex gap-1 blur_text_div">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                         class="bi bi-check2" viewBox="0 0 16 16">
                                        <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0"/>
                                    </svg>
                                    <p class="text-white mb-1">Size of unit: This is a features</p>
                                </div>
                            </div>

                            <div class="p-3 cursor-pointer">
                                <p class="card_title">Lorem Ipsum</p>
                                <div class="d-flex gap-2 align-item-center card_subtitle_height">
                                    <img height="20" width="20"
                                         src="https://unimassbd.com/asset/images/icons/Location.svg"
                                         alt="">
                                    <p class="">lorem ipsum lorem ipsum lorem ipsum</p>
                                </div>
                                <div class="d-flex gap-2 align-item-center card_subtitle_height">
                                    <img height="20" width="20"
                                         src="https://unimassbd.com/asset/images/icons/measurement.svg"
                                         alt="">
                                    <p>2072 & 1853 Sft. Sq. Ft. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="pt-0 position-relative card_width mb-5">
                            <img
                                    class="image__hover img-fluid"
                                    height="384"
                                    src="https://images.unsplash.com/photo-1706026803368-d84389566a80?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                    alt=""
                            />

                            <div class="blur_text">
                                <h3 class="text-center">Hello City </h3>
                                <hr/>
                                <div class="d-flex gap-2 blur_text_div">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                         class="bi bi-check2" viewBox="0 0 16 16">
                                        <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0"/>
                                    </svg>

                                    <p class="text-white mb-1">Land Area: This is a features This is a features </p>
                                </div>
                                <div class="d-flex gap-1 blur_text_div">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                         class="bi bi-check2" viewBox="0 0 16 16">
                                        <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0"/>
                                    </svg>
                                    <p class="text-white mb-1">Facing: This is a features</p>
                                </div>
                                <div class="d-flex gap-1 blur_text_div">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                         class="bi bi-check2" viewBox="0 0 16 16">
                                        <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0"/>
                                    </svg>
                                    <p class="text-white mb-1">Storied: This is a features</p>
                                </div>
                                <div class="d-flex gap-1 blur_text_div">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                         class="bi bi-check2" viewBox="0 0 16 16">
                                        <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0"/>
                                    </svg>
                                    <p class="text-white mb-1">Number of Apartments: This is a features</p>
                                </div>
                                <div class="d-flex gap-1 blur_text_div">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                         class="bi bi-check2" viewBox="0 0 16 16">
                                        <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0"/>
                                    </svg>
                                    <p class="text-white mb-1">Size of unit: This is a features</p>
                                </div>
                            </div>

                            <div class="p-3 cursor-pointer">
                                <p class="card_title">Lorem Ipsum</p>
                                <div class="d-flex gap-2 align-item-center card_subtitle_height">
                                    <img height="20" width="20"
                                         src="https://unimassbd.com/asset/images/icons/Location.svg"
                                         alt="">
                                    <p class="">lorem ipsum lorem ipsum lorem ipsum</p>
                                </div>
                                <div class="d-flex gap-2 align-item-center card_subtitle_height">
                                    <img height="20" width="20"
                                         src="https://unimassbd.com/asset/images/icons/measurement.svg"
                                         alt="">
                                    <p>2072 & 1853 Sft. Sq. Ft. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="pt-0 position-relative card_width mb-5">
                            <img
                                    class="image__hover img-fluid"
                                    height="384"
                                    src="https://images.unsplash.com/photo-1706026803368-d84389566a80?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                    alt=""
                            />

                            <div class="blur_text">
                                <h3 class="text-center">Hello City </h3>
                                <hr/>
                                <div class="d-flex gap-2 blur_text_div">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                         class="bi bi-check2" viewBox="0 0 16 16">
                                        <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0"/>
                                    </svg>

                                    <p class="text-white mb-1">Land Area: This is a features This is a features </p>
                                </div>
                                <div class="d-flex gap-1 blur_text_div">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                         class="bi bi-check2" viewBox="0 0 16 16">
                                        <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0"/>
                                    </svg>
                                    <p class="text-white mb-1">Facing: This is a features</p>
                                </div>
                                <div class="d-flex gap-1 blur_text_div">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                         class="bi bi-check2" viewBox="0 0 16 16">
                                        <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0"/>
                                    </svg>
                                    <p class="text-white mb-1">Storied: This is a features</p>
                                </div>
                                <div class="d-flex gap-1 blur_text_div">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                         class="bi bi-check2" viewBox="0 0 16 16">
                                        <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0"/>
                                    </svg>
                                    <p class="text-white mb-1">Number of Apartments: This is a features</p>
                                </div>
                                <div class="d-flex gap-1 blur_text_div">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                         class="bi bi-check2" viewBox="0 0 16 16">
                                        <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0"/>
                                    </svg>
                                    <p class="text-white mb-1">Size of unit: This is a features</p>
                                </div>
                            </div>

                            <div class="p-3 cursor-pointer">
                                <p class="card_title">Lorem Ipsum</p>
                                <div class="d-flex gap-2 align-item-center card_subtitle_height">
                                    <img height="20" width="20"
                                         src="https://unimassbd.com/asset/images/icons/Location.svg"
                                         alt="">
                                    <p class="">lorem ipsum lorem ipsum lorem ipsum</p>
                                </div>
                                <div class="d-flex gap-2 align-item-center card_subtitle_height">
                                    <img height="20" width="20"
                                         src="https://unimassbd.com/asset/images/icons/measurement.svg"
                                         alt="">
                                    <p>2072 & 1853 Sft. Sq. Ft. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-center">
                <a type="button" class="abt_btn_cont" href="https://unimassbd.com/about">
                    <button type="button" class="btn btn-primary cta-btn">
                        View All
                    </button>
                </a>
            </div>
        </div>


        <!--    Accreditations   -->
        <div class="home_accreditations_container">
            <div class="h_title mb-md-5 mb-sm-4 my-4 text-center">
                <div class="_title">Accreditations &amp; Associations</div>
                <div class="_title_line"></div>
            </div>

            <div class="row d-flex flex-column justify-content-center align-items-center accred_container">
                <div class="col-lg-12 d-flex justify-content-center gap-5">
                    <div class="row">
                        <img src="https://unimassbd.com/asset/images/icons/accred1.png" alt=""
                             class="accred_icons accred_icon1">
                    </div>
                    <div class="row ">
                        <img src="https://unimassbd.com/asset/images/icons/accred2.png" alt=""
                             class="accred_icons accred_icon2">
                    </div>
                </div>
            </div>

        </div>

    </div>

<?php get_footer(); ?>