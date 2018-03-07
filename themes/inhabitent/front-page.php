<?php
/**
 * Front_page
 *
 * @package RED_Starter_Theme
 */
get_header(); ?>
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            <section class="home-hero">
                <img src=<?php echo get_template_directory_uri()."/images/logos/inhabitent-logo-full.svg"?> class="logo" alt="Inhabitent full logo" /> 
            </section> 

            <section class="product-info container">
                <h2> Shop Stuff </h2> 
                <div class="product-type-blocks">
                <?php $terms = get_terms(array('taxonomy'=>'product_type','')) ?>
                <?php if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) : ?>
                    <?php foreach ( $terms as $term ){
                        echo '<div class="product-type-block-wrapper">';
                        echo '<img src="'. get_template_directory_uri() . '/images/product-type-icons/' . $term->name . '.svg" />' ;
                        echo '<p>'. $term->description . '</p>';
                        echo '<p><a href="'.get_term_link($term->term_taxonomy_id).'" class="btn">'. $term->name. ' Stuff </a> </p>';
                        echo '</div>';
                    }
                    ?>
                <?php endif; ?>
                </div>
            </section>

            <section class="latest-entries"> 
                <div class="container"> 
                    <h2> Inhabitent Journal </h2>
                    <ul>
                    <?php 
                        $arg = array('numberposts' => 3, 'post_type' => 'post', 'order' => 'DESC');
                        $journal_posts = get_posts( $arg );
                    ?>
                    <?php
                        foreach ( $journal_posts as $post ) : setup_postdata( $post );
                    ?>
                    <?php
                            echo '<li>';
                                echo '<div class="thumbnail-wrapper">'. get_the_post_thumbnail($post->ID) .'</div>';
                                    echo '<div class="post-info-wrapper"> ';
                                        echo '<span class="entry-meta">';
                                            echo '<span class="post-on">';
                                                echo get_the_modified_date('', $post->ID );
                                            echo '</span>';
                                        echo ' / ' . $post->comment_count . ' Comments';
                                    echo '</span>';
                                    echo '<h3 class="entry-title"><a href="'.get_post_permalink( $post->ID).'">'. $post->post_title .'</a></h3>';
                                echo '</div>';
                                echo '<a class="black-btn" href="'.get_post_permalink( $post->ID).'"> Read Entry </a>';
                            echo '</li>';
                    ?>
                    <?php endforeach; ?>
                    </ul>
                </div>
            </section> 

            <section class="adventures container">
                    <h2> Latest Adventures </h2> 
                    <ul class="clearfix"> 
                    <?php 
                        $arg = array('numberposts' => 4, 'post_type' => 'adventure', 'order' => 'DESC');
                        $adventure_posts = get_posts( $arg );
                    ?> 
                    <?php foreach( $adventure_posts as $post ) : setup_postdata( $post ) ?>
                    <?php 
                        echo '<li>';
                            echo '<div class="story-wrapper" style="background:url(\''. get_the_post_thumbnail_url( $post->ID).'\')no-repeat center;background-size:cover">';
                                echo '<div class="story-info">';
                                    echo '<h3 class="entry-title"><a href="'.get_post_permalink( $post->ID).'">'. $post->post_title .'</a></h3>';
                                    echo '<a class="white-btn" href="'.get_post_permalink( $post->ID).'"> Read More </a>';
                                echo '</div>';
                            echo '</div>';
                        echo '</li>';
                    ?>
                    <?php endforeach?>
                    </ul> 
                    <div class="see-more"> 
                        <a href="#" class="btn">More Adventures </a>

                    </div>


            </section>

        </main>
        <!-- #main -->
    </div>
    <!-- #primary -->
    <?php get_footer(); ?>