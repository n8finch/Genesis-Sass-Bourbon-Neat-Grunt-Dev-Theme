<?php

//* Template Name: AEPO Home
//* Force full width content layout
add_filter( 'genesis_site_layout', '__genesis_return_full_width_content' );

// Remove the default Genesis loop
remove_action( 'genesis_loop', 'genesis_do_loop' );

// Add custom homepage content
add_action( 'genesis_loop', 'one_pager_homepage_content' );
function one_pager_homepage_content() { ?>

	<!-- Widgeted Section -->
	<section id="section-id" class="section-class">
		<article class="wrap">
			<?php
			genesis_widget_area( 'welcome-section', array(
				'before'	=> '<div class="welcome-section widget-area">',
				'after'		=> '</div>',
			) );
			?>
		</article>
	</section>

	<!-- Custom Fields Section -->
	<section id="section-id" class="section-class">
		<article class="wrap">
			<?php
			echo 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut sem at leo rhoncus semper molestie nec ante. Quisque tincidunt eros vitae sollicitudin iaculis. Donec bibendum mi est, at viverra nulla iaculis suscipit. Curabitur nec risus laoreet, suscipit augue non, suscipit metus. Maecenas pellentesque convallis est, at accumsan dui pretium sit amet. Quisque ultricies sapien a laoreet commodo. Curabitur eu tellus ut est porttitor varius ut eu tellus. Integer non eros non lorem laoreet tincidunt. Nam ac aliquet eros. Etiam ornare nisi erat, quis mollis elit pretium convallis. Cras gravida ante in eleifend efficitur. Vestibulum a rutrum arcu. Vivamus sodales ornare purus sed luctus.';
			?>
		</article>
	</section>


<?php }


//* Run the Genesis loop
genesis();
