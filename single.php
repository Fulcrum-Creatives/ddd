<?php 
get_header();
if ( have_posts() ) : 
  while ( have_posts() ) : 
    the_post();
    get_template_part( 'template-parts/entry/single' );
  endwhile; 
else:
  get_template_part( 'template-parts/entry/none' );
endif; 
wp_reset_postdata();
get_footer();