<?php
if ( have_posts() ) : 
  while ( have_posts() ) : 
    the_post();
    $ddd_affiliate_logo        = dfw_get_field( 'ddd_affiliate_logo', true );
    $ddd_affiliate_logo_retina = dfw_get_field( 'ddd_affiliate_logo_retina', true );
    $ddd_affiliate_logo_svg    = dfw_get_field( 'ddd_affiliate_logo_svg', true );
    $ddd_affiliate_header      = dfw_get_field( 'ddd_affiliate_header' );
    $ddd_affiliate_copy        = dfw_get_field( 'ddd_affiliate_copy' );
    ?>
    <section class="affiliates__header">
      <?php 
      if( function_exists( 'dfw_page_title' ) ) : 
        dfw_page_title( $ddd_affiliate_header ); 
      endif;
      ?>
    </section>
    <section class="affiliates">
      <h4 class="bene__logo">
        <a href="http://benefactorgroup.com/">
          <?php
            $bene_logo_paths = array(
              'image'  => $ddd_affiliate_logo['url'],
              'retina' => $ddd_affiliate_logo_retina['url'],
              'svg'    => $ddd_affiliate_logo_svg['url']
            ); 
            dfw_svg_fallback( $bene_logo_paths, $ddd_affiliate_logo['alt'], 'logo', 'svg logo__svg' );
          ?>
        </a>
        <span class="ir">
          <?php echo _e( 'The Benefactor Group', 'fcwp' ); ?>
        </span>
      </h4>
      <div class="affiliation__text">
        <?php echo $ddd_affiliate_copy; ?>
      </div>
    </section>
<?php
  endwhile; 
endif;
wp_reset_postdata();