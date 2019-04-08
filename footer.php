    <footer class="footer">
      <div class="footer__container container">
        <div class="footer__block">
          <div class="footer__text">
          	<?php the_field('footer_content', 'option'); ?>
          </div>
        </div>
      </div>
    </footer>
  <?php get_template_part('blocks/modal'); ?>
	<?php wp_footer(); ?>
  </body>
</html>