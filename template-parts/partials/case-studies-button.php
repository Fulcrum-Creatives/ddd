<?php
if ( have_posts() ) : 
  while ( have_posts() ) : 
    the_post();
    $ddd_btn_case_studies      = dfw_get_field( 'ddd_btn_case_studies' );
    $ddd_btn_case_studies_link = dfw_get_field( 'ddd_btn_case_studies_link' );
?>
    <div class="button__one centered">
      <a href="<?php echo $ddd_btn_case_studies_link; ?>">
        <?php echo $ddd_btn_case_studies; ?>
      </a>
    </div>
<?php
  endwhile; 
endif;
wp_reset_postdata();