<?php 
get_template_part( 'template-parts/partials/menu' ); 
$ddd_cs_sub_tilte_one = dfw_get_field( 'ddd_cs_subtilte_one' );
$ddd_cs_subtitle_two  = dfw_get_field( 'ddd_cs_subtitle_two' );
?>
<div class="content__wrapper top">
  
  <?php if( is_singular( 'casestudies' ) ) : ?>
    <h2 class="case-studies__subtitle one"><?php echo $ddd_cs_sub_tilte_one; ?></h2>
    <h2 class="case-studies__subtitle two"><?php echo $ddd_cs_subtitle_two; ?></h2>
  <?php else: ?>
    <?php if( function_exists( 'dfw_entry_title' ) ) : dfw_entry_title( array( 'has_link' => false )); endif; ?>
    <div class="entry__date"><?php echo get_the_date(); ?></div>
  <?php endif; ?>
  <?php get_template_part( 'template-parts/partials/thumbnail' ); ?>
  <?php the_content(); ?>
</div>