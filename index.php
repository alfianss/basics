<?php

get_header();

wp_nav_menu( array( 'theme_location' => 'header-menu' ) );

get_sidebar();

wp_link_pages(
    array(
        'before' => '<div class="page-links">' . __( 'Pages:', 'basics' ),
        'after'  => '</div>',
    )
);

get_footer();
?>

