<?php
/*************************
Footer
*************************/
?>
<footer class="theme-footer">
  <div class="theme-footer-container">
    <div class="theme-footer-row">
      <div class="theme-footer-left">
        <ul class="theme-footer-social-links">
          <li><a href="#"><i class="fab fa-instagram"></i></a></li>
          <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
        </ul>
        <p>
          <?php if(get_theme_mod('theme_footer_text')): ?>
            <a href="mailto:<?php echo get_theme_mod('theme_footer_text'); ?>">
              <?php echo get_theme_mod('theme_footer_text');?>
            </a>
          <?php endif; ?>
        </p>
        <p>
          <?php if(get_theme_mod('theme_footer_phone')): ?>
            <a href="tel:<?php echo str_replace('.', '', get_theme_mod('theme_footer_phone'));?>">
              <?php echo get_theme_mod('theme_footer_phone'); ?>
            </a>
          <?php endif; ?>
        </p>
        <?php if(get_theme_mod('theme_footer_copyright')): ?>
          <p class="theme-copyright">&copy; <?php echo get_theme_mod('theme_footer_copyright'); ?></p>
        <?php endif; ?>
      </div>
      <div class="theme-footer-right">
        <?php if(get_theme_mod('footer-logo')): ?>
          <a href="<?php echo site_url(); ?>">
            <img src="<?php echo get_theme_mod('footer-logo'); ?>"/>
          </a>
        <?php endif; ?>
      </div>
    </div>
  </div>
</footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenLite.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TimelineLite.min.js"></script>
<?php wp_footer(); ?>
</body>
</html>
