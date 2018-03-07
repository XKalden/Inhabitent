<?php
/**
 * Template part for displaying single posts.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <?php if ( has_post_thumbnail() ) : ?>
            <div class="product-image-wrapper">
                <?php the_post_thumbnail( 'large' ); ?>
            </div>
		<?php endif; ?>

	<div class="product-content-wrapper">
        <div class="entry-header">
            <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
        </div>
        <div class="entry-content">
            <?php echo '<p class="price">$'.CFS()->get('price').'</p>';?>
            <?php the_content(null,true); ?>
            <div class="social">
                <a type="button" class="black-btn" id="fb" href="http://facebook.com" target="_blank">Like</a>
                <a type="button" class="black-btn" id="twitter" href="http://instagram.com" target="_blank">tweet</a>
                <a type="button" class="black-btn" id="pinterest" href="http://pinterest.com" target="_blank">Pin</a>
            </div>
        </div> 
    </div>

	<footer class="entry-footer">
		<?php red_starter_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
