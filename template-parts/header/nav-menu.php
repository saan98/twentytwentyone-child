<div class="container-fluid px-0">
    <!--NAV-MENU-START-->
    <nav class="navbar navbar-expand-lg nav-light">
        <div class="collapse navbar-collapse nav-menu-div" id="navbarSupportedContent">
            <div class="container px-0 pb-3">
                <?php
            // Display the primary menu
            wp_nav_menu(array(
                'theme_location' => 'primary-menu',
                'container' => 'ul',
                'menu_class' => 'navbar-nav nav-menu-items ps-lg-5 text-center',
                'add_li_class'  => 'nav-link link-dark',
            ));
            ?>
            </div>
        </div>
    </nav>
    <!--NAV-MENU-END-->

    </nav>
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
</div>