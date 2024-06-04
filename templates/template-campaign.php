<?php
/*
Template Name: Campaign List
Template Post Type: campaign_list
*/


// Prevent direct access to this file
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

remove_action( 'genesis_loop', 'genesis_do_loop' );

add_action( 'genesis_loop', 'basic_genesis_page_loop' );

add_action( 'genesis_before', 'add_buttons_div' );
function add_buttons_div() {
	echo '<div class="container-fluid donations-options-wrapper">';
	echo '<div class="container top-buttons-container">';
	// Replace the following lines with your own button code
	echo '<div id="donate-go-back" class="row">';

	//echo '<div class="go-back-donations"><a href="/donate" title="Back to donations page"><span class="material-symbols-outlined">first_page</span>Back To Donation Options</a></div>';
	echo '<div class="go-back-donations"><a href="/donate" title="Back to donations page"><i class="fas fa-2x fa-long-arrow-alt-left"></i>Back To Donation Options</a></div>';
	echo '</div>';
	echo '</div>';
	echo '</div>';
	echo '<div class="angle-bg"></div>';
}


add_action('genesis_before_footer', 'lei_custom_footer_div');
function lei_custom_footer_div() {
	echo '<div class="angle-bg-bottom"></div>';
}

/**
 * The loop content for this template.
 */
function basic_genesis_page_loop() {
	echo '<div class="container donations-container">';
	?>
	<article <?php post_class(); ?>>
		<?php
		if ( have_posts() ) {
			while ( have_posts() ) {
				the_post();
				?>
				<header>
					<h1><?php the_title(); ?></h1>
				</header>
				<div class="entry-content">
					<?php the_content(); ?>
				</div>
				<?php
			}
		}
		?>
	</article>

	<?php

	echo '</div>';
}
genesis();
// Run the Genesis loop




