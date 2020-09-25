<?php
get_header();

if(is_singular() && !is_page()) {

    ?>
    <div class="container">
    <div class="row">
        
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <?php echo get_the_title(); ?>
        <?php the_content(); ?>
        <?php echo get_the_date(); ?>

        <?php endwhile; ?>
        <?php endif; ?>

    </div>
  </div>

<?php
}
get_sidebar();
get_footer();
?>