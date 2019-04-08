    <?php $header_background = get_field('header_background')?>
    <header class="header">
      <div class="header__container container-fluid"  style="background-image: url(<?=$header_background['url']?>); ?>)">
        <div class="header__row row">
          <div class="header__col col-lg-7 col-md-6 col-sm-12 col-xs-12">
            <div class="header_left">
              <h1> <?php the_field('header_title') ?></h1>
              <div class="header_left__text">
                <?php the_field('header_content') ?>
              </div>
            </div>
          </div>
          <div class="header__col col-lg-5 col-md-6 col-sm-12 col-xs-12">
            <div class="header_right">
              <?=do_shortcode('[contact-form-7 id="167" title="Шапка - форма" html_class="header_right__form"]') ?>
            </div>
          </div>
        </div>
      </div>
    </header>