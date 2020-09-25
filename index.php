<?php
get_header();
get_sidebar();
?>




<?php
wp_link_pages(
    array(
        'before' => '<div class="page-links">' . __( 'Pages:', 'basics' ),
        'after'  => '</div>',
    )
);

get_footer();
?>

