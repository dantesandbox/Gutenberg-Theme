<?php
/*************************
Single Our Team Template
*************************/

get_header();
the_post();
?>
<div class="theme-container">
<?php the_content(); ?>
<?php
  $prev_post = get_previous_post();
  $next_post = get_next_post();
?>
<!-- Pagination Wrapper -->
  <div class="theme-prev-next-link-container">
    <?php
      if ($prev_post) : ?>
      <a href="<?php echo get_permalink( $prev_post->ID ); ?>"><?php echo '<i class="fas fa-caret-left"></i>MEET ' . get_the_title( $prev_post->ID ); ?></a>
    <?php endif; ?>
    <?php
      if ( is_a( $next_post , 'WP_Post' ) ) : ?>
      <a href="<?php echo get_permalink( $next_post->ID ); ?>"><?php echo 'MEET ' . get_the_title( $next_post->ID ) . '<i class="fas fa-caret-right"></i>'; ?></a>
    <?php endif; ?>
  </div>
</div>
<?php get_footer(); ?>
