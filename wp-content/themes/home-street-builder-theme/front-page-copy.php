<?php get_header(); ?>

    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Upcoming event</h1>

                <?php

                $args = array('post_type' => 'event', 'post_status' => 'publish', 'posts_per_page' => 8, 'order' => 'ASC',);
                $eventPosts = new WP_Query($args);

                while ($eventPosts->have_posts()) {
                    $eventPosts->the_post(); ?>
                    <?php
                    $eventDate = new DateTime(get_field('event_date'));
                    ?>
                    <div class="event-summary">
                        <a class="event-summary__date event-summary__date--beige t-center"
                           href="<?php the_permalink(); ?>">
                            <span class="event-summary__month"><?php echo $eventDate->format('Y-m-d') ?></span>
                            <span class="event-summary__day"><?php the_time('d'); ?></span>
                        </a>
                        <div class="event-summary__content">
                            <h5 class="event-summary__title headline headline--tiny"><a
                                        href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                            <p><?php echo wp_trim_words(get_the_content(), 18); ?> <a href="<?php the_permalink(); ?>"
                                                                                      class="nu gray">Read more</a></p>
                        </div>
                    </div>
                <?php }
                wp_reset_postdata();
                ?>
            </div>
            <div class="col">
                <h1>From Our blog post</h1>

                <?php
                $homepagePosts = new WP_Query(array('posts_per_page' => 2));

                while ($homepagePosts->have_posts()) {
                    $homepagePosts->the_post(); ?>
                    <div class="event-summary">
                        <a class="event-summary__date event-summary__date--beige t-center"
                           href="<?php the_permalink(); ?>">
                            <span class="event-summary__month"><?php the_time('M'); ?></span>
                            <span class="event-summary__day"><?php the_time('d'); ?></span>
                        </a>
                        <div class="event-summary__content">
                            <h5 class="event-summary__title headline headline--tiny"><a
                                        href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                            <p><?php echo wp_trim_words(get_the_content(), 18); ?> <a href="<?php the_permalink(); ?>"
                                                                                      class="nu gray">Read more</a></p>
                        </div>
                    </div>
                <?php }
                wp_reset_postdata();
                ?>

            </div>
        </div>

        <div class="row">
            <div class="h_title mb-md-5 mb-sm-4 mb-4 text-center">
                <div class="_title">Welcome to Unimass Holdings Limited</div>
                <div class="_title_line"></div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>