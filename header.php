<?php get_template_part( 'template-parts/head' ); ?>
<header id="header" class="header" role="banner">
  <div class="content__wrapper">
    <div id="header__logo" class="header__logo">
      <?php get_template_part( 'template-parts/partials/logo' ); ?>
    </div>
    <?php 
    if( !is_front_page() ) :
       if( function_exists( 'dfw_page_title' ) ) : dfw_page_title(); endif;
    endif;
    ?>
  </div>
</header>
<main id="main" class="main" role="main">