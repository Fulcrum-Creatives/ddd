<?php get_template_part( 'template-parts/head' ); ?>
<?php 
$green = '';
if( is_page( 'case-studies' ) || get_post_type() == 'casestudies' ) :
  $green = ' header__green';
endif;
?>
<header id="header" class="header<?php echo $green; ?>" role="banner">
  <div class="content__wrapper">
    <div id="header__logo" class="header__logo">
      <?php get_template_part( 'template-parts/partials/logo' ); ?>
    </div>
  </div>
</header>
<main id="main" class="main" role="main">