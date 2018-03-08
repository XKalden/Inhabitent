<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="entry-header">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			</div>

			<div class="entry-content"> 
				<iframe
					width="600"
					height="450"
					frameborder="0" style="border:0"
					src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDWP_pLEwWYQpc00qEHRkjzMZ8WyhiUNRU
						&q=1490+W+Broadway,+Vancouver,+BC+V6H" allowfullscreen>
				</iframe>
				<?php echo '<h2>'.CFS()->get('find_us_title').'</h2>';?>
				<?php echo '<p>'.CFS()->get('find_us_content').'</p>';?>
			</div>
			
			<h1 class="entry-title">send us email!</h1>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
			<?php the_content(); ?>

		<?php
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
		?>
		
		<?php endwhile; endif?>

	
			

		</main><!-- #main -->
	</div><!-- #primary -->

	<div id="secondary" class="widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar-footer' ); ?>
	</div>
	<?php get_footer(); ?>
