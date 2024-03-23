<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>

    <!--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />-->
    <!--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">-->
    <!--    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>-->

</head>

<body <?php body_class(); ?>>
<!--
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <i class="fa-brands fa-facebook"></i>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <a class="navbar-brand" href="<?php echo site_url(); ?>">Home Street Builders</a>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="<?php echo site_url(); ?>">Home</a>
                </li>

                <li class="nav-item" >
                    <a class="nav-link <?php if (is_page('about-us') or wp_get_post_parent_id(0) == 16) echo 'active' ?>" href="<?php echo site_url('/about-us'); ?>">About Us</a>
                </li>

                <li class="nav-item" >
                    <a class="nav-link <?php if (get_post_type() == 'project') echo 'active' ?>" href="<?php echo get_post_type_archive_link('project'); ?>">Projects</a>
                </li>

                <li class="nav-item" >
                    <a class="nav-link <?php if (get_post_type() == 'event') echo 'active' ?>" href="<?php echo get_post_type_archive_link('event'); ?>">Event & News</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>
-->

<nav class="navbar navbar-expand-lg bg-body-tertiary bg-white">
    <div class="container-fluid px-4 navbar_width d-flex align-item-cente">
        <div class="navbar_logo">
            <a class="navbar-brand " href="<?php echo site_url(); ?>">
<!--                <img-->
<!--                        src="https://unimassbd.com/asset/images/Unimass-Logo-300x204.png"-->
<!--                        width="123"-->
<!--                        height="83"-->
<!--                />                -->

                <img
                        src="http://home-street-builder.local/wp-content/uploads/2024/03/HSBL-1.png"
                        width="123"
                        height="83"
                />
            </a>
        </div>
        <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>
        <div
                class="collapse navbar-collapse flex-grow-0 gap-4"
                id="navbarSupportedContent"
        >

            <ul class="nav nav-pills gap-4 navbar-nav me-auto" id="pills-tab" role="tablist">
                <!--
                 <li class="nav-item" role="presentation">
                     <button
                             class="nav-link text-dark nav_link_font_size active"
                             id="pills-home-tab"
                             data-bs-toggle="pill"
                             data-bs-target="#pills-home"
                             type="button"
                             role="tab"
                             aria-controls="pills-home"
                             aria-selected="true"
                     >
                         Home
                     </button>
                 </li>
                 -->

                <li class="nav-item" role="presentation">
                    <a
                            href="<?php echo site_url(); ?>"
                            class="nav-link text-dark nav_link_font_size <?php if (is_front_page()) echo 'active' ?>"
                            id="pills-home-tab"
                            data-bs-target="#pills-home"
                            type="button"
                            role="tab"
                            aria-controls="pills-home"
                            aria-selected="true"
                    >
                        Home
                    </a>
                </li>


                <li class="nav-item" role="presentation">
                    <a
                        class="nav-link text-dark nav_link_font_size <?php if (is_page('about-us') or wp_get_post_parent_id(0) == 16) echo 'active' ?>"
                        href="<?php echo site_url('/about-us'); ?>"
                        id="pills-profile-tab"
                        data-bs-target="#pills-profile"
                        type="button"
                        role="tab"
                        aria-controls="pills-profile"
                        aria-selected="false"
                    >
                        About Us
                    </a>
                </li>

                <li class="nav-item" role="presentation">
                    <a
                        class="nav-link text-dark nav_link_font_size <?php if (get_post_type() == 'project') echo 'active' ?>"
                        href="<?php echo get_post_type_archive_link('project'); ?>"
                        id="pills-contact-tab"
                        data-bs-target="#pills-contact"
                        type="button"
                        role="tab"
                        aria-controls="pills-contact"
                        aria-selected="false"
                    >
                        Projects
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a
                        class="nav-link text-dark nav_link_font_size <?php if (is_page('query') or wp_get_post_parent_id(0) == 16) echo 'active' ?>"
                        href="<?php echo site_url('/query'); ?>"
                        id="pills-contact-tab"
                        data-bs-target="#pills-contact"
                        type="button"
                        role="tab"
                        aria-controls="pills-contact"
                        aria-selected="false"
                    >
                        Query
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a
                        class="nav-link text-dark nav_link_font_size <?php if (get_post_type() == 'event') echo 'active' ?>"
                        href="<?php echo get_post_type_archive_link('event'); ?>"
                        id="pills-contact-tab"
                        data-bs-target="#pills-contact"
                        type="button"
                        role="tab"
                        aria-controls="pills-contact"
                        aria-selected="false"
                    >
                        News & Events
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a
                        class="nav-link text-dark nav_link_font_size <?php if (is_page('contact') or wp_get_post_parent_id(0) == 16) echo 'active' ?>"
                        href="<?php echo site_url('/contact'); ?>"
                        id="pills-contact-tab"
                        data-bs-target="#pills-contact"
                        type="button"
                        role="tab"
                        aria-controls="pills-contact"
                        aria-selected="false"
                    >
                        Contact
                    </a>
                </li>
                <li>
                    <div class="input-icons position-relative d-flex align-item-center mt-1 search_option">
                        <i class="bi bi-search pr-2 "></i>
                        <img src="https://unimassbd.com/asset/images/icons/search.svg" alt="" class="lg_src_icon">
                        <input class="input-field" type="text" placeholder="Search">
                    </div>

                </li>
            </ul>
        </div>
    </div>
</nav>

