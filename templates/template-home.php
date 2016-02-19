<?php
/*
Template Name: Homepage
*/
get_header();
get_template_part( 'template-parts/entry/home', 'copy' );
get_template_part( 'template-parts/entry/case', 'studies' );
get_template_part( 'template-parts/entry/news' );
get_template_part( 'template-parts/partials/case-studies', 'button' );
get_template_part( 'template-parts/entry/affiliate', 'features' );

if ( have_posts() ) : 
  while ( have_posts() ) : 
    the_post();
    $ddd_clients_heading = dfw_get_field( 'ddd_clients_heading' );
  endwhile;  
endif;
wp_reset_postdata();
echo fcwp_heading_bar( $ddd_clients_heading );
?>
<section class="clients">
  <?php 
  if( have_rows( 'ddd_clients' ) ):
    $i=0;
    while( have_rows( 'ddd_clients' ) ) : the_row();
      $ddd_client_logo = dfw_get_sub_field( 'ddd_clients', 'ddd_client_logo' );
      $ddd_client_name = dfw_get_sub_field( 'ddd_clients', 'ddd_client_name' );
      $ddd_client_url  = dfw_get_sub_field( 'ddd_clients', 'ddd_client_url ' );
      if( $i%3==0 ) :
      ?>
      <div class="row">
      <?php endif; ?>
        <div class="col__1-3 client">
          <div class="inner">
            <div class="client__logo">
              <a href="<?php echo $ddd_client_url; ?>">
                <img src="<?php echo $ddd_client_logo['url']; ?>" alt="<?php echo $ddd_client_logo['alt']; ?>" />
              </a>
            </div>
            <div class="client__name">
              <a href="<?php echo $ddd_client_url; ?>">
                <?php echo $ddd_client_name; ?>
              </a>
            </div>
          </div>
        </div>
      <?php 
      $i++;
      if($i%3==0) : ?>
      </div>
      <?php endif; ?>      
    <?php
    endwhile;
    if($i%3!=0) : ?>
      </div>
    <?php
    endif;
  endif;
  ?>
</section>
<?php
get_footer(); 
?>