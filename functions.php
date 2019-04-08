<?php

if ( ! function_exists( 'iq_theme_setup' ) ) :
	function iq_theme_setup() {
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'iq_theme_setup' );

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Основные настройки',
		'menu_title'	=> 'Настройки темы',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Настройки меню',
		'menu_title'	=> 'Меню',
		'parent_slug'	=> 'theme-general-settings',
	));
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Контакты',
		'menu_title'	=> 'Контакты',
		'parent_slug'	=> 'theme-general-settings',
	));
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Настройки подвала',
		'menu_title'	=> 'Подвал',
		'parent_slug'	=> 'theme-general-settings',
	));
	
}
add_action( 'wp_enqueue_scripts', 'iq_theme_scripts' );

function iq_theme_scripts() {

	wp_enqueue_style('vendor-slyle', get_template_directory_uri().'/css/vendor.css', array(), '', false);
	wp_enqueue_style('iq_theme-style', get_stylesheet_uri());

    if (!is_admin()) {
        wp_deregister_script('jquery');
        wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js');
        wp_enqueue_script('jquery');
    }
	
    wp_enqueue_script('vendor-slick', get_template_directory_uri().'/js/slick.min.js', array('jquery'), null, true);
	wp_enqueue_script('vendor-jquery.maskedinput', get_template_directory_uri().'/js/jquery.maskedinput.min.js', array('jquery'), null, true);
    wp_enqueue_script('vendor-yandex-maps','https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;apikey=df08dc5c-c27c-49bd-ad49-5007f986d8fa', array('jquery'), null, true);
    wp_enqueue_script('iq_theme-map', get_template_directory_uri().'/js/maps.js', array('jquery'), null, true);
    // $field = get_field('map-zoom', 'option');
    wp_localize_script('iq_theme-map', 'wt_contacts', array(
		'latitude' =>  WT::$obj->contacts->getValue('map-latitude'),
		'longitude' => WT::$obj->contacts->getValue('map-longitude'),
		'zoom' => 16,
		'balloonContent' => WT::$obj->contacts->getValue('map-ballooncontent'),
		'hintContent' => WT::$obj->contacts->getValue('map-hintcontent'),
	));

    wp_enqueue_script('iq_theme-script', get_template_directory_uri().'/js/main.js', array('jquery'), null, true);
}

add_action('wpcf7_init', 'custom_add_shortcode_yesr');
function custom_add_shortcode_yesr() {
    wpcf7_add_form_tag('city','custom_clock_shortcode_handler');
} 

function custom_clock_shortcode_handler($tag) {
	$city = WT::$obj->contacts->getValue('region');
	$result = '<input class="header_right__input" type="text" name="city" placeholder="'.$city.'" disabled="disabled"/>';
	return $result;
}
