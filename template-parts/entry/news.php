<?php
$title_args = array();
if( is_home() || is_front_page() ) :
  $title_args = array( 
    'has_link' => true, 
    'link_url' => home_url() . '/the-news/' 
  );
endif;
?>
<section class="news">
  <?php 
  if( function_exists( 'dfw_page_title' ) ) : 
    dfw_page_title( 'News', $title_args ); 
  endif;
  $case_study_query = new WP_Query( array(
    'post_type'     => 'post',
    'no_found_rows' => true
  ) );
  if( have_posts() ) : 
    while( $case_study_query->have_posts() ) : 
      $case_study_query->the_post();
      $even_odd = ($case_study_query->current_post%2 == 0?'odd':'even');
      ?>
      <article id="entry-<?php get_the_ID(); ?>" <?php post_class('row entry news listing ' . $even_odd ); ?> aria-labelledby="entry__header" role="article">
        <div class="content__wrapper">
          <?php if ( has_post_thumbnail() ) : ?>
          <section class="entry__profile-image col__1-2">
            <a href="<?php the_permalink(); ?>">
              <?php get_template_part( 'template-parts/partials/thumbnail' ); ?>
            </a>
          </section>
          <?php endif; ?>
          <section class="entry__content col__1-2">
            <?php if( function_exists( 'dfw_entry_title' ) ) : dfw_entry_title(); endif; ?>
            <div class="entry__date"><?php echo get_the_date(); ?></div>
            <?php dfw_custom_excerpt(); ?>
          </section>
        </div>
      </article>
      <?php 
    endwhile; 
  endif; 
  wp_reset_postdata();
  ?>
</section>