<form class="input-group" method="get" role="search" action="<?php echo esc_url(home_url('/')) ?>">
    <input class="form-control border-end-0 border" placeholder="Search" type="search" id="example-search-input" />
    <span>
        <button class="btn btn-outline-secondary bg-white border-start-0 border" type="submit">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/search_icon.png" alt="search" />
        </button>
    </span>
</form>