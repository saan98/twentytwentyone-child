<section class="article-blog-2-section py-5 bg-light">
    <div class="container article-blog-2">
        <div class="row g-5">
            <div class="col-lg-12 text-center">
                <p class="article-blog-2-title mt-3 mb-lg-3">THE LUXURYWITHLOVE BLOG</p>
            </div>
            <?php
            $args = array(
                'post_type' => 'post', 
                'posts_per_page' => 2, 
                'category_name' => 'article-blog-2',
            );

            $query = new WP_Query($args);

            if ($query->have_posts()) :
                while ($query->have_posts()) :
                    $query->the_post();
            ?>
            <div class="col-lg-6 col-md-12">
                <div class="article-blog-2-container border p-0">
                    <div class="card text-center">
                        <?php the_post_thumbnail('medium', array('class' => 'card-img-top', 'alt' => get_the_title())); ?>
                        <div class="card-body py-2 py-5">
                            <h6 class="card-title blog-card-title"><?php the_title(); ?></h6>
                            <p class="card-text blog-card-text"><?php the_excerpt(); ?></p>
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