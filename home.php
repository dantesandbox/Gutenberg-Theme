<?php
/*************************
Posts Template
*************************/

get_header();
the_post();
?>

<section class="theme-post-feed theme-archive-posts">
  <div class="theme-container">
    <h1><?php echo single_post_title(); ?></h1>
    <div class="theme-row">
      <!-- Start Loop -->
      <?php
          $args = array(
             'post_type' => 'post',
             'numberposts' => 12
          );

          $query = new WP_Query( $args );

          if ( $query->have_posts() ) :
            while ( $query->have_posts() ) : $query->the_post();
      ?>
      <!-- Call Posts Here -->
      <?php get_template_part( 'partials/content', 'post' ); ?>
      <?php
        endwhile;
        endif;
      ?>
    </div>
    <?php echo the_posts_pagination();; ?>
  </div>
</section>
<?php get_footer(); ?>
