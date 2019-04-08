<section class="section-two">
  <h2 class="section-two__h2 h2_line"> 
    <span><?php the_field('section-two_title') ?></span>
  </h2>
  <div class="section-two__container container">
    <div class="section-two__row row">
      <?php if( have_rows('section-two_content') ): ?>
        <?php $i = 0; while( have_rows('section-two_content')): the_row(); 
            $image = get_sub_field('icon');
            $content = get_sub_field('content');
            $i++;
          ?>
          <div class="section-two__col col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="section-two__row row">
              <div class="section-two__col col-lg-10 col-md-10 col-sm-10 col-xs-12">
                <div class="section-two__block"> 
                  <?php if ($image): ?>
                    <div class="section-two__block_img block_img">
                      <?=wp_get_attachment_image($image['id'], 'thumbnail'); ?>
                    </div>
                  <?php endif ?>
                  <?php if ($content): ?>
                    <div class="section-two__text text"><?=$content?></div>
                  <?php endif ?>
                </div>
              </div>
                <?php if ($i!=4): ?>
                  <div class="section-two__col col-lg-2 col-md-2 col-sm-2 col-xs-12">
                    <img class="section-two__img_arrow" src="<?=get_template_directory_uri()?>/img/section_arrow.png" alt="" role="presentation"/>
                  </div>
                <?php endif; ?>
            </div>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>
  <div class="section-two__container container-fluid">
    <?php echo do_shortcode('[contact-form-7 id="166" title="Секция вторая - Записаться на консультацию" html_class="section-two__form"]'); ?>
  </div>
</section>