<?php
/*************************
Single
*************************/

get_header();
the_post();
?>
<section class="theme-single-posts">
  <div class="theme-container">
  <?php echo '<h2 class="theme-blog-title">' . get_the_title() . '</h2>'; ?>
  <p class="theme-date"><?php the_time('m . d . y') ?></p>
  <?php the_content(); ?>
  </div>
</section>
<div class="theme-container">
  <div class="theme-share-links">
    <ul class="a2a_kit a2a_kit_size_32 a2a_default_style">
      <li>SHARE</li>
      <li><a class="a2a_button_facebook"><i class="fab fa-facebook-f"></i></a></li>
      <li><a class="a2a_button_twitter"><i class="fab fa-twitter"></i></a></li>
    </ul>
  </div>
  <div class="theme-prev-next-link-container">
    <?php

    $prev_post = get_previous_post();
    $next_post = get_next_post();

    if ($prev_post) : ?>
        <a href="<?php echo get_permalink( $prev_post->ID ); ?>"><?php echo '<i class="fas fa-caret-left"></i>Read Previous Post'; ?></a>
    <?php endif; ?>
    <?php
    if ( is_a( $next_post , 'WP_Post' ) ) : ?>
        <a href="<?php echo get_permalink( $next_post->ID ); ?>"><?php echo 'Read Next Post<i class="fas fa-caret-right"></i>'; ?></a>
    <?php endif; ?>
  </div>
</div>
<script async src="https://static.addtoany.com/menu/page.js"></script>
<?php get_footer(); ?>
