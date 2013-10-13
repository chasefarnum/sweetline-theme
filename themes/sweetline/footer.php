	<?php zilla_footer_before(); ?>
	<!-- BEGIN #footer -->
	<div id="footer">
		
		<!-- BEGIN .block -->
		<div class="block clearfix">
	    
	    <?php zilla_footer_start(); ?>
	    
	    	<?php get_sidebar( 'footer' ); ?>
	    	
			<!-- BEGIN .footer-lower -->	    
		    <div class="footer-lower">
		    
				<p class="copyright">
					<a href="#"><img src="http://dev.chasefarnum.com/sweetline/wp-content/themes/sparks/images/logo-footer.png"/></a>
				</p>
			
				<nav class="footer-nav"><?php if( has_nav_menu( 'primary-menu' ) ) {
		        wp_nav_menu( array( 
		        	'theme_location' => 'primary-menu', 
		        	'container' => '', 
		        	'menu_id' => 'primary-menu',
		        	'menu_class' => 'sf-menu primary-menu' ) ); 
		    } ?>
		    <?php if( function_exists('zilla_social') ) zilla_social(); ?>
		    </nav>
		    
		    
 
			<!-- END .footer-lower -->
			</div>
		
	    <?php zilla_footer_end(); ?>
	    <!--END .block -->
	    </div>
	    
	<!-- END #footer -->
	</div>
	<?php zilla_footer_after(); ?>
			
	<!-- Theme Hook -->
	<?php wp_footer(); ?>
	<?php zilla_body_end(); ?>
			
	<!-- <?php echo 'Ran '. $wpdb->num_queries .' queries '. timer_stop(0, 2) .' seconds'; ?> -->
<!--END body-->
</body>
<!--END html-->
</html>