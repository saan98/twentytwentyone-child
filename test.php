<?php

/*
template name: test Templage

*/
get_header();
?>

<h2><?php echo esc_html( get_field('test_title') ); ?></h2>

<?php get_footer(); ?>