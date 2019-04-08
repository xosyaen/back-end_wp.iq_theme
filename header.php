<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="description" content="<?php //echo get_post_meta($post->ID, 'description', true); ?>" />
    <meta name="keywords" content="<?php //echo get_post_meta($post->ID, 'keywords', true); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="HandheldFriendly" content="true"/>
    <meta name="format-detection" content="telephone=no"/>
    <meta content="IE=edge" http-equiv="X-UA-Compatible"/>
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
  <body class="page">
    <nav class="nav">
      <div class="nav__container container">
        <div class="nav__row row">
          <div class="nav__col col-lg-2 col-md-2 col-sm-2 col-xs-2">
              <?php the_custom_logo(); ?>
          </div>
          <div class="nav__col col-lg-4 col-md-4 col-sm-3 col-xs-10">
            <div class="nav__block block_address">
              <?php $address = WT::$obj->contacts->getValue('address'); ?>
              <?php $region = WT::$obj->contacts->getValue('region'); ?>
              <a class="nav__address" data-toggle="popover" data-placement="bottom" data-title="Ваш регион <?=$region?> ?">
              <?=$address?>
              </a>
            </div>
          </div>
          <div class="nav__col col-lg-6 col-md-6 col-sm-7 col-xs-12">
            <div class="nav__row row">
              <div class="nav__col col-lg-8 col-md-8 col-sm-7 col-xs-6">
                <div class="nav__block">
                  <?php $phone = get_field('header_tel', 'option'); ?>
                  <a class="nav__tel" href="tel:<?=str_replace(" ","",$phone)?>"><?=$phone?></a>
                </div>
              </div>
              <div class="nav__col col-lg-4 col-md-4 col-sm-5 col-xs-6">
                <div class="nav__block">
                  <a class="nav__btn">Запись на прием</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </nav>