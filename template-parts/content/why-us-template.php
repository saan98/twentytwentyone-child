<!--WHY US SECTION START-->
<section class="why-us-section">
    <div class="container whyus pb-5 pt-3">
        <div class="row">
            <div class="col-12">
                <p class="whyus-title mt-3 mb-5">Why LuxuryWithLove?</p>
            </div>
        </div>
        <div class="row px-2 gx-5">
            <?php
            $args = array(
              'post_type' => 'post', 
              'posts_per_page' => 4, 
              'order' => 'ASC', 
              'category_name' => 'why-us', 
            );

            $query = new WP_Query($args);

            if ($query->have_posts()) :
              while ($query->have_posts()) :
                $query->the_post();
                $title = get_the_title();
                $text = get_the_content();
            ?>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div>
                    <p class="whyus-info-title">
                        <?php echo ($title); ?>
                    </p>
                    <p class="whyus-info-text">
                        <?php echo ($text); ?>
                    </p>
                </div>
            </div>
            <?php
              endwhile;
              wp_reset_postdata(); 
            else :
              echo 'No posts found in this category.';
            endif;
            ?>
        </div>
    </div>
    </div>
</section>
<!--WHY US SECTION END-->