<?php
get_header();

if (have_posts()): while (have_posts()) : the_post();
the_title();
the_content();
?>


<?php
endwhile; 
endif;

get_sidebar();
wp_link_pages(
    array(
        'before' => '<div class="page-links">' . __( 'Pages:', 'basics' ),
        'after'  => '</div>',
    )
);

get_footer();
?>

