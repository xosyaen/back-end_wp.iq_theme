 <?php
/*
Template Name: Щаблон - Первый
*/
get_header();
the_post();
?>
<?php
get_template_part('blocks/header','1');
get_template_part('blocks/section-one','1');
get_template_part('blocks/section-two');
get_template_part('blocks/section-three');
get_template_part('blocks/section-four','1');
get_template_part('blocks/section-slider','1');
get_template_part('blocks/section-six');
get_template_part('blocks/section-contacts');
?>
<?php
get_footer();
