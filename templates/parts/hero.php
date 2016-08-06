<?php
/**
 * Template part for displaying the footer nav menu.
 *
 * @package Uptown Style
 */
?>
<div class="hero" <?php if ( ! empty( uptown_get_header_image() ) && is_front_page() ) : ?> style="background:url('<?php echo uptown_get_header_image( ); ?>') no-repeat top center; background-size: cover;"<?php endif; ?>>

	<div class="hero-wrapper">

		<?php do_action( 'uptown_hero' ); ?>

		<?php if ( is_front_page() ) : ?>

			<?php dynamic_sidebar( 'hero' ); ?>

		<?php endif; ?>

	</div>

</div>
