    <section class="section-contacts">
      <div class="section-contacts__container container-fluid">
        <div class="section-contacts__row row">
          <div class="section-contacts__col col-lg-6 col-md-6 col-xs-12">
            <div class="section-contacts__block_address">
              <h2 class="section-contacts__h2">
                <?php the_field('contacts_title','option'); ?>
              </h2>
              <div class="section-contacts__address">
                <?php the_field('contacts_content','option'); ?>
                  <ul class="section-contacts__sls sls">
                    <?php 
                          $icon_1 = WT::$obj->contacts->getValue('icon_1');
                          $link_1 = WT::$obj->contacts->getValue('link_1');
                          $icon_2 = WT::$obj->contacts->getValue('icon_2');
                          $link_2 = WT::$obj->contacts->getValue('link_2');
                          $icon_3 = WT::$obj->contacts->getValue('icon_3');
                          $link_3 = WT::$obj->contacts->getValue('link_3');
                          $icon_4 = WT::$obj->contacts->getValue('icon_4');
                          $link_4 = WT::$obj->contacts->getValue('link_4');
                    ?>
                    <?php if ($link_1||$icon_1) { ?>
                      <li class="section-contacts__sl sl">
                        <a href="<?=$link_1?>" target="_blank"><?=wp_get_attachment_image($icon_1,'thumbnail'); ?></a>
                      </li>
                    <?php } ?>
                    <?php if ($link_2||$icon_2) { ?>
                      <li class="section-contacts__sl sl">
                        <a href="<?=$link_2?>" target="_blank"><?=wp_get_attachment_image($icon_2,'thumbnail'); ?></a>
                      </li>
                    <?php } ?>
                    <?php if ($link_3||$icon_3) { ?>
                      <li class="section-contacts__sl sl">
                        <a href="<?=$link_3?>" target="_blank"><?=wp_get_attachment_image($icon_3,'thumbnail'); ?></a>
                      </li>
                    <?php } ?>
                    <?php if ($link_4||$icon_4) { ?>
                      <li class="section-contacts__sl sl">
                        <a href="<?=$link_4?>" target="_blank"><?=wp_get_attachment_image($icon_4,'thumbnail'); ?></a>
                      </li>
                    <?php } ?>
                  </ul>
              </div>
            </div>
          </div>
          <div class="section-contacts__col col-lg-6 col-md-6 col-xs-12">
            <div class="section-contacts__map" id="map">
            </div>
          </div>
        </div>
      </div>
    </section>