<section class="bob-section bg-light">
    <div class="container my-4 py-5 mb-1">
        <div class="row pb-5">
            <div class="col-lg-2 bob-title">
                The Best of the Best &rarr;
            </div>
            <div class="col-lg-10">
                <div id="owl-carousel-1" class="owl-carousel owl-theme">
                    <?php
                    $args = array(
                        'post_type' => 'product', 
                        'posts_per_page' => -1,
                        'category_name' => 'best-of-best',
                    );

                    $query = new WP_Query($args);

                    if ($query->have_posts()) :
                        while ($query->have_posts()) :
                            $query->the_post();
                    ?>
                    <div class="item card product-card border-light align-items-center mb-4">
                        <?php the_post_thumbnail('medium', array('class' => 'card-img-top product-card-img', 'alt' => get_the_title())); ?>
                        <div class="card-body product-card-body">
                            <p class="card-text product-card-text">
                                <?php echo get_the_excerpt(); ?>
                            </p>
                            <h6 class="card-title product-card-title text-muted text-uppercase">
                                <?php echo get_the_title(); ?></h6>
                            <span
                                class="product-card-price fs-5"><?php echo '$' . get_post_meta(get_the_ID(), 'product_price', true) . ' USD'; ?></span>
                            <div class="d-grid">
                                <a href="<?php the_permalink(); ?>"
                                    class="btn btn-link btn-light product-card-btn link-dark text-decoration-none">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/add-to-cart.png"
                                        alt="add-to-cart-icon"> Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    <?php
                        endwhile;
                        wp_reset_postdata();
                    else :
                        echo 'No products found.';
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>