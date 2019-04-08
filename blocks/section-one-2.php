    <section class="section-one">
      <h2 class="section-one__h2">
        <?php the_field('section-one_title') ?>
      </h2>
      <div class="section-one__container container">
        <div class="section-one__row row">
          <?php if( have_rows('section-one_content') ): ?>
            <?php $i = 0; while( have_rows('section-one_content')): the_row(); 
              $image = get_sub_field('icon');
              $title = get_sub_field('title');
              $content = get_sub_field('content');
              $i++; 
              ?>
            <div class="section-one__col col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <div class="section-one__block">
                <?php if ($image): ?>
                  <div class="section-one__block_img block_img">
                      <?=wp_get_attachment_image($image['id'], 'thumbnail'); ?>
                  </div>
                <?php endif ?>
                <?php if ($title): ?>
                  <h3 class="section-one__h3"><?=$title?></h3>
                <?php endif ?>
                <?php if ($content): ?>
                  <div class="section-one__text text"><?=$content?></div>
                <?php endif ?>
              </div>
            </div>
            <?php if ($i==2||$i==4||$i==6||$i==8): ?><div class="clearfix hidden-lg hidden-md hidden-xs"></div><?php endif ?>
            <?php if ($i==4||$i==8): ?><div class="clearfix hidden-sm hidden-xs"></div><?php endif ?>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>
      </div>
    </section>