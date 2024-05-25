<?php
/**
 * Template Name: Donations Template
 *
 * @package      Wellington Studio Theme
 * @since        1.0
 * @link         https://github.com/DevWellingtonStudio/100bmba-theme
 * @author       Wellington Studio
 * @license      http://opensource.org/licenses/gpl-2.0.php GNU Public License
 *
 */


add_filter( 'body_class', 'donation_body_class' );

function donation_body_class( $classes ) {
	if ( is_page( 28056 ) ) {
		$classes[] = 'donations-template-class';
	}

	return $classes;
}

add_action( 'genesis_before_footer', 'add_donations_options', 5 );
/**
 * Adds donation options to a donation form or page.
 *
 * This method retrieves various donation-related metadata from the current post and displays the corresponding
 * donation options in the form or page. It also allows customizing the labels and URLs for each donation option.
 *
 * @return void
 */
function add_donations_options() {
	$default = '';

	$donation_title = get_post_meta( get_the_ID(), 'donation-title', TRUE );

	$donation_general_desc  = get_post_meta( get_the_ID(),
		'donation-general-desc',
		TRUE );

	$donation_general_label = get_post_meta( get_the_ID(),
		'donation-general-label',
		TRUE );

	$donation_general       = get_post_meta( get_the_ID(),
		'donation-general',
		TRUE );

	$donation_fund_desc = get_post_meta( get_the_ID(),
		'donation-fund-desc',
		TRUE );

	$donation_1_label  = get_post_meta( get_the_ID(),
		'donation-1-label',
		TRUE );

	$donation_1        = get_post_meta( get_the_ID(),
		'donation-1',
		TRUE );

	$donation_2_label  = get_post_meta( get_the_ID(),
		'donation-2-label',
		TRUE );

	$donation_2        = get_post_meta( get_the_ID(),
		'donation-2',
		TRUE );

	$donation_3_label  = get_post_meta( get_the_ID(),
		'donation-3-label',
		TRUE );

	$donation_3        = get_post_meta( get_the_ID(),
		'donation-3',
		TRUE );

	$donation_4_label  = get_post_meta( get_the_ID(),
		'donation-4-label',
		TRUE );

	$donation_4        = get_post_meta( get_the_ID(),
		'donation-4',
		TRUE );

	$donation_5_label  = get_post_meta( get_the_ID(),
		'donation-5-label',
		TRUE );

	$donation_5        = get_post_meta( get_the_ID(),
		'donation-5',
		TRUE );

	$donation_6_label  = get_post_meta( get_the_ID(),
		'donation-6-label',
		TRUE );

	$donation_6        = get_post_meta( get_the_ID(),
		'donation-6',
		TRUE );

	$donation_7_label  = get_post_meta( get_the_ID(),
		'donation-7-label',
		TRUE );

	$donation_7        = get_post_meta( get_the_ID(),
		'donation-7',
		TRUE );

	$donation_8_label  = get_post_meta( get_the_ID(),
		'donation-8-label',
		TRUE );

	$donation_8        = get_post_meta( get_the_ID(),
		'donation-8',
		TRUE );

	$donation_9_label  = get_post_meta( get_the_ID(),
		'donation-9-label',
		TRUE );

	$donation_9        = get_post_meta( get_the_ID(),
		'donation-9',
		TRUE );

	$donation_10_label = get_post_meta( get_the_ID(),
		'donation-10-label',
		TRUE );

	$donation_10       = get_post_meta( get_the_ID(),
		'donation-10',
		TRUE );

	$donation_11_label = get_post_meta( get_the_ID(),
		'donation-11-label',
		TRUE );

	$donation_11       = get_post_meta( get_the_ID(),
		'donation-11',
		TRUE );

	$donation_12_label = get_post_meta( get_the_ID(),
		'donation-12-label',
		TRUE );

	$donation_12       = get_post_meta( get_the_ID(),
		'donation-12',
		TRUE );

	/**
	 * Represents the label for the first donation option.
	 *
	 * This variable is used to store the label that is displayed for the first donation option
	 * in a donation form or page.
	 *
	 * @var string
	 */

	if ( $donation_1_label !== $default
	     || $donation_general_label !== $default
	) {

		if ( $donation_title !== $default ) {
			echo '<div id="donation-template-cont" class="container mb-5">
						<h2 class="give-form-title">' . $donation_title
			     . '</h2>';
		}

		if ( $donation_general_label !== $default ) {
			echo ' <div id="general-section" class="card">
								<div class="row justify-content-center">
								<div class="col-md-6">
									' . $donation_general_desc . '
								</div>
								<div class="col-md-6">
									<a href="'. $donation_general .'" title="'. $donation_general_label .'"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLongGeneral">'
			     . $donation_general_label . '</button></a>
								</div>
								</div>
							</div>';
		}

		if ( $donation_fund_desc !== $default ) {
			echo '<div id="donation-fund-desc" class="card mt-5">
							<p class="lead">' . $donation_fund_desc . '</p>
						</div> ';
		}

		echo '<div id="donate-btns" class="row">
							<div class="col-md-2 donate-btn">
								<a href="' . $donation_1 .'" title="'. $donation_1_label .'"><button type="button" class="btn btn-primary">
									' . $donation_1_label . '
								</button></a>
						</div>';

		if ( $donation_2_label !== $default ) {
			echo '<div class="col-md-2 donate-btn">
								<a href="'. $donation_2 .'" title="'. $donation_2_label .'"><button type="button" class="btn btn-primary">
								' . $donation_2_label . '
								</button></a>
							</div>';
		}

		if ( $donation_3_label !== $default ) {
			echo '<div class="col-md-2 donate-btn">
								<a href="'. $donation_3 .'" title="'. $donation_3_label .'"><button type = "button" class="btn btn-primary">
								' . $donation_3_label . '
								</button></a>
							</div>';
		}

		if ( $donation_4_label !== $default ) {
			echo '<div class="col-md-2 donate-btn">
								<a href="'. $donation_4 .'" title="'. $donation_4_label .'"><button type="button" class="btn btn-primary" >
									' . $donation_4_label . '
								</button></a>
							</div>';
		}

		if ( $donation_5_label !== $default ) {
			echo '<div class="col-md-2 donate-btn">
								<a href="'. $donation_5 .'" title="'. $donation_5_label .'"><button type="button" class="btn btn-primary" >
									' . $donation_5_label . '
								</button>
							</div>';
		}

		if ( $donation_6_label !== $default ) {
			echo '<div class="col-md-2 donate-btn">
								<a href="'. $donation_6 .'" title="'. $donation_6_label .'"><button type="button" class="btn btn-primary" >
									' . $donation_6_label . '
								</button></a>
							</div>';
		}

		if ( $donation_7_label !== $default ) {
			echo '<div class="col-md-2 donate-btn">
								<a href="'. $donation_7 .'" title="'. $donation_7_label .'"><button type="button" class="btn btn-primary" >
									' . $donation_7_label . '
								</button></a>
							</div>';
		}

		if ( $donation_8_label !== $default ) {
			echo '<div class="col-md-2 donate-btn">
								<a href="'. $donation_8 .'" title="'. $donation_8_label .'"><button type="button" class="btn btn-primary" >
									' . $donation_8_label . '
								</button></a>
							</div>';
		}

		if ( $donation_9_label !== $default ) {
			echo '<div class="col-md-2 donate-btn">
								<a href="'. $donation_9 .'" title="'. $donation_9_label .'"><button type="button" class="btn btn-primary" >
									' . $donation_9_label . '
								</button></a>
							</div>';
		}

		if ( $donation_10_label !== $default ) {
			echo '<div class="col-md-2 donate-btn">
								<a href="'. $donation_10 .'" title="'. $donation_10_label .'"><button type="button" class="btn btn-primary" >
									' . $donation_10_label . '
								</button></a>
							</div>';
		}

		if ( $donation_11_label !== $default ) {
			echo '<div class="col-md-2 donate-btn">
								<a href="'. $donation_11 .'" title="'. $donation_11_label .'"><button type="button" class="btn btn-primary" >
									' . $donation_11_label . '
								</button></a>
							</div>';
		}

		if ( $donation_12_label !== $default ) {
			echo '<div class="col-md-2 donate-btn">
								<a href="'. $donation_12 .'" title="'. $donation_12_label .'"><button type="button" class="btn btn-primary" >
									' . $donation_12_label . '
								</button></a>
							</div>';
		}

		echo '
			</div>
		</div>';
	}
}

genesis();
