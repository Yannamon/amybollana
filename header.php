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
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400&display=swap" rel="stylesheet">
	<style>
			.themecolorone{
			background-color: #A5C2A6;
			}
			
			@media screen and (max-width: 768px) {
				nav>ul {
					display: flex;
					justify-content: center;
				}
				.text-nav {
					color: #fff;
				}
				
				
			}
		</style>
                
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'amybollana' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/') ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$amybollana_description = get_bloginfo( 'description', 'display' );
			if ( $amybollana_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $amybollana_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

<nav id="site-navigation" class="main-navigation navbar navbar-dark themecolorone">
			<!--<2button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php /*esc_html_e( 'Primary Menu', 'amybollana' );*/ ?></2button> -->
		
	<nav class="navbar navbar-expand-lg navbar-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
		<img src="<?php echo get_template_directory_uri(); ?>/inc/amybollana-logo.png" alt="amybollana-logo" width="100" height="100">
	</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
      <ul class="navbar-nav">
		<li class="nav-item">
		  <a class="nav-link active" aria-current="page" href="<?php echo esc_url( get_permalink()) ?>">Home</a>
		</li>
		<li class="nav-item">
		  <a class="nav-link active" aria-current="page" href="<?php echo esc_url(home_url('template-parts/page-aboutamy.php')); ?>">About</a>
		</li>
		<li class="nav-item">
		  <a class="nav-link active" aria-current="page" href="#">Portfolio</a>
		</li>
		<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="true">
            Course
          </a>
          <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarDarkDropdownMenuLink">
            <li><a class="dropdown-item" href="#">FAQ</a></li>
            <li><a class="dropdown-item" href="#">About the course</a></li>
          </ul>
        </li>
		<li class="nav-item">
		  <a class="nav-link active" aria-current="page" href="#">Contact</a>
		</li>
      </ul>
    </div>
  </div> -->
</nav>

			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
					'menu' => 'primary',
					'items_wrap' => '<ul id="%1$s" class="navbar-nav">%3$s</ul>'
				)
			);
			?> 
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
