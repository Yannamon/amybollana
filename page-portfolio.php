<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
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
        <title>Portfolio-amybollana</title>
    </head>
    <body>
      <?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
        <main id="primary" class="site-main">
            <h1 class="sr-only">Portfolio</h1>
             <section>
            <h2 class="sr-only">Portfolio navigation</h2>

            <div class="tab-navigation">
                <button class="tab-button active" data-filter="category-1">Calligraphy</button>
                 <button class="tab-button" data-filter="category-2">Engraving</button>
                 <button class="tab-button" data-filter="category-3">Illustration</button>
            </div>
            <div class="tab-content port-img container">
                <div class="row gap-4">
                 <div class="tab-item category-1 port-img-gal-one col-lg-4"><div class="col col-sm-4"><img src="https://amybollana.web.dmitcapstone.ca/wp-content/uploads/2023/04/IMG_6821-scaled-1.jpg" alt="Calligraphy abc"></div></div>
                 <div class="tab-item category-1 port-img-gal-one col-lg-4"><div class="col col-sm-4"><img src="https://amybollana.web.dmitcapstone.ca/wp-content/uploads/2023/04/Faith-is-Cross-mockups-scaled-1.webp" alt="Calligraphy cross shape"></div></div>
                <div class="tab-item category-1 port-img-gal-one col-lg-4"><div class="col col-sm-4"><img src="https://amybollana.web.dmitcapstone.ca/wp-content/uploads/2023/04/IMG_7408-scaled-1.jpg" alt="Calligraphy poem"></div></div>
                <div class="tab-item category-1 port-img-gal-one col-lg-4"><div class="col col-sm-4"><img src="https://amybollana.web.dmitcapstone.ca/wp-content/uploads/2023/04/Proverbs-2-mockups2-scaled-1.webp" alt="Calligraphy portrait frame"></div></div>
                <div class="tab-item category-1 port-img-gal-one col-lg-4"><div class="col col-sm-4"><img src="https://amybollana.web.dmitcapstone.ca/wp-content/uploads/2023/04/IMG_7434.webp" alt="Group Calligraphy portrait frame"></div></div>
                <div class="tab-item category-1 port-img-gal-one col-lg-4"><div class="col col-sm-4"><img src="https://amybollana.web.dmitcapstone.ca/wp-content/uploads/2023/03/Screen-Shot-2021-04-19-at-1.18.41-PM.png" alt="grateful calligraphy"></div></div>
                 <div class="tab-item category-1 port-img-gal-one col-lg-4"><div class="col col-sm-4"><img src="https://amybollana.web.dmitcapstone.ca/wp-content/uploads/2023/04/IMG_5462-scaled-1.webp" alt="hand writen calligraphy"></div></div>
                <div class="tab-item category-2 port-img-gal-one"><div class="col col-sm-4 col-lg-3"><img src="https://amybollana.web.dmitcapstone.ca/wp-content/uploads/2023/04/IMG_4276.webp" alt="engraving calligrahpy on stone"></div></div>
                <div class="tab-item category-2 port-img-gal-one"><div class="col col-sm-4 col-lg-3"><img src="https://amybollana.web.dmitcapstone.ca/wp-content/uploads/2023/04/IMG_8177.webp" alt="engraving calligraphy on champagne"></div></div>
                <div class="tab-item category-2 port-img-gal-one"><div class="col col-sm-4 col-lg-3"><img src="https://amybollana.web.dmitcapstone.ca/wp-content/uploads/2023/04/IMG_8265-scaled-1.webp" alt="engraving calligraphy on perfume"></div></div>
                <div class="tab-item category-2 port-img-gal-one"><div class="col col-sm-4 col-lg-3"><img src="https://amybollana.web.dmitcapstone.ca/wp-content/uploads/2023/04/IMG_8277-scaled-2.webp" alt="engraving calligraphy on glass bottle"></div></div>
                <div class="tab-item category-2 port-img-gal-one"><div class="col col-sm-4 col-lg-3"><img src="https://amybollana.web.dmitcapstone.ca/wp-content/uploads/2023/04/IMG_7685-scaled-1.webp" alt="engraving calligraphy on wood"></div></div>
                <div class="tab-item category-2 port-img-gal-one"><div class="col col-sm-4 col-lg-3"><img src="https://amybollana.web.dmitcapstone.ca/wp-content/uploads/2023/04/IMG_8267-2.webp" alt="second engraving calligraphy on perfume"></div></div>
                <div class="tab-item category-2 port-img-gal-one"><div class="col col-sm-4 col-lg-3"><img src="https://amybollana.web.dmitcapstone.ca/wp-content/uploads/2023/04/IMG_8269.webp" alt="engraving calligraphy on glass candle"></div></div>
                <div class="tab-item category-2 port-img-gal-one"><div class="col col-sm-4 col-lg-3"><img src="https://amybollana.web.dmitcapstone.ca/wp-content/uploads/2023/04/IMG_8109.webp" alt="engraving calligraphy on mug"></div></div>
                <div class="tab-item category-2 port-img-gal-one"><div class="col col-sm-4 col-lg-3"><img src="https://amybollana.web.dmitcapstone.ca/wp-content/uploads/2023/04/IMG_7913-scaled-1.webp" alt=" third engraving calligraphy on perfume"></div></div>
                <div class="tab-item category-2 port-img-gal-one"><div class="col col-sm-4 col-lg-3"><img src="https://amybollana.web.dmitcapstone.ca/wp-content/uploads/2023/04/20230120_114925-scaled-1.webp" alt="blue engraving calligraphy on glass bottle"></div></div>
                <div class="tab-item category-2 port-img-gal-one"><div class="col col-sm-4 col-lg-3"><img src="https://amybollana.web.dmitcapstone.ca/wp-content/uploads/2023/04/IMG_6824-scaled-1.webp" alt="different colour wood with engraving"></div></div>
                <div class="tab-item category-2 port-img-gal-one"><div class="col col-sm-4 col-lg-3"><img src="https://amybollana.web.dmitcapstone.ca/wp-content/uploads/2023/04/IMG_7396-scaled-1.webp" alt="circular glass engraving"></div></div>
                <div class="tab-item category-2 port-img-gal-one"><div class="col col-sm-4 col-lg-3"><img src="https://amybollana.web.dmitcapstone.ca/wp-content/uploads/2023/04/IMG_4297-scaled-1.webp" alt="engraving on wood"></div></div>
                <div class="tab-item category-3 port-img-gal-one"><div class="col col-sm-4 col-lg-3"><img src="https://amybollana.web.dmitcapstone.ca/wp-content/uploads/2023/04/House-Illustration-Mock-up2-scaled-1-1.webp" alt="illustration house one"></div></div>
                <div class="tab-item category-3 port-img-gal-one"><div class="col col-sm-4 col-lg-3"><img src="https://amybollana.web.dmitcapstone.ca/wp-content/uploads/2023/04/House-Illustration-Mock-up3-scaled-1.webp" alt="illustration house two"></div></div>
                <div class="tab-item category-3 port-img-gal-one"><div class="col col-sm-4 col-lg-3"><img src="https://amybollana.web.dmitcapstone.ca/wp-content/uploads/2023/04/House-Illustration-Mock-up-scaled-1.webp" alt="illustration house three"></div></div>
                <div class="tab-item category-3 port-img-gal-one"><div class="col col-sm-4 col-lg-3"><img src="https://amybollana.web.dmitcapstone.ca/wp-content/uploads/2023/04/House-Illustration-Jenna-scaled-1.webp" alt="illustration house four"></div></div>
            </div>
           </div>

        </section>
		
        <script>
            const buttons = document.querySelectorAll('.tab-button');
const items = document.querySelectorAll('.tab-item');

// Add "active" class to first button by default
buttons[0].classList.add('active');

// Show content for first button by default
const filter = buttons[0].getAttribute('data-filter');

items.forEach(item => {
  if (filter === 'all') {
    item.classList.add('show');
  } else if (item.classList.contains(filter)) {
    item.classList.add('show');
  } else {
    item.classList.remove('show');
  }
});

buttons.forEach(button => {
  button.addEventListener('click', () => {
    buttons.forEach(button => button.classList.remove('active'));
    button.classList.add('active');
    
    const filter = button.getAttribute('data-filter');
    
    items.forEach(item => {
      if (filter === 'all') {
        item.classList.add('show');
      } else if (item.classList.contains(filter)) {
        item.classList.add('show');
      } else {
        item.classList.remove('show');
      }
    });
  });
});

</script>

	</main><!-- #main -->

    </body>
    </html>
	
<?php
get_footer();
