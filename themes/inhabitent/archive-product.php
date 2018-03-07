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
                <header class="page-header">
                    <h1> shop stuff </h1> 
                    <ul class="product-type-list"> 
                    <?php $terms = get_terms(array('taxonomy'=>'product_type','')) ?>
                    <?php if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) : ?>
                        <?php 
                            foreach ( $terms as $term ){
                            echo '<li><p><a href="'.get_term_link($term->term_taxonomy_id).'">'. $term->name . '</a><p></li>';
                            }
                        ?>
                    <?php endif; ?>
                    </ul>
                </header>
                <!-- .page-header -->
            

                <div class="product-grid"> 
                    <?php 
                        $arg = array('numberposts' => 16,'post_type' => 'product', 'order' => 'DESC');
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
            </div>

        </main>
        <!-- #main -->
    </div>
    <!-- #primary -->

    <?php get_footer(); ?>