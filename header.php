<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package amybollana
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description"
		content="Amy Bollana design is an alberta base non-profite organization that creates modern calligraphy and hand lettering for your business, special event or for custom gifts." />
	<meta name="keywords"
		content="calligraphy, lettering, engraving, stone engraving, glass engraving, special event, design, Edmonton, Alberta, Canada, bookmarks, prints, gift, custom gift,illustrations" />
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
		crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;600&display=swap" rel="stylesheet">



	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary">
			<?php esc_html_e('Skip to content', 'amybollana'); ?>
		</a>

		<header id="masthead" class="site-header">
			<div class="site-branding">
				<?php
				the_custom_logo();
				if (is_front_page() && is_home()):
					?>
					<h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
					<?php
				else:
					?>
					<p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p>
					<?php
				endif;
				$amybollana_description = get_bloginfo('description', 'display');
				if ($amybollana_description || is_customize_preview()):
					?>
					<p class="site-description">
						<?php echo $amybollana_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
					</p>
				<?php endif; ?>
			</div><!-- .site-branding -->


			<!--<2button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php /*esc_html_e( 'Primary Menu', 'amybollana' );*/?></2button> -->


			<nav id="site-navigation" class="main-navigation">
				<div class="nav-flex">
					<a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
						<img src="<?php echo get_template_directory_uri(); ?>/inc/amybollana-logo.png"
							alt="amybollana-logo" class="logo">
					</a>

					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
						<span class="menu-toggle-icon"></span>
						<span class="menu-toggle-icon"></span>
						<span class="menu-toggle-icon"></span>
					</button>
				</div>
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id' => 'primary-menu',
						'menu' => 'primary',
						'container_class' => 'nav-menu',
						'items_wrap' => '<div id="%1$s" class="%2$s">%3$s</div>'
					)
				);

				?>
			</nav><!-- #site-navigation -->

		</header><!-- #masthead -->