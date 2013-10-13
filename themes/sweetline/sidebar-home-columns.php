<?php 

if( is_active_sidebar( 'home-page-column') || is_active_sidebar( 'home-page-column-2' ) || is_active_sidebar( 'home-page-column-3' ) ) { ?>
	<div class="home-page-columns-wrapper clearfix">
	<div class="block clearfix">
	<div class="home-page-columns clearfix">
	
	
	<?php 

		if( is_active_sidebar( 'home-page-column' ) ) {
			echo '<div class="home-page-column-1"><div class="home-page-column-inner">';
					dynamic_sidebar( 'home-page-column' );
			echo '</div></div>';
		}

		if( is_active_sidebar( 'home-page-column-2' ) )
			echo '<div class="home-page-column-2"><div class="home-page-column-inner">';
				dynamic_sidebar( 'home-page-column-2' );
			echo '</div></div>';

		if( is_active_sidebar( 'home-page-column-3' ) )
			echo '<div class="home-page-column-3"><div class="home-page-column-inner">';
				dynamic_sidebar( 'home-page-column-3' );
			echo '</div></div>';

	?>
	</div>
	</div>
	</div>

<?php }