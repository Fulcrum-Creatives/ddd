<div class="content__wrapper">
  <article id="entry-<?php get_the_ID(); ?>" <?php post_class('entry homepage'); ?> aria-labelledby="entry__header" role="article">
    <div class="row">
      <section class="entry__profile-image col__1-2">
        <?php get_template_part( 'template-parts/partials/thumbnail' ); ?>
      </section>
      <section class="entry__content col__1-2">
        <?php if( function_exists( 'dfw_page_title' ) ) : dfw_page_title( 'Diana Duke Duncan' ); endif; ?>
        <?php
        if ( have_posts() ) : 
          while ( have_posts() ) :
            $ddd_btn_about_text = dfw_get_field( 'ddd_btn_about_text' );
            $ddd_btn_about_link = dfw_get_field( 'ddd_btn_about_link' );
            the_post();
            the_content();
            ?>
            <div class="button__one">
              <a href="<?php echo $ddd_btn_about_link; ?>">
                <?php echo $ddd_btn_about_text; ?>
              </a>
            </div>
            <?php
          endwhile; 
        endif;
        wp_reset_postdata();
        ?>
         
      </section>
    </div>
  </article>
</div>