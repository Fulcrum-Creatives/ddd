<?php
/*
Template Name: News
*/
get_header();
?>
<?php get_template_part( 'template-parts/partials/menu' ); ?>
<div class="content__wrapper top">
  <?php 
  if( function_exists( 'dfw_page_title' ) ) : dfw_page_title(); endif;
  $case_study_query = new WP_Query( array(
    'post_type' => 'post',
    'paged'     => $paged
  ) );
  $paged     = (get_query_var('paged')) ? get_query_var('paged') : 1;
  $tmp_query = $wp_query;
  $wp_query  = null;
  $wp_query  = $case_study_query;
  if( have_posts() ) : 
    while( $case_study_query->have_posts() ) : 
      $case_study_query->the_post();
      $even_odd = ($case_study_query->current_post%2 == 0?'odd':'even');
      ?>
      <article id="entry-<?php get_the_ID(); ?>" <?php post_class('row entry case_study listing ' . $even_odd ); ?> aria-labelledby="entry__header" role="article">
        <div class="content__wrapper">
          <section class="entry__profile-image col__1-2">
            <a href="<?php the_permalink(); ?>">
              <?php get_template_part( 'template-parts/partials/thumbnail' ); ?>
            </a>
          </section>
          <section class="entry__content col__1-2">
            <?php if( function_exists( 'dfw_entry_title' ) ) : dfw_entry_title(); endif; ?>
            <div class="entry__date"><?php echo get_the_date(); ?></div>
            <?php dfw_custom_excerpt(); ?>
          </section>
        </div>
      </article>
      <?php 
    endwhile;
    ?>
    <div class="content__wrapper">
    <?php 
    dfw_pagination();
    ?>
    </div>
    <?php
  endif; 
  wp_reset_postdata();
  $wp_query = null;
  $wp_query = $tmp_query;
  ?>
</div>
<?php get_footer(); ?>