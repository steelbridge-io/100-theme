<?php
	// Sanitize Fields
	add_action( 'save_post', 'donation_meta_save' );
	function donation_meta_save( $post_id ) {

		// Checks save status
		$is_autosave    = wp_is_post_autosave( $post_id );
		$is_revision    = wp_is_post_revision( $post_id );
		$is_valid_nonce = ( isset( $_POST['donations_nonce'] ) && wp_verify_nonce( $_POST['donations_nonce'], basename( __FILE__ ) ) ) ? 'true' : 'false';

		// Exits script depending on save status
		if ( $is_autosave || $is_revision || ! $is_valid_nonce ) {
			return;
		}

		// Checks for input and saves if needed
		if ( isset( $_POST['donation-title'] ) ) {
			$donation_title = sanitize_text_field( $_POST['donation-title'] );
			update_post_meta( $post_id, 'donation-title', $donation_title );
		}
		if ( isset( $_POST['donation-general-desc'] ) ) {
			$donation_general_desc = sanitize_text_field( $_POST['donation-general-desc'] );
			update_post_meta( $post_id, 'donation-general-desc', $donation_general_desc );
		}
		if ( isset( $_POST['donation-general-label'] ) ) {
			$donation_general_label = sanitize_text_field( $_POST['donation-general-label'] );
			update_post_meta( $post_id, 'donation-general-label', $donation_general_label );
		}
		if ( isset( $_POST['donation-general'] ) ) {
			$donation_general = esc_url_raw( $_POST['donation-general'] );
			update_post_meta( $post_id, 'donation-general', $donation_general );
		}
		if ( isset( $_POST['donation-fund-desc'] ) ) {
			$donation_fund_desc = sanitize_text_field( $_POST['donation-fund-desc'] );
			update_post_meta( $post_id, 'donation-fund-desc', $donation_fund_desc );
		}
		if ( isset( $_POST['donation-1'] ) ) {
			$donation_1 = esc_url_raw( $_POST['donation-1'] );
			update_post_meta( $post_id, 'donation-1', $donation_1 );
		}
		if ( isset( $_POST['donation-1-label'] ) ) {
			$donation_1_label = sanitize_text_field( $_POST['donation-1-label'] );
			update_post_meta( $post_id, 'donation-1-label', $donation_1_label );
		}
		if ( isset( $_POST['donation-2'] ) ) {
			$donation_2 = esc_url_raw( $_POST['donation-2'] );
			update_post_meta( $post_id, 'donation-2', $donation_2 );
		}
		if ( isset( $_POST['donation-2-label'] ) ) {
			$donation_2_label = sanitize_text_field( $_POST['donation-2-label'] );
			update_post_meta( $post_id, 'donation-2-label', $donation_2_label );
		}
		if ( isset( $_POST['donation-3'] ) ) {
			$donation_3 = esc_url_raw( $_POST['donation-3'] );
			update_post_meta( $post_id, 'donation-3', $donation_3 );
		}
		if ( isset( $_POST['donation-3-label'] ) ) {
			$donation_3_label = sanitize_text_field( $_POST['donation-3-label'] );
			update_post_meta( $post_id, 'donation-3-label', $donation_3_label );
		}
		if ( isset( $_POST['donation-4'] ) ) {
			$donation_4 = esc_url_raw( $_POST['donation-4'] );
			update_post_meta( $post_id, 'donation-4', $donation_4 );
		}
		if ( isset( $_POST['donation-4-label'] ) ) {
			$donation_4_label = sanitize_text_field( $_POST['donation-4-label'] );
			update_post_meta( $post_id, 'donation-4-label', $donation_4_label );
		}
		if ( isset( $_POST['donation-5'] ) ) {
			$donation_5 = esc_url_raw( $_POST['donation-5'] );
			update_post_meta( $post_id, 'donation-5', $donation_5 );
		}
		if ( isset( $_POST['donation-5-label'] ) ) {
			$donation_5_label = sanitize_text_field( $_POST['donation-5-label'] );
			update_post_meta( $post_id, 'donation-5-label', $donation_5_label );
		}
		if ( isset( $_POST['donation-6'] ) ) {
			$donation_6 = esc_url_raw( $_POST['donation-6'] );
			update_post_meta( $post_id, 'donation-6', $donation_6 );
		}
		if ( isset( $_POST['donation-6-label'] ) ) {
			$donation_6_label = sanitize_text_field( $_POST['donation-6-label'] );
			update_post_meta( $post_id, 'donation-6-label', $donation_6_label );
		}
		if ( isset( $_POST['donation-7'] ) ) {
			$donation_7 = esc_url_raw( $_POST['donation-7'] );
			update_post_meta( $post_id, 'donation-7', $donation_7 );
		}
		if ( isset( $_POST['donation-7-label'] ) ) {
			$donation_7_label = sanitize_text_field( $_POST['donation-7-label'] );
			update_post_meta( $post_id, 'donation-7-label', $donation_7_label );
		}
		if ( isset( $_POST['donation-8'] ) ) {
			$donation_8 = esc_url_raw( $_POST['donation-8'] );
			update_post_meta( $post_id, 'donation-8', $donation_8 );
		}
		if ( isset( $_POST['donation-8-label'] ) ) {
			$donation_8_label = sanitize_text_field( $_POST['donation-8-label'] );
			update_post_meta( $post_id, 'donation-8-label', $donation_8_label );
		}
		if ( isset( $_POST['donation-9'] ) ) {
			$donation_9 = esc_url_raw( $_POST['donation-9'] );
			update_post_meta( $post_id, 'donation-9', $donation_9 );
		}
		if ( isset( $_POST['donation-9-label'] ) ) {
			$donation_9_label = sanitize_text_field( $_POST['donation-9-label'] );
			update_post_meta( $post_id, 'donation-9-label', $donation_9_label );
		}
		if ( isset( $_POST['donation-10'] ) ) {
			$donation_10 = esc_url_raw( $_POST['donation-10'] );
			update_post_meta( $post_id, 'donation-10', $donation_10 );
		}
		if ( isset( $_POST['donation-10-label'] ) ) {
			$donation_10_label = sanitize_text_field( $_POST['donation-10-label'] );
			update_post_meta( $post_id, 'donation-10-label', $donation_10_label );
		}
		if ( isset( $_POST['donation-11'] ) ) {
			$donation_11 = esc_url_raw( $_POST['donation-11'] );
			update_post_meta( $post_id, 'donation-11', $donation_11 );
		}
		if ( isset( $_POST['donation-11-label'] ) ) {
			$donation_11_label = sanitize_text_field( $_POST['donation-11-label'] );
			update_post_meta( $post_id, 'donation-11-label', $donation_11_label );
		}
		if ( isset( $_POST['donation-12'] ) ) {
			$donation_12 = esc_url_raw( $_POST['donation-12'] );
			update_post_meta( $post_id, 'donation-12', $donation_12 );
		}
		if ( isset( $_POST['donation-12-label'] ) ) {
			$donation_12_label = sanitize_text_field( $_POST['donation-12-label'] );
			update_post_meta( $post_id, 'donation-12-label', $donation_12_label );
		}
	}
