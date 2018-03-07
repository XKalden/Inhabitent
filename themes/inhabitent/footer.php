<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="footer-block container">
					
	
					<?php dynamic_sidebar( 'sidebar-footer' ); ?>

					<div class="block-item"> 
						<a href=<?php echo '"'.get_home_url() .'"';?> rel="home"> 
							<img src=" <?php echo  get_template_directory_uri().'/images/logos/inhabitent-logo-text.svg'?>"/>
						</a>
					</div>

				</div> 
				<div class="site-info">
					<div class="container"> 
					COPYRIGHT © 2016 INHABITENT
					</div> 
					
				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
