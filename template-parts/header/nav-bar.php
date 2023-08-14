<!--NAV-BAR-START-->
<nav class="navbar navbar-expand-lg navbar-light nav-bar">
    <div class="container gap-4">
        <a href="#" class="navbar-brand me-0">
            <?php 
                        the_custom_logo();
                    ?>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="input-group">
            <input class="form-control border-end-0 border" placeholder="Search" type="search"
                id="example-search-input">
            <span>
                <button class="btn btn-outline-secondary bg-white border-start-0 border" type="button">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/search_icon.png"
                        alt="search" />
                </button>
            </span>
        </div>
        <div class="collapse navbar-collapse gap-4 text-center" id="navbarSupportedContent">
            <div class="container d-lg-flex">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/flag_icon.png" alt="Cannada" />
            </div>
            <div class="container d-lg-flex gap-2">
                0&nbsp;Items<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/cart_icon.png"
                    alt="Cart" />
            </div>
            <div class="container d-lg-flex gap-2">
                Account<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/account_icon.png"
                    alt="Account" />
            </div>
            <div class="container d-lg-flex gap-2">
                Wishlist<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images//wishlist_icon.png"
                    alt="Wishlist" />
            </div>
            <div class="container d-lg-flex gap-4">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images//sm1.png" alt="twitter" />
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images//sm2.png" alt="facebook" />
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images//sm3.png" alt="instagram" />
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images//sm4.png" alt="youtube" />
            </div>
        </div>
    </div>
</nav>
<!--NAV-BAR-END-->