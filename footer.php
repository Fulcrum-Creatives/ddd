</main>
<footer id="footer" class="footer" role="contentinfo">
  <div class="content__wrapper">
    <?php if( !is_page( 'contact' ) ) : ?>
    <div class="button__one right">
      <a href="<?php echo home_url(); ?>/contact/">
        <?php  echo _e( 'Contact Diana', 'fcwp' ); ?>
      </a>
    </div>
    <?php endif; ?>
    <div class="company_info">
      <p>&copy; <?php echo _e( 'Diana Duke Duncan LLC.', 'fcwp' ); ?></p>
      <!-- two links no need for a menu -->
      <ul>
        <li>
          <a href="<?php echo home_url(); ?>/about/">
            <?php echo _e( 'About Diana', 'fcwp' ); ?>
          </a>
        </li>
        <li>
          <a href="<?php echo home_url(); ?>/case-studies/">
            <?php echo _e( 'Case Studies', 'fcwp' ); ?>
          </a>
        </li>
        <li>
          <a href="<?php echo home_url(); ?>/the-news/">
            <?php echo _e( 'News', 'fcwp' ); ?>
          </a>
        </li>
      </ul>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>