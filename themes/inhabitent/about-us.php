<?php /* Template Name: About Us Template */


get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>


				<h2>Our Story</h2>
				<?php echo CFS()->get('our-story');?>
				<h2>Our team</h2>
				<?php echo CFS()->get('our-team');?>
			

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>



		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
