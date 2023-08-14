<section class="article-blog-1-section bg-light">
    <div class="container-fluid blog-div pt-2 pb-4 px-0 mb-0 mx">
        <div class="row gy-2 gx-2">
            <?php
            $args = array(
                'post_type' => 'post', 
                'posts_per_page' => 3, 
                'category_name' => 'article-blog-1',
            );

            $query = new WP_Query($args);

            if ($query->have_posts()) :
                while ($query->have_posts()) :
                    $query->the_post();
            ?>
            <div class="col-lg-4 col-sm-12">
                <div class="card blog-card">
                    <?php the_post_thumbnail('medium', array('class' => 'card-img-top blog-card-image', 'alt' => get_the_title())); ?>
                    <div class="card-body blog-card-body">
                        <h6 class="card-title blog-card-title">
                            <?php the_title(); ?>
                        </h6>
                        <p class="card-text blog-card-text">
                            <?php the_excerpt(); ?>
                        </p>
                        <div class="btn blog-btn">
                            <?php
                                    $read_more_text = get_post_meta(get_the_ID(), 'read_more_text', true);
                                    $read_more_text = $read_more_text ? $read_more_text : 'Read more &nbsp;&rarr;';
                                    ?>
                            <a href="<?php the_permalink(); ?>"
                                class="text-decoration-none link-dark text-uppercase"><?php echo esc_html($read_more_text); ?></a>
                        </div>
                    </div>
                </div>
            </div>
            <?php
                endwhile;
                wp_reset_postdata(); // Reset the post data
            else :
                echo 'No posts found.';
            endif;
            ?>
        </div>
    </div>
</section>