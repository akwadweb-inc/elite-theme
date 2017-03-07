<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Elite
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="footer" style="height: 200px" role="contentinfo">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-6">
					<?php dynamic_sidebar('footer-1' ); ?>
					<?php dynamic_sidebar('footer-2' ); ?>
					<?php dynamic_sidebar('footer-3' ); ?>
					<div class="site-info">
						<?php if( get_theme_mod( 'elite_footer_text') != "" ): ?>
			            <span id="footertext">
			                <?php echo get_theme_mod( 'elite_footer_text'); ?>
			            </span>
			            <?php endif; ?>
						<span class="sep"> | </span>
						<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'elite' ), 'Elite', '<a target="_blank" href="http://www.akwadweb.com" rel="designer">Akwadweb</a>' ); ?>
					</div><!-- .site-info -->
				</div>
				 <div class="col-sm-6">
					 <div class="pull-right fnav">
    	                <ul class="footer-social">
    	                    <li><a href="<?php echo get_theme_mod( 'elite_facebook_link'); ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
    	                    <li><a href="<?php echo get_theme_mod( 'elite_custom_google_footer'); ?>" target="_blank"><i class="fa fa-google-plus"></i></a></li>
    	                    <li><a href="<?php echo get_theme_mod( 'elite_custom_twitter_footer'); ?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
    	                </ul>
    		        </div>
				 </div>
			</div>
	    </div>
	</footer><!-- #colophon -->
</div><!-- #page -->
</div> <!-- wrapper -->

<?php wp_footer(); ?>

</body>
</html>
