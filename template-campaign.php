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

add_action( 'genesis_before_loop', 'add_buttons_div' );
function add_buttons_div() {
	echo '<div class="container top-buttons-container mt-6">';
	// Replace the following lines with your own button code
	echo '<div id="donate-btns" class="row">';

	echo '<div class="col-md-2 donate-btn"><button type="button" class="btn btn-secondary">Button 1</button></div>';
	echo '<div class="col-md-2 donate-btn"><button type="button" class="btn btn-secondary">Button 2</button></div>';
	echo '<div class="col-md-2 donate-btn"><button type="button" class="btn btn-secondary">Button 3</button></div>';
	echo '<div class="col-md-2 donate-btn"><button type="button" class="btn btn-secondary">Button 4</button></div>';
	echo '<div class="col-md-2 donate-btn"><button type="button" class="btn btn-secondary">Button 5</button></div>';
	echo '<div class="col-md-2 donate-btn"><button type="button" class="btn btn-secondary">Button 6</button></div>';
	echo '<div class="col-md-2 donate-btn"><button type="button" class="btn btn-secondary">Button 7</button></div>';
	echo '<div class="col-md-2 donate-btn"><button type="button" class="btn btn-secondary">Button 8</button></div>';
	echo '<div class="col-md-2 donate-btn"><button type="button" class="btn btn-secondary">Button 9</button></div>';

	echo '</div>';
	echo '</div>';
}

add_action( 'genesis_after_loop', 'custom_div_after_loop' );
function custom_div_after_loop() {
	echo '<div class="container top-buttons-container mb-3">';

	echo '<div id="donate-btns" class="row">';

	echo '<div class="col-md-2 donate-btn"><button type="button" class="btn btn-secondary">Button 1</button></div>';
	echo '<div class="col-md-2 donate-btn"><button type="button" class="btn btn-secondary">Button 2</button></div>';
	echo '<div class="col-md-2 donate-btn"><button type="button" class="btn btn-secondary">Button 3</button></div>';
	echo '<div class="col-md-2 donate-btn"><button type="button" class="btn btn-secondary">Button 4</button></div>';
	echo '<div class="col-md-2 donate-btn"><button type="button" class="btn btn-secondary">Button 5</button></div>';
	echo '<div class="col-md-2 donate-btn"><button type="button" class="btn btn-secondary">Button 6</button></div>';
	echo '<div class="col-md-2 donate-btn"><button type="button" class="btn btn-secondary">Button 7</button></div>';
	echo '<div class="col-md-2 donate-btn"><button type="button" class="btn btn-secondary">Button 8</button></div>';
	echo '<div class="col-md-2 donate-btn"><button type="button" class="btn btn-secondary">Button 9</button></div>';

	echo '</div>';
	echo '</div>';
}

/**
 * The loop content for this template.
 */
function basic_genesis_page_loop() {
	echo '<div class="container">';
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

// Run the Genesis loop
genesis();



