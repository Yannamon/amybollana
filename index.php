<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package amybollana
 */

get_header();
?>

	<main id="primary" class="site-main container">
		<div class="themecolorone">
			<div>
				<img src="../inc/img/bollana-banner.png" alt="">
			</div>
			<div class="d-flex justify-content-center">
				<h2>Amy Bollana</h2>
				<h2>Calligraphy</h2>
				<p>Discover great calligraphy and meet Amy
Bollana. From custom bookmarks to
prints we have you covered.</p>
			<a href="">Learn More</a>
			<a href="">Contact</a>
			</div>
		</div>
		<div>
			<div>
				<img src="../inc/img/amybollanaprofile.png" alt="">
				<h2>Amy Bollana</h2>
			</div>
			<div>
				<p>Welcome to Amy Bollana, I am Amy a 
designer  and a modern calligrapher 
in Sherwood Park, Alberta. I love making 
words look beautiful on their own, in a
quote or with amazing images.</p>
				<p>If you need design calligraphy, or hand
lettering for your business, special 
event or for a gift. I can help you get
 your message just right!</p>
			</div>
		</div>
		<section>
			<h2>Testimonials</h2>
			<div></div>
				<div>
					<img src="" alt="">
					<h3></h3>
					<p></p>
				</div>
				<div>
					<img src="" alt="">
					<h3></h3>
					<p></p>
				</div>
				<div>
					<img src="" alt="">
					<h3></h3>
					<p></p>
				</div>
				


			</div>
		</section>
		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
