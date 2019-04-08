    <div class="modal_making modal" id="modal_making">
      <div class="modal_making__container container">
        <div class="modal_making__block">
          <div class="modal_making__close close">
          </div>
          <?=do_shortcode('[contact-form-7 id="165" title="Меню - Запись на прием" html_class="modal_making__form"]') ?>
        </div>
      </div>
    </div>
    <div class="modal_region modal" id="modal_region">
      <div class="modal_region__container container">
        <div class="modal_region__block">
          <div class="modal_region__close close">
          </div>
          <div class="modal_region__header">
            <h2>Выберите ваш город из списка
            </h2>
          </div>
            <div class="modal_region__body">
              <div class="modal_region__row row">
                <?php
                $url = parse_url(get_permalink( $post->ID ));
                $columns = Wt::$obj->contacts->getRegionsArray(
                  array(
                    'columns' => 4,
                    'pack' => 'country',
                    'filter' => array('type' => 'city')
                  )
                );
                foreach ($columns as $column){ ?>
                  <div class="modal_region__col col-md-4 col-sm-6 col-xs-6">
                    <?php foreach ($column as $key => $region){
                        // if (!empty($region['subdomain'])):
                        //     $city = "'".$region['post_title']."','//".$region['subdomain'].".rusiq.ru".$url['path']."'";
                        // else:
                        $city = "'".$region['post_title']."','//rusiq.ru".$url['path']."'";
                        // endif;
                    ?>
                    <p><a onclick="WtLocation.setCity(<?php echo $city; ?>)" class="modal_region__city city"><?php echo $region['post_title']; ?></a></p>
                  <?php } ?>
                  </div>
                <?php } ?>
              </div>
            </div>
            <div class="modal_region__footer">
              <a onclick="WtLocation.setCity('Тольятти', 'reload')" class="modal_region__city_no city_no">В списке нет моего города (использовать данные головного офиса)</a>
          </div>
        </div>
      </div>
    </div>