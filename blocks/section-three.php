    <section class="section-three">
      <h2 class="section-three__h2 h2_line">
        <span><?php the_field('section-three_title') ?></span>
      </h2>
      <div class="section-three__container container">
        <div class="section-three__row row">
            <?php if( have_rows('section-three_block_b') ): 
              while( have_rows('section-three_block_b') ): the_row(); 
              $title = get_sub_field('title');
              $image = get_sub_field('icon');
              $content = get_sub_field('content');
            ?>
              <div class="section-three__col col-lg-4 col-md-4 col-sm-5 col-xs-12">
                <div class="block_info">
                  <?php if ($title): ?>
                    <h3><?=$title?></h3>
                  <?php endif ?>
                  <?php if ($image): ?>
                      <div class="block_info__block_img block_img">
                        <?=wp_get_attachment_image($image['id'], 'thumbnail'); ?>
                      </div>
                  <?php endif ?>
                  <?php if ($content): ?>
                    <div class="block_info__text text"><?=$content?></div>
                  <?php endif ?>
                </div>
              </div>
            <?php endwhile; ?>
          <?php endif; ?>
          <div class="section-three__col col-lg-1 col-md-1 col-sm-2 col-xs-12">
            <img class="section-three__img_arrow" src="<?=get_template_directory_uri()?>/img/section_arrow.png" alt="" role="presentation"/>
          </div>
          <?php if( have_rows('section-three_block_a') ): 
              while( have_rows('section-three_block_a') ): the_row(); 
              $title = get_sub_field('title');
              $image = get_sub_field('icon');
              $content = get_sub_field('content');
            ?>
              <div class="section-three__col col-lg-4 col-md-4 col-sm-5 col-xs-12">
                <div class="block_info">
                  <?php if ($title): ?>
                    <h3><?=$title?></h3>
                  <?php endif ?>
                  <?php if ($image): ?>
                      <div class="block_info__block_img block_img">
                        <?=wp_get_attachment_image($image['id'], 'thumbnail'); ?>
                      </div>
                  <?php endif ?>
                  <?php if ($content): ?>
                    <div class="block_info__text text"><?=$content?></div>
                  <?php endif ?>
                </div>
              </div>
            <?php endwhile; ?>
          <?php endif; ?>
          <div class="section-three__col col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="section-three__row row">
              <?php if( have_rows('section-three_block_l_1') ): 
                  while( have_rows('section-three_block_l_1') ): the_row(); 
                  $title = get_sub_field('title');
                  $image = get_sub_field('icon');
                  $link = get_sub_field('link');
                ?>
                  <div class="section-three__col col-lg-12 col-md-12 col-sm-6 col-xs-12">
                    <div class="block_btn">
                      <?php if ($image): ?>
                          <div class="block_btn__block_img block_img">
                            <?=wp_get_attachment_image($image['id'], 'thumbnail'); ?>
                          </div>
                      <?php endif ?>
                      <?php if ($title): ?>
                        <h3><?=$title?></h3>
                      <?php endif ?>
                      <?php if ($link): ?>
                        <a class="block_btn__btn btn" href="<?=$link['url']?>" target="<?=$link['target']?>"><?=$link['title']?></a>
                      <?php endif ?>
                    </div>
                  </div>
                <?php endwhile; ?>
              <?php endif; ?>
              <?php if( have_rows('section-three_block_l_2') ): 
                  while( have_rows('section-three_block_l_2') ): the_row(); 
                  $title = get_sub_field('title');
                  $image = get_sub_field('icon');
                  $link = get_sub_field('link');
                ?>
                  <div class="section-three__col col-lg-12 col-md-12 col-sm-6 col-xs-12">
                    <div class="block_btn">
                      <?php if ($image): ?>
                          <div class="block_btn__block_img block_img">
                            <?=wp_get_attachment_image($image['id'], 'thumbnail'); ?>
                          </div>
                      <?php endif ?>
                      <?php if ($title): ?>
                        <h3><?=$title?></h3>
                      <?php endif ?>
                      <?php if ($link): ?>
                        <a class="block_btn__btn btn" href="<?=$link['url']?>" target="<?=$link['target']?>"><?=$link['title']?></a>
                      <?php endif ?>
                    </div>
                  </div>
                <?php endwhile; ?>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </section>