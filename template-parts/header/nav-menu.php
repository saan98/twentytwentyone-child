<div class="container-fluid px-0">
    <!--NAV-MENU-START-->
    <nav class="navbar navbar-expand-lg nav-light">
        <div class="collapse navbar-collapse nav-menu-div" id="navbarSupportedContent">
            <div class="container px-0 pb-3">
                <?php
            // Display the primary menu
            // wp_die(var_dump(get_registered_nav_menus(  )));
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'container' => 'ul',
                'menu_class' => 'navbar-nav nav-menu-items ps-lg-5 text-center',
                'add_li_class'  => 'nav-link link-dark'
            ));
            ?>
            </div>
        </div>
    </nav>
    <!--NAV-MENU-END-->
</div>