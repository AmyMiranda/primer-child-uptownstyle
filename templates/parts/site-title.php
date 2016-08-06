<?php
/**
 * Displays the site title.
 *
 * @package Uptown Style
 */
$site_title = get_bloginfo( 'name', 'display' );
$site_description = get_bloginfo( 'description', 'display' );
?>


<div class="site-title-wrapper">

	<?php if ( has_custom_logo() ) : ?>

		<?php the_custom_logo() ?>

	<?php endif; ?>

	<h1 class="site-title">

		<a href="<?php echo esc_url( home_url( '/' ) ) ?>" rel="home"><?php bloginfo( 'name' ) ?></a>

	</h1>

	<div class="site-description"><?php bloginfo( 'description' ) ?></div>

</div><!-- .site-title-wrapper -->
