
<?php

/**
 * Template Name: Clear The Air Custom Interior
 */

get_header();
?>
<div class="interior-page-content-has-sidebar">
    <main class="">
      <h1><?php echo get_the_title(); ?></h1>
      <a class="reviewLink" href="<?php echo site_url('/service-area/'); ?>">
        <?php echo do_shortcode('[static-nn-widget type="inline"]'); ?>
      </a>
      <?php the_content();?>
    </main>
    <?php echo get_template_part('partials/sidebar'); ?>
</div>
<?php get_footer();