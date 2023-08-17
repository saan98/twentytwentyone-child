<section class="category-section">
    <div class="container">
        <div class="row gap-3">
            <div class="col-12 cat-title">
                WHAT FOLKS CAN'T GET ENOUGH OF
            </div>
            <div class="cat-items text-center">
                <ul class="list-group list-group-flush list-group-horizontal-xxl gap-4">
                    <?php
                    $args = array(
                      'post_type' => 'category_item',
                      'posts_per_page' => -1,
                    );

                    $query = new WP_Query($args);

                    if ($query->have_posts()) :
                      while ($query->have_posts()) :
                        $query->the_post();
                    ?>
                    <li class="list-group-item border-0">
                        <?php the_post_thumbnail(); ?>
                    </li>
                    <?php
                      endwhile;
                      wp_reset_postdata();
                    endif;
                    ?>
                </ul>
            </div>
        </div>
    </div>
</section>