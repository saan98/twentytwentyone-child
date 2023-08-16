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