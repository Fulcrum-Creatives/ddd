<?php get_template_part( 'template-parts/partials/menu' ); ?>
<div class="content__wrapper top">
  <div class="top">
    <?php 
    if( function_exists( 'dfw_page_title' ) ) : dfw_page_title(); endif;
    the_content();
    ?>
  </div>
</div>