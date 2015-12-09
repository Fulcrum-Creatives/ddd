<?php
$ddd_logo        = dfw_get_field( 'ddd_logo', true );
$ddd_logo_retina = dfw_get_field( 'ddd_logo_retina', true );
$ddd_logo_svg    = dfw_get_field( 'ddd_logo_svg', true );
?>
<h1>
  <a href="<?php echo home_url(); ?>">
    <?php
      $header_logo_paths = array(
        'image'  => $ddd_logo['url'],
        'retina' => $ddd_logo_retina['url'],
        'svg'    => $ddd_logo_svg['url']
      ); 
      dfw_svg_fallback( $header_logo_paths, $ddd_logo['alt'], 'logo', 'svg logo__svg' );
    ?>
  </a>
  <span class="ir">
    <?php echo bloginfo('name'); ?>
  </span>
</h1>