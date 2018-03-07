<?php 

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
    <?php 
    if(have_posts()): 
    //get Post
        while(have_posts()): the_post(); 
           get_template_part('template-parts/content', 'journal');
        endwhile; 

        the_posts_navigation();
    else :
         get_template_part('template-part/content', 'none');
    endif; 
    ?>
    </main> <!-- #main -->
</div> <!-- #primary -->


<div id="seconday" class="widget-area" role="complementary">
    <?php dynamic_sidebar('sidebar-footer'); ?>
</div>
<?php get_footer(); ?>