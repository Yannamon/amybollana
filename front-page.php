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
				<h2 class="sr-only">Home top section</h2>
				<p class="d-flex justify-content-center home-par">Discover great calligraphy and meet Amy
					Bollana. From custom bookmarks to
					prints we have you covered.</p>
			</div>
		</section>
		<section class="home-margin">
			<div class="container home-flex mb-3">
				<div class="front-home-profile">
					<img src="https://amybollana.web.dmitcapstone.ca/wp-content/uploads/2023/04/Profile-Pic-1.webp"
						alt="Amy Bollana profile">
				</div>
				<div class="home-about">
					<h2 class="headerfont mt-2 mb-4">Amy Bollana</h2>
					<p>Welcome to Amy Bollana, I am Amy a
						designer and a modern calligrapher
						in Sherwood Park, Alberta. I love making
						words look beautiful on their own, in a
						quote or with amazing images.</p>
					<p>If you need design calligraphy, or hand
						lettering for your business, special
						event or for a gift. I can help you get
						your message just right!</p>
					<div class="container">
						<a class="home-button btn" href="https://amybollana.web.dmitcapstone.ca/about-amy/">About Amy</a>
						<a class="home-button btn" href="https://amybollana.web.dmitcapstone.ca/contact/">Contact</a>
					</div>
				</div>
			</div>
		</section>
		<section class="home-port">
			<div class="container pt-1">
				<h2>Calligraphy | Engraving | Illustration</h2>
				<p>Say hello to some of Amy's World</p>
				<a class="home-button-second" href="https://amybollana.web.dmitcapstone.ca/portfolio/">Portfolio</a>
			</div>
		</section>
		<section class="container mb-4">
			<h2 class="sr-only">Home galery</h2>

			<div class="row home-gal-cont">
				<div class="col-lg-6">
					<img src="https://amybollana.web.dmitcapstone.ca/wp-content/uploads/2023/04/IMG_8277-scaled-2.webp"
						alt="green glass engraving from Amy Bollana Design">
				</div>
				<div class="col-lg-6">
					<img src="https://amybollana.web.dmitcapstone.ca/wp-content/uploads/2023/04/IMG_8265-scaled-1.webp"
						alt=" bleu perfume with angraving">
				</div>
			</div>
			<div class="row home-gal">
				<div class="col-lg-3">
					<img src="https://amybollana.web.dmitcapstone.ca/wp-content/uploads/2023/04/Faith-is-Cross-mockups-scaled-1.webp"
						alt="cross shaped calligraphy">
				</div>
				<div class="col-lg-3">
					<img src="https://amybollana.web.dmitcapstone.ca/wp-content/uploads/2023/04/IMG_7685-scaled-1.jpg"
						alt="engraving on wood">
				</div>
				<div class="col-lg-3 home-gal-big">
					<img src="https://amybollana.web.dmitcapstone.ca/wp-content/uploads/2023/04/House-Illustration-Jenna-scaled-1.webp"
						alt="illustration of an house">
				</div>
				<div class="col-lg-3">
					<img src="https://amybollana.web.dmitcapstone.ca/wp-content/uploads/2023/04/IMG_6824-scaled-1.webp"
						alt="different colour wood with engraving">
				</div>
		</section>
	<section>
		<div class="container home-sec-nav">
			<a href=" <?php echo get_permalink(get_page_by_path('about-amy')); ?>">
				<div>
					<img src="https://amybollana.web.dmitcapstone.ca/wp-content/uploads/2023/04/il_794xN.2352517592_4984.webp"
						alt="card with heart shape">
					<h3>About</h3>
				</div>
			</a>
			<a href="<?php echo get_permalink(get_page_by_path('portfolio')); ?>">
				<div>
					<img src="https://amybollana.web.dmitcapstone.ca/wp-content/uploads/2023/04/il_794xN.2087262002_ra0x.webp"
						alt="frame with hello calligraphy">
					<h3>Portfolio</h3>
				</div>
			</a>

			<a href="<?php echo get_permalink(get_page_by_path('course')); ?>">
				<div>
					<img src="https://amybollana.web.dmitcapstone.ca/wp-content/uploads/2023/04/il_794xN.3090994128_8q4l.webp"
						alt="sketch with hope calligraphy">
					<h3>Course</h3>
				</div>
			</a>

			<a href="<?php echo get_permalink(get_page_by_path('contact')); ?>">
				<div>
					<img src="https://amybollana.web.dmitcapstone.ca/wp-content/uploads/2023/04/il_794xN.2321811031_gpvx.webp"
						alt="loved bookmark">
					<h3>Contact</h3>
				</div>
			</a>

			<a href="https://www.etsy.com/ca/shop/AmyBollanaDesign">
				<div>
					<img src="https://amybollana.web.dmitcapstone.ca/wp-content/uploads/2023/04/IMG_4276.webp"
						alt="stone engraving">
					<h3>Shop Now</h3>
				</div>
			</a>
		</div>
		
	</section>
	</main><!-- #main -->
</body>

</html>

<?php
get_footer();