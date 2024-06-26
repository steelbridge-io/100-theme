<?php
/**
 * Scripts
 *
 * @package      Wellington Studio Theme
 * @since        1.0
 * @link         http://wellington-studio.com
 * @author       Chris Parsons <wellington-studio.com>
 * @copyright    Copyright (c) 2015, Chris Parsons
 * @license      http://opensource.org/licenses/gpl-2.0.php GNU Public License
 *
*/

// Theme Scripts & Stylesheet
add_action( 'wp_enqueue_scripts', 'bfg_theme_scripts' );
function bfg_theme_scripts() {

	wp_enqueue_style('custom-css', get_stylesheet_directory_uri() . '/assets/custom.css', array(), '1.0.0', 'all');
	wp_register_style('animate', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css', array(), '', 'all');
	wp_enqueue_style('animate');
	wp_enqueue_style( 'custom-theme-css', get_stylesheet_directory_uri() . '/assets/css/custom-theme.css', array(), '', 'all');
	wp_enqueue_style('icons', 'https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200', array(), '', 'all');

	if ( is_page_template( 'templates/page_landing.php' ) ) {
		wp_enqueue_style( 'landing-css', get_stylesheet_directory_uri() . '/assets/landing-css.css', array(), '1.0', 'all' );
	}

 if(function_exists('load_wst_customizer_css')) {
	wp_add_inline_style('custom-css', load_wst_customizer_css());
 }

	$version = wp_get_theme()->Version;
	if ( !is_admin() ) {

		// Disable the superfish script
		wp_deregister_script( 'superfish' );
		wp_deregister_script( 'superfish-args' );

		// Register Custom JS
		wp_register_script( 'custom-js', BFG_THEME_JS . 'custom.js', array(), $version, true );
		wp_enqueue_script('custom-js');

		// Register Popper JS and enqueue it
		wp_register_script( 'app-popper-js', BFG_THEME_JS . 'popper.min.js', array( 'jquery' ), $version, true );
		//wp_enqueue_script( 'app-popper-js' );

		// Register Bootstrap JS and enqueue it
		wp_register_script( 'app-bootstrap-js', BFG_THEME_JS . 'bootstrap.min.js', array( 'jquery' ), $version, true );
		wp_enqueue_script( 'app-bootstrap-js' );

		// Register theme JS and enqueue it
		wp_register_script( 'app-js', BFG_THEME_JS . 'app.min.js', array( 'jquery' ), $version, true );
		wp_enqueue_script( 'app-js' );

		// Register Font Awesome
		wp_register_script('font-awesome', 'https://kit.fontawesome.com/76342ff491.js', array(), '', true );
		wp_enqueue_script('font-awesome');

		wp_register_script( 'bootstrap-lightbox', 'https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js', array(), '', true);
		wp_enqueue_script('bootstrap-lightbox');

		wp_register_script('gallery-js', BFG_THEME_JS . 'gallery.js', array(), $version, true );
		wp_enqueue_script('gallery-js');

		// MailChimp JS
		wp_register_script('mailchimp-js', 'https://s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js', array(), '', false);
		if(is_front_page() || is_home()) {
			wp_enqueue_script( 'mailchimp-js' );
		}
	}
}

add_action( 'admin_enqueue_scripts', 'load_metafield_js' );
function load_metafield_js() {

	// Registers and enqueues the required javascript for image management within wp dashboard.
	wp_register_script( 'meta-box-image', BFG_THEME_JS . 'meta-field.js', array( 'jquery' ) );
	wp_localize_script( 'meta-box-image', 'meta_image',
		array(
			'title' => __( 'Choose or Upload an Image', '100-black-men-ba' ),
			'button' => __( 'Use this image', '100-black-men-ba' ),
		)
	);
	wp_enqueue_script( 'meta-box-image' );
}

// Editor Styles
add_action( 'init', 'bfg_custom_editor_css' );
function bfg_custom_editor_css() {
	add_editor_style( get_stylesheet_uri() );
}

if (! function_exists('fa_custom_setup_kit') ) {
	/**
	 * Sets up a custom Font Awesome kit for enqueueing scripts on specific WordPress hooks.
	 *
	 * @param  string  $kit_url  The URL of the Font Awesome kit. Default is 'https://use.fontawesome.com/releases/v5.15.4/js/all.js'.
	 *
	 * @return void
	 */
	function fa_custom_setup_kit($kit_url = 'https://use.fontawesome.com/releases/v5.15.4/js/all.js') {
		foreach ( [ 'wp_enqueue_scripts', 'admin_enqueue_scripts', 'login_enqueue_scripts' ] as $action ) {
			add_action(
				$action,
				function () use ( $kit_url ) {
					if(is_page_template('template-campaign.php')) {
						wp_enqueue_script( 'font-awesome-kit',
							$kit_url,
							[],
							NULL );
					}
				}
			);
		}
	}
}
