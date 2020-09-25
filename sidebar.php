<?php

    $has_sidebar_1 = is_active_sidebar( 'sidebar-1' );
    $has_sidebar_2 = is_active_sidebar( 'sidebar-2' );

?>

<?php if ( $has_sidebar_1 || $has_sidebar_2 ) { ?>

<div class="container">
    <div class="row">
        <div class="col-md">
        <?php if ( $has_sidebar_1 ) { ?>
            <div id="sidebar-1" class="sidebar">
                <?php do_action( 'before_sidebar' ); ?>
                <?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) { ?>
                    <aside id="search" class="widget widget_search">
                    <?php get_search_form(); ?>
                    </aside>
                    <aside id="archives" class"widget">
                        <h3 class="widget-title"><?php _e( 'Archives', 'shape' ); ?></h3>
                        <ul>
                            <?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
                        </ul>
                    </aside>
                    <aside id="meta" class="widget">
                        <h3 class="widget-title"><?php _e( 'Meta', 'shape' ); ?></h3>
                        <ul>
                            <?php wp_register(); ?>
                            <li><?php wp_loginout(); ?></li>
                            <?php wp_meta(); ?>
                        </ul>
                    </aside>
                <?php } ?>
            </div>
            <?php } ?>
        </div>

        <div class="col-md">
        <?php if ( $has_sidebar_2 ) { ?>
            <div id="sidebar-2" class="sidebar">
                <?php do_action( 'before_sidebar' ); ?>
                <?php if ( ! dynamic_sidebar( 'sidebar-2' ) ) { ?>
                    <aside id="search" class="widget widget_search">
                    <?php get_search_form(); ?>
                    </aside>
                    <aside id="archives" class"widget">
                        <h3 class="widget-title"><?php _e( 'Archives', 'shape' ); ?></h3>
                        <ul>
                            <?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
                        </ul>
                    </aside>
                    <aside id="meta" class="widget">
                        <h3 class="widget-title"><?php _e( 'Meta', 'shape' ); ?></h3>
                        <ul>
                            <?php wp_register(); ?>
                            <li><?php wp_loginout(); ?></li>
                            <?php wp_meta(); ?>
                        </ul>
                    </aside>
                <?php } ?>
            </div>

            <?php } ?>
        </div>
    </div>
</div>




<?php } ?>