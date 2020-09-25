<?php
get_header();


?>


<?php

get_sidebar();
wp_link_pages(
    array(
        'before' => '<div class="page-links">' . __( 'Pages:', 'basics' ),
        'after'  => '</div>',
    )
);

get_footer();
?>

