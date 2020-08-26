<?php
	/* Template name: Home Summit Layout */
	get_header();
	global $_set;
  $settings                  = $_set->settings;
	$is_feature_enabled      = $settings['enable_featured'];
	$is_announcement_enabled = $settings['enabled_announcement'];
?>
	<section class="main-content">
		<?php
		if ( $is_feature_enabled ) {
			get_template_part( 'inc/partials/home/home', 'featured' );
		}
		if ( $is_announcement_enabled ) {
			get_template_part( 'inc/partials/home/home', 'notification' );
		}
    ?>
    <div class="container">
      <div class="columns is-centered">
        <div class="column is-8">
          <section class="entry-page-content">
            <div class="text-format body-big">
              <?php the_content(); ?>
            </div>
          </section>
        </div>
      </div>
    </div>
    <?php
			get_template_part( 'inc/partials/home/home', 'content' );
		?>
	</section>
<?php get_footer(); ?>
