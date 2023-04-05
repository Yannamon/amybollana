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
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
	<title>Home-AmyBollana</title>
</head>
<body>
<main id="primary" class="site-main">
		<section>
		<div class="d-flex justify-content-center text-light themecolorone">
			<div>
				<img src="./bollana-banner.png" alt="">
			</div>
			<div class="">
				<div class="centre pb-5">
					<h2 class="headerfont">Amy Bollana</h2>
					<h2 class="headerfont">Calligraphy</h2>
					<p>Discover great calligraphy and meet Amy
					Bollana. From custom bookmarks to
					prints we have you covered.</p>
					<a class="button-pink" href="">Learn More</a>
					<a class="button-pink" href="">Contact</a>
				</div>
			</div>
		</div>
		</section>
		<section>
		<div class="container centre">
			<div>
				<img src="../inc/img/amybollanaprofile.png" alt="">
				<h2 class="headerfont">Amy Bollana</h2>
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
		</section>
		<section class="themecolorone">
			<h2 class="container headerfont bigheader mt-3">Testimonials</h2>
			<div class="container horizontal-content gap-3">
				<div class="cardborder d-flex-sm cardtest">
					<img src="" alt="">
					<p class="p-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae eius rem animi iure nihil voluptate? Dolorem sint ea suscipit eum </p>
				</div>
				<div class="cardborder d-flex-sm cardtest">
					<img src="" alt="">
					<p class="p-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse nostrum a natus cum facere amet at nemo tempore ab, eum dolores libero</p>
				</div>
				<div class="cardborder d-flex-sm cardtest">
					<img src="" alt="">
					<p class="p-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod ut dicta doloremque iste voluptates, odit facilis non, quisquam accusantium </p>
				</div>
				<div class="cardborder d-flex-sm cardtest">
					<img src="" alt="">
					<p class="p-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod ut dicta doloremque iste voluptates, odit facilis non, quisquam accusantium </p>
				</div>
			</div>
		</section>
		<div class="container centre">
			<div>
				<img src="" alt="">
				<h3>About</h3>
			</div>
			<div>
				<img src="" alt="">
				<h3>Portfolio</h3>
			</div>
			<div>
				<img src="" alt="">
				<h3>Course</h3>
			</div>
			<div>
				<img src="" alt="">
				<h3>Contact</h3>
			</div>
			<div>
				<img src="" alt="">
				<h3>Shop Now</h3>
			</div>
		</div>	
</body>
</html>
	
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
