    <section class="section-slider">
      <h2 class="section-slider__h2 h2_line">
        <span><?php the_field('section-slider_title') ?></span>
      </h2>
      <div class="section-slider__container container-fluid">
        <div class="sliders_work_results">
      <?php if( have_rows('section-slider_slide') ): ?>
        <?php while( have_rows('section-slider_slide')): the_row(); 
            $content_1 = get_sub_field('content_1');
            $content_2 = get_sub_field('content_2');
            $content_3 = get_sub_field('content_3');
          ?>
          <div class="sliders_work_results__slide">
            <div class="sliders_work_results__row row">
              <div class="sliders_work_results__col col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="sliders_work_results__block">
                  <div class="sliders_work_results__text text">
                     <?=$content_1?>
                  </div>
                </div>
              </div>
              <div class="sliders_work_results__col col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="sliders_work_results__block">
                  <div class="sliders_work_results__text text">
                    <?=$content_3?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>
        </div>
        <div class="controls">
          <div class="controls__row row">
            <div class="controls__col col-xs-2"><a class="controls__left"><img src="<?=get_template_directory_uri()?>/img/slider_btn_left.png" alt="" role="presentation"/></a>
            </div>
            <div class="controls__col col-xs-8">
            </div>
            <div class="controls__col col-xs-2"><a class="controls__right"><img src="<?=get_template_directory_uri()?>/img/slider_btn_right.png" alt="" role="presentation"/></a>
            </div>
          </div>
        </div>
      </div>
    </section>