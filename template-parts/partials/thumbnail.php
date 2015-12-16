<?php if ( has_post_thumbnail() ) : ?>
  <div class="entry__thumbnail">
    <?php the_post_thumbnail();?>
    <p class="wp-caption-text">
      <?php echo get_post(get_post_thumbnail_id())->post_excerpt; ?>
    </p>
  </div>
<?php endif ?>