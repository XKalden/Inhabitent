<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<link rel="stylesheet" type="text/css" href=<?php echo get_template_directory_uri()."/build/css/style.min.css"?> /> 

	<?php wp_head(); ?>
	</head>

	<body class="blog">
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header" role="banner">
				<div class="container">
					<div class="site-branding">
						<div class="logo">
							<a href= <?php echo '"'.get_home_url() .'"';?> rel="home">
								<h1 class="site-title"> Inhabitent</h1> 
							</a>
						</div>
					</div><!-- .site-branding -->

					<nav id="site-navigation" class="main-navigation clearfix" role="navigation">
						<div class="menu-main-navigation-container">
							<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
						</div>
						<?php get_search_form(); ?>
					</nav><!-- #site-navigation -->
				</div>
			</header><!-- #masthead -->

			<div id="content" class="site-content">

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					get_template_part( 'template-parts/content','journal' );
				?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

	<div id="secondary" class="widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar-footer' ); ?>
	</div>
<?php get_footer(); ?>
