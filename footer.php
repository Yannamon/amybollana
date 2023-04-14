<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package amybollana
 */

?>

<footer id="colophon" class="site-footer">
	<div class="site-info footer-style">
		<img src="https://amybollana.web.dmitcapstone.ca/wp-content/uploads/2023/04/cropped-ABD-logo-1-scaled-1.webp"
			alt="Amy Bollana Design logo">
		<h2>Our Socials:</h2>
		<div>
			<a class="instagram" href="https://ssl.gstatic.com/atari/images/sociallinks/instagram_white_28dp.png"><img
					src="https://amybollana.web.dmitcapstone.ca/wp-content/uploads/2023/04/insta.svg"
					alt="instagram logo"></a>
			<a href="https://www.facebook.com/amybollanadesign"><img
					src="https://amybollana.web.dmitcapstone.ca/wp-content/uploads/2023/04/fb.svg"
					alt="facebook logo"></a>
		</div>
		<!-- <?php echo apply_shortcodes('[mailpoet_form id="1"]') ?> -->
		<p>Copyright © 2023 | Amy Bollana Design | Calligraphy</p>
		<!-- <a href=" -->
		<?php /*echo esc_url( __( 'https://wordpress.org/', 'amybollana' ) );*/?>">
		<?php
		/* translators: %s: CMS name, i.e. WordPress. */
		/*printf( esc_html__( 'Proudly powered by %s', 'amybollana' ), 'WordPress' );
		?>
		</a>
		<span class="sep"> | </span>
		<?php
		/* translators: 1: Theme name, 2: Theme author. */
		/*printf( esc_html__( 'Theme: %1$s by %2$s.', 'amybollana' ), 'amybollana', '<a href="http://underscores.me/">Underscores.me</a>' );*/
		?>
	</div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>