<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>    

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
            <div class="container"> 
                <?php if ( have_posts() ) : ?>

                    <header class="page-header">
                        <h1 class="page-title">Latest Adventures</h1> 
                    </header><!-- .page-header -->


                    <div class="adventure-grid">
                        <?php 
                            $arg = array('numberposts' => -1, 'post_type' => 'adventure', 'order' => 'DESC');
                            $adventure_posts = get_posts( $arg );
                        ?>
                        <?php foreach( $adventure_posts as $post ) : setup_postdata( $post ) ?>
                        <?php 
                                echo '<div class="adventure-grid-item" style="background:url(\''. get_the_post_thumbnail_url( $post->ID).'\')no-repeat center;background-size:cover">';
                                    echo '<div class="story-wrapper"><div class="story-info">';
                                        echo '<h2 class="entry-title"><a href="'.get_post_permalink( $post->ID).'">'. $post->post_title .'</a></h2>';
                                        echo '<a class="white-btn" href="'.get_post_permalink( $post->ID).'"> Read More </a>';
                                    echo '</div></div>';
                                echo '</div>';
                        ?>
                        <?php endforeach?>
                    </div>

                <?php else : ?>

                    <?php get_template_part( 'template-parts/content', 'none' ); ?>

                <?php endif; ?>
            </div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
