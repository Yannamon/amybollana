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
        <main id="primary" class="site-main">
        <section>
            <h1>Portfolio</h1>
        <section>
            <div class="tab-navigation">
                <button class="tab-button active" data-filter="category-1">Calligraphy</button>
                 <button class="tab-button" data-filter="category-2">Engraving</button>
                 <button class="tab-button" data-filter="category-3">Illustration</button>
            </div>
            <div class="tab-content port-img container">
                <div class="row">
                 <div class="tab-item category-1 col"><img src="https://amybollana.web.dmitcapstone.ca/wp-content/uploads/2023/03/IMG_6821.jpg" alt=""></div>
                 <div class="tab-item category-1 col"><img src="https://amybollana.web.dmitcapstone.ca/wp-content/uploads/2023/03/IMG_5465.jpg" alt=""></div>
                <div class="tab-item category-1 col"><img src="https://amybollana.web.dmitcapstone.ca/wp-content/uploads/2023/03/IMG_5462.jpg" alt=""></div>
                <div class="tab-item category-1 col"><img src="https://amybollana.web.dmitcapstone.ca/wp-content/uploads/2023/03/Faith-is-Cross-mockups-scaled.jpg" alt=""></div>
                <div class="tab-item category-1 col"><img src="https://amybollana.web.dmitcapstone.ca/wp-content/uploads/2023/03/251095519_280627210646420_7594947262000054359_n.jpg" alt=""></div>
                <div class="tab-item category-1 col"><img src="https://amybollana.web.dmitcapstone.ca/wp-content/uploads/2023/03/Screen-Shot-2021-04-19-at-1.18.41-PM.png" alt=""></div>
                 <div class="tab-item category-1 col"><img src="https://amybollana.web.dmitcapstone.ca/wp-content/uploads/2023/03/Proverbs-2-mockups2.jpg" alt=""></div>
                <div class="tab-item category-2 col"><img src="https://amybollana.web.dmitcapstone.ca/wp-content/uploads/2023/03/IMG_4276.jpg" alt=""></div>
                <div class="tab-item category-2 col"><img src="https://amybollana.web.dmitcapstone.ca/wp-content/uploads/2023/03/IMG_8265.jpg" alt=""></div>
                <div class="tab-item category-2 col"><img src="https://amybollana.web.dmitcapstone.ca/wp-content/uploads/2023/03/IMG_8267-2.jpg" alt=""></div>
                <div class="tab-item category-2 col"><img src="https://amybollana.web.dmitcapstone.ca/wp-content/uploads/2023/03/IMG_8269.jpg" alt=""></div>
                <div class="tab-item category-2 col"><img src="https://amybollana.web.dmitcapstone.ca/wp-content/uploads/2023/03/IMG_7685-scaled.jpg" alt=""></div>
                <div class="tab-item category-2 col"><img src="https://amybollana.web.dmitcapstone.ca/wp-content/uploads/2023/03/IMG_8277.jpg" alt=""></div>
                <div class="tab-item category-2 col"><img src="https://amybollana.web.dmitcapstone.ca/wp-content/uploads/2023/03/20230120_114925.jpg" alt=""></div>
                <div class="tab-item category-2 col"><img src="https://amybollana.web.dmitcapstone.ca/wp-content/uploads/2023/03/IMG_8177.jpg" alt=""></div>
                <div class="tab-item category-2 col"><img src="https://amybollana.web.dmitcapstone.ca/wp-content/uploads/2023/03/IMG_7396.jpg" alt=""></div>
                <div class="tab-item category-2 col"><img src="https://amybollana.web.dmitcapstone.ca/wp-content/uploads/2023/03/IMG_7913.jpg" alt=""></div>
                <div class="tab-item category-2 col"><img src="https://amybollana.web.dmitcapstone.ca/wp-content/uploads/2023/03/IMG_6824.jpg" alt=""></div>
                <div class="tab-item category-2 col"><img src="https://amybollana.web.dmitcapstone.ca/wp-content/uploads/2023/03/IMG_4297.jpg" alt=""></div>
                <div class="tab-item category-3 col"><img src="https://amybollana.web.dmitcapstone.ca/wp-content/uploads/2023/03/IMG_4283.jpg" alt=""></div>
                <div class="tab-item category-3 col"><img src="https://amybollana.web.dmitcapstone.ca/wp-content/uploads/2023/03/House-Illustration-Mock-up3.jpg" alt=""></div>
                <div class="tab-item category-3 col"><img src="https://amybollana.web.dmitcapstone.ca/wp-content/uploads/2023/03/House-Illustration-Mock-up2.jpg" alt=""></div>
                <div class="tab-item category-3 col"><img src="https://amybollana.web.dmitcapstone.ca/wp-content/uploads/2023/03/House-Illustration-Mock-up-scaled.jpg" alt=""></div>
                <div class="tab-item category-3 col"><img src="https://amybollana.web.dmitcapstone.ca/wp-content/uploads/2023/03/House-Illustration-Jenna-scaled.jpg" alt=""></div>
            </div>
</div>

        </section>
        </section>
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
get_sidebar();
get_footer();
