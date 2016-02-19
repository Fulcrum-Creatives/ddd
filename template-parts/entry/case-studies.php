<?php
if ( have_posts() ) : 
  while ( have_posts() ) : 
    the_post();
    $ddd_btn_case_studies           = dfw_get_field( 'ddd_btn_case_studies' );
    $ddd_btn_case_studies_link      = dfw_get_field( 'ddd_btn_case_studies_link' );
    $ddd_choose_featured_case_study = dfw_get_field( 'ddd_choose_featured_case_study' );
  endwhile;  
endif;
wp_reset_postdata();
echo fcwp_heading_bar( $ddd_btn_case_studies, $ddd_btn_case_studies_link );
$case_study_query = new WP_Query(array(
    'post_type'      => 'casestudies',
    'posts_per_page' => '1',
    'post__in'        => array( $ddd_choose_featured_case_study->ID ),
    'no_found_rows'  => true,
));
if (have_posts()):
    while ($case_study_query->have_posts()):
        $case_study_query->the_post();
        $even_odd = ($case_study_query->current_post % 2 == 0 ? 'odd' : 'even');
        ?>
		      <article id="entry-<?php get_the_ID();?>" <?php post_class('row entry case_study listing ' . $even_odd);?> aria-labelledby="entry__header" role="article">
		        <div class="content__wrapper">
		          <?php if (has_post_thumbnail()): ?>
		          <section class="entry__profile-image col__1-2">
		            <a href="<?php the_permalink();?>">
		              <?php get_template_part('template-parts/partials/thumbnail');?>
		            </a>
		          </section>
		          <?php endif;?>
	          <section class="entry__content col__1-2">
	            <?php if (function_exists('dfw_entry_title')): dfw_entry_title();endif;?>
	            <?php dfw_custom_excerpt();?>
	          </section>
	        </div>
	      </article>
	      <?php
endwhile;
endif;
wp_reset_postdata();
?>
</section>