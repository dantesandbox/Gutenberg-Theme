<!-- Content Post -->
<div class="theme-col theme-col-3">
   <a href="<?php the_permalink() ?>" class="full-post-link"></a>
   <div class="theme-post-img" style="background:url(<?php the_post_thumbnail_url()?>);"></div>
   <h2><?php the_title() ?></h2>
   <p><?php the_time('m . d . y') ?></p>
</div>
