<?php

// =============================================================================
// VIEWS/RENEW/WP-PAGE.PHP
// -----------------------------------------------------------------------------
// Single page output for Renew.
// =============================================================================

?>

<?php get_header(); ?>

  <div class="x-container max width offset">
    <div class="<?php x_main_content_class(); ?>" role="main">
		<h1>TEMPLATE DE JUAN</h1>
      <?php while ( have_posts() ) : the_post(); ?>
        <?php x_get_view( 'renew', 'content', 'page' ); ?>
        <?php x_get_view( 'global', '_comments-template' ); ?>
      <?php endwhile; ?>

    </div>

    <?php get_sidebar(); ?>

  </div>
<?php get_footer(); ?>

