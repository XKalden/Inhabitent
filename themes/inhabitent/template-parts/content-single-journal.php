<?php
/**
 * Template part for displaying single posts.
 *
 * @package RED_Starter_Theme
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'full' ); ?>
		<?php endif; ?>

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta">
			<?php red_starter_posted_on(); ?> / <?php red_starter_comment_count(); ?> / <?php red_starter_posted_by(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
        <?php the_content(); ?>
        
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<span class="cat-links">
            Posted in &rarr;
            <?php 
                $categories = get_the_category();
                foreach($categories as $category){
                    echo '<a href="'.get_category_link( $category->term_id ).'">'. $category->name .', </a>';
                }
            ?>
        </span>
        <span class="tag-links">
            Tagged &rarr;
            <?php 
                $tags = get_the_tags();
                foreach($tags as $tag){
                    echo '<a href="'.get_term_link( $tag->term_id ).'">'. $tag->name .', </a>';
                }
            ?>
        </span>
        
        <div class="social">
                <a type="button" class="black-btn" id="fb" href="http://facebook.com" target="_blank">Like</a>
                <a type="button" class="black-btn" id="twitter" href="http://instagram.com" target="_blank">tweet</a>
                <a type="button" class="black-btn" id="pinterest" href="http://pinterest.com" target="_blank">Pin</a>
        </div>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
