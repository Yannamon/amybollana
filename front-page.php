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
    <title>Home-AmyBollana</title>
</head>
<body>
    
	<main id="primary" class="site-main">
		<section>
			<div class="container">
			   <h1 class="sr-only">Amy Bollana</h1>
				<p class="d-flex justify-content-center home-par">Discover great calligraphy and meet Amy
					Bollana. From custom bookmarks to
					prints we have you covered.</p>
				</div>
			
		</div>
		</section>
		<section>
		<div class="container home-flex mb-3">
			<div class="front-home-profile">
				<img src="https://amybollana.web.dmitcapstone.ca/wp-content/uploads/2023/04/Profile-Pic-1.png" alt="">
			</div>
			<div class="home-about">
				<h2 class="headerfont mt-2 mb-4">Amy Bollana</h2>
				<p>Welcome to Amy Bollana, I am Amy a 
				designer  and a modern calligrapher 
				in Sherwood Park, Alberta. I love making 
				words look beautiful on their own, in a
				quote or with amazing images.</p>
				<p>If you need design calligraphy, or hand
				lettering for your business, special 
				event or for a gift. I can help you get
 				your message just right!</p>
				<div class="container">
					<a class="home-button" href="">Learn More</a>
					<a class="home-button" href="">Contact</a>
				</div>
			</div>
		</div>
		</section>
		<section class="home-port">
			<div class="container"></div>
			<h2>Calligraphy | Engraving | Illustration</h2>
			<p>Say hello to some of Amy's Workl</p>
			<a class="home-button-second" href="">Portfolio</a>
		</section>
		<section class="container">
			<div class="row">
				<div class="col col-lg-6">
					<img src="https://amybollana.web.dmitcapstone.ca/wp-content/uploads/2023/03/IMG_8177.jpg" alt="">
				</div>
				<div class="col col-lg-6">
					<img src="https://amybollana.web.dmitcapstone.ca/wp-content/uploads/2023/03/IMG_8267-2.jpg" alt="">
				</div>
			</div>
			<div class="row">
				<div class="col col-lg-3">
					<img src="https://amybollana.web.dmitcapstone.ca/wp-content/uploads/2023/03/Faith-is-Cross-mockups-scaled.jpg" alt="">
				</div>
				<div class="col col-lg-3">
					<img src="https://amybollana.web.dmitcapstone.ca/wp-content/uploads/2023/03/IMG_7685-scaled.jpg" alt="">
				</div>
				<div class="col col-lg-3">
					<img src="https://amybollana.web.dmitcapstone.ca/wp-content/uploads/2023/03/House-Illustration-Jenna-scaled.jpg" alt="">
				</div>
				<div class="col col-lg-3">
					<img src="https://amybollana.web.dmitcapstone.ca/wp-content/uploads/2023/03/IMG_6824-scaled.jpg" alt="">
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
		<div class="container home-sec-nav centre">
			<div>
				<img src="https://amybollana.web.dmitcapstone.ca/wp-content/uploads/2023/04/il_794xN.2352517592_4984.jpg" alt="">
				<h3>About</h3>
			</div>
			<div>
				<img src="https://amybollana.web.dmitcapstone.ca/wp-content/uploads/2023/04/il_794xN.3090994128_8q4l.jpg" alt="">
				<h3>Portfolio</h3>
			</div>
			<div>
				<img src="https://amybollana.web.dmitcapstone.ca/wp-content/uploads/2023/04/il_794xN.2321811031_gpvx.jpg" alt="">
				<h3>Course</h3>
			</div>
			<div>
				<img src="https://amybollana.web.dmitcapstone.ca/wp-content/uploads/2023/04/il_794xN.2087262002_ra0x.jpg" alt="">
				<h3>Contact</h3>
			</div>
			<div>
				<img src="https://amybollana.web.dmitcapstone.ca/wp-content/uploads/2023/03/IMG_4276.jpg" alt="">
				<h3>Shop Now</h3>
			</div>
		</div>
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
</body>
</html>

<?php
get_sidebar();
get_footer();
