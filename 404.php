<?php
/*************************
404 - Error Template
*************************/
get_header();
the_post();
?>
<section class="theme-error-page">
  <div class="theme-container">
    <img src="<?php echo get_theme_mod('theme_404_image'); ?>"/>
    <p><?php echo get_theme_mod('theme_404_title'); ?></p>
    <a href="<?php echo site_url(); ?>">
      <?php echo get_theme_mod('theme_404_link_text'); ?>
    </a>
  </div>
</section>
<?php get_footer(); ?>
