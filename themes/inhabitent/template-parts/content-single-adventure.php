<?php
/**
 * Template part for displaying posts.
 *
 * @package RED_Starter_Theme
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'full' ); ?>
		<?php endif; ?>

            <?php 
                the_title( '<h1 class="entry-title container">', '</h1>' ); 
            ?>

        <div class="entry-meta container">
			<?php  red_starter_posted_by(); ?>
		</div><!-- .entry-meta -->

            <div class="entry-content container">
                <?php the_content(); ?>
            </div><!-- .entry-content -->

            <footer class="entry-footer container">
            <div class="social">
                <a type="button" class="black-btn" id="fb" href="http://facebook.com" target="_blank">Like</a>
                <a type="button" class="black-btn" id="twitter" href="http://instagram.com" target="_blank">tweet</a>
                <a type="button" class="black-btn" id="pinterest" href="http://pinterest.com" target="_blank">Pin</a>
            </div>
            </footer>

    </header><!-- .entry-header -->
</article><!-- #post-## -->
