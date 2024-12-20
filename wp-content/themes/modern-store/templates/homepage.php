<?php

/*
** Template Name: Homepage
*/

get_header();
$editor_content = get_theme_mod('homepage_editor_content');
?>
<div id="loop-container" class="loop-container">
    <?php
    if ( have_posts() ) :
        while ( have_posts() ) :
          the_post(); ?>
          <div class="section-container">
            <h1 class="screen-reader-text"><?php echo esc_html( get_bloginfo("name") ); ?></h1>
            <?php
            if ( $editor_content == 'above' ) {
              the_content();
            }
            $homepage_order = ct_modern_store_set_homepage_order();
            asort( $homepage_order );
            foreach ( $homepage_order as $section => $value ) {
              if ( $section == 'modern_store_homepage_categories' || $section == 'modern_store_pro_homepage_custom_categories' ) {
                ct_modern_store_homepage_categories( $section );
              } else {
                ct_modern_store_output_wc_products( $section );
              } 
            }
            if ( $editor_content == 'below' ) {
              the_content();
            }
            ?>
          </div>
        <?php endwhile;
    endif;
    ?>
</div>
<?php get_footer();