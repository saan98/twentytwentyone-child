 <!--ANNOUNCEMENT BAR START-->
 <section class="ann-bar-section">
     <div class="container ann-bar-container">
         <div class="row ann-bar-div align-items-center">
             <div class="col-lg-4 col-md-12 ann-bar-text text-center ">
                 <img class="m-2" src="<?php echo get_stylesheet_directory_uri(  ); ?>/assets/images/a (1).png"
                     alt="shipping-icon" />Free
                 Canada-wide Shipping on orders over $300
             </div>
             <div class="col-lg-4 col-md-12 ann-bar-text text-center">
                 <img class="m-2" src="<?php echo get_stylesheet_directory_uri(  ); ?>/assets/images/a (2).png"
                     alt="shipping-icon" />Price
                 matching all Canadian retailer
             </div>
             <div class="col-lg-4 col-sm-12 ann-bar-text text-center">
                 <img class="m-2" src="<?php echo get_stylesheet_directory_uri(  ); ?>/assets/images/a (3).png"
                     alt="shipping-icon" /> 4.8
                 stars on GBP - 79 Google reviews
             </div>
         </div>
     </div>
 </section>
 <!--ANNOUNCEMENT BAR END-->
 <!--HERO SECTION START-->
 <section>
     <?php $background_image = get_theme_mod('my_custom_background_image'); ?>
     <div class="bg-image d-flex justify-content-center align-items-center"
         style="background-image: url('<?php echo esc_url($background_image); ?>');">
         <div class="card hero-card ">
             <div class="hero-card-body">
                 <h6 class="hero-card-title"><?php echo get_theme_mod('hero_card_title', 'Limited Live Sale'); ?></h6>
                 <p class="hero-card-text-1" style="font-size: 4.1rem">
                     <?php echo get_theme_mod('hero_card_percentage', 'XX%'); ?></p>
                 <p class="hero-card-text-2">
                     <?php echo get_theme_mod('hero_card_discount_text', 'Discount on curated items'); ?></p>
                 <!-- ... other parts of the card -->
                 <button type="submit" class="btn hero-card-btn btn-primary border-0">
                     Sign Up Now!
                 </button>
             </div>
         </div>
     </div>
 </section>
 <!--HERO SECTION END-->