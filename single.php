<?php
get_header();

if(is_singular() && get_post_type() != 'post') {
?>

<div class="container">
  <div class="row">
        <?php 
            $mypost = array( 'post_type' => get_post_type(), 'p' => get_the_ID() );
            $loop = new WP_Query( $mypost );
    
            $html = "<div class='row col-md-12' style='width: 100%; '>";
            while ( $loop->have_posts() ) : $loop->the_post();;
                $html .= "<div class='col-md-3' style='float:left; padding: 0 5px;'>";
                $html .= "<img src='".esc_html( get_post_meta( get_the_ID(), 'tm_images', true ) )."'>";
                $html .= "<span>".esc_html( get_post_meta( get_the_ID(), 'tm_position', true ) )."</span><br>";
                $html .= "<span>".esc_html( get_post_meta( get_the_ID(), 'tm_email', true ) )."</span><br>";
                $html .= "<span>".esc_html( get_post_meta( get_the_ID(), 'tm_phone', true ) )."</span><br>";
                $html .= "<span>".esc_html( get_post_meta( get_the_ID(), 'tm_url', true ) )."</span><br>";
                $html .= "</div>";
            endwhile;
            wp_reset_query();
            $html .= "</div>";
            echo $html;
        ?>
  </div>
</div>

<?php
} else {
  
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