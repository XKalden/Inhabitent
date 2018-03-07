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
                        <?php
                            $title=explode(':',get_the_archive_title(),2);
                            $title=end($title);
                            echo '<h1 class="page-title">'.$title.'</h1>';

                            the_archive_description( '<div class="taxonomy-description"><p>', '</p></div>' );
                        ?>
                    </header><!-- .page-header -->

                    <div class="product-grid"> 
                    <?php 
                        $arg = array('numberposts' => -1,'post_type' => 'product', 'order' => 'DESC','product_type'=>$title);
                        $product_posts = get_posts( $arg );
                    ?> 
                    <?php foreach( $product_posts as $post ) : setup_postdata( $post ) ?>
                    <?php
                        echo '<div class="product-grid-item">';
                            echo '<a href="'. get_post_permalink($post->id) .'"style="background:url(\''. get_the_post_thumbnail_url( $post->ID).'\')no-repeat center;background-size:cover"></a>';
                            echo '<div class="product-info">';
                                echo '<h2 class="entry-title">'.$post->post_title.'</h2>';
                                echo '<span class="price">$'.CFS()->get('price').'</span>';        
                            echo '</div>';
                        echo '</div>';
                    ?>                
                    <?php endforeach?>
                </div>

                <?php endif; ?>
            </div> 
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
