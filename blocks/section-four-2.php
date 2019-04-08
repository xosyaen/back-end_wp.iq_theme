    <section class="section-four">
      <h2 class="section-four__h2 h2_line">
        <span><?php the_field('section-four_title') ?></span>
      </h2>
      <h2 class="section-four__h2_2">
        <?php the_field('section-four_title_2') ?>
      </h2>
      <div class="section-four__container_2 container">
        <div class="section-four__row row">
          <?php if( have_rows('section-four_content') ): ?>
          <?php $i = 0; while( have_rows('section-four_content')): the_row(); 
              $title = get_sub_field('title');
              $content = get_sub_field('content');
              $i++;
            ?>
            <div class="section-four__col col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="section-four__block">
                <?php if ($title): ?>
                  <h3>
                    <?=$title?>
                  </h3>
                <?php endif ?>
                <?php if ($content): ?>
                  <div class="section-four__text text">
                    <?=$content?>
                  </div>
                <?php endif ?>
              </div>
            </div>
            <?php if ($i==2||$i==4): ?><div class="clearfix hidden-sm hidden-xs"></div><?php endif ?>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>
      </div>
    </section>