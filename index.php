<?php

get_header();
the_post();
?>

<section class="default">
  <div class="default__container container">
    <h1 class="h2_line">
    	<span><?php the_title(); ?></span>
    </h1>
	<?php the_content(); ?>
  </div>
</section>
<?php
get_footer();
