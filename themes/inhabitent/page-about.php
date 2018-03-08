<?php 
    /*
     Template Name: About Template
    */

?>

<?php get_header(); ?>
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

            <div class="entry-header custom-hero"
                style="background:linear-gradient( to bottom, rgba(0,0,0,0.4) 0%, rgba(0,0,0,0.4) 100% ),url('<?php the_post_thumbnail_url(); ?>') no-repeat center;
                background-size:cover, cover">
                <div class="container">    
                    <h1 class="entry-title">About</h1>
                </div>
            </div>

            <div class="container">    
               <div class="entry-content">
                    <h2> hi</h2>
                    <?php echo CFS()->get('our-story');?>


                    <h2> dude </h2>
                    <?php echo CFS()->get('our-team');?>
                </div>
            </div>

    </main><!-- #main -->
</div><!-- #primary -->


<?php get_footer(); ?>


