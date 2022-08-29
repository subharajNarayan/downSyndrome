<?php
function kunco_path_demo_content(){
	return (__DIR__.'/demo-data/');
}
add_filter('wbc_importer_dir_path', 'kunco_path_demo_content');

/************************************************************************
* Way to set menu, import revolution slider, and set home page.
*************************************************************************/
add_action( 'wbc_importer_before_content_import', 'wbc_extended_example', 10, 2 );

if ( !function_exists( 'wbc_extended_example' ) ) {
	function wbc_extended_example( $demo_active_import , $demo_directory_path ) {
		reset( $demo_active_import );
		$current_key = key( $demo_active_import );

		if( class_exists('Give') ){
			kunco_themer_give_import_meta();
		}

		if ( class_exists( 'RevSlider' ) ) {
			$wbc_sliders_array = array( 'slider-1.zip', 'slider-2.zip', 'slider-3.zip', 'slider-4.zip'  );
			if(!file_exists( kunco_path_demo_content().'main/'.$wbc_sliders_array[0])){
				gaviasframework_download_slider('kunco');
			}
			$slider = new RevSlider();
			foreach ($wbc_sliders_array as $s) {
				if ( file_exists( kunco_path_demo_content().'main/'. $s ) ) {
					$slider->importSliderFromPost( true, true, kunco_path_demo_content().'main/'.$s );
				}
			}
		}

		/************************************************************************
		* Setting Menus
		*************************************************************************/
		$wbc_menu_array = array( 'main' );
		if ( isset( $demo_active_import[$current_key]['directory'] ) && !empty( $demo_active_import[$current_key]['directory'] ) && in_array( $demo_active_import[$current_key]['directory'], $wbc_menu_array ) ) {
			$top_menu = get_term_by( 'name', 'Main Menu', 'nav_menu' );
			if ( isset( $top_menu->term_id ) ) {
				set_theme_mod( 'nav_menu_locations', array(
						'primary' => $top_menu->term_id
					)
				);
			}
		}

		/************************************************************************
		* Set HomePage
		*************************************************************************/
		$wbc_home_pages = array(
			'main' => 'Home 1'
		);
		if ( isset( $demo_active_import[$current_key]['directory'] ) && !empty( $demo_active_import[$current_key]['directory'] ) && array_key_exists( $demo_active_import[$current_key]['directory'], $wbc_home_pages ) ) {
			$page = get_page_by_title( $wbc_home_pages[$demo_active_import[$current_key]['directory']] );
			if ( isset( $page->ID ) ) {
				update_option( 'page_on_front', $page->ID );
				update_option( 'show_on_front', 'page' );
			}
		}
	}
	// Uncomment the below
	add_action( 'wbc_importer_after_content_import', 'wbc_extended_example', 10, 2 );
}

function kunco_themer_give_import_meta(){
   global $wpdb;

   $insert_query  = "INSERT INTO {$wpdb->formmeta} (form_id, meta_key, meta_value) ";
   
   $form_ids = array(3493, 3494, 3495, 3496, 3497, 3498, 3802, 3809, 3812);
   $thumb_ids = array(3810, 3803, 3813, 3500, 3501, 3505, 3504, 3503, 3502);
   $payment_display = array('onpage', 'modal', 'reveal');
   $earnings = array('500', '1000', '1200', '1100');
   foreach ($form_ids as $form_id) {
   	if(get_post_type($form_id) == 'give_forms'){
   		$query_values = [];
		   $post_meta_data = array(
		      '_thumbnail_id' => $thumb_ids[rand(0, 8)],
		      '_give_price_option'			=> 'multi',
		      '_give_donation_levels' 	=> 'a:5:{i:0;a:3:{s:8:"_give_id";a:1:{s:8:"level_id";s:1:"0";}s:12:"_give_amount";s:9:"10.000000";s:10:"_give_text";s:0:"";}i:1;a:3:{s:8:"_give_id";a:1:{s:8:"level_id";s:1:"1";}s:12:"_give_amount";s:9:"25.000000";s:10:"_give_text";s:0:"";}i:2;a:3:{s:8:"_give_id";a:1:{s:8:"level_id";s:1:"2";}s:12:"_give_amount";s:9:"50.000000";s:10:"_give_text";s:0:"";}i:3;a:4:{s:8:"_give_id";a:1:{s:8:"level_id";s:1:"3";}s:12:"_give_amount";s:10:"100.000000";s:10:"_give_text";s:0:"";s:13:"_give_default";s:7:"default";}i:4;a:3:{s:8:"_give_id";a:1:{s:8:"level_id";s:1:"5";}s:12:"_give_amount";s:10:"250.000000";s:10:"_give_text";s:0:"";}}',
		   	'_give_form_earnings'   	=> $earnings[rand(0, 3)],
		   	'_give_goal_option'			=> 'enabled',
		   	'_give_legacy_form_template_settings'	=> 'a:1:{s:16:"display_settings";a:8:{s:13:"display_style";s:7:"buttons";s:15:"payment_display";s:6:"reveal";s:15:"display_content";s:7:"enabled";s:12:"form_content";s:390:"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain.";s:12:"reveal_label";s:0:"";s:14:"checkout_label";s:10:"Donate Now";s:20:"form_floating_labels";s:6:"global";s:17:"content_placement";s:14:"give_post_form";}}',
		   	'_give_goal_format'			=> 'amount',
		   	'_give_set_goal'				=> '18000',
		   	'_give_form_template'		=> 'legacy',
		   	'_give_display_style'		=> 'buttons',
		   	'_give_display_content' 	=> 'enabled',
		   	'_give_custom_amount'		=> 'enabled',
		   	'_give_content_placement'	=> 'give_post_form',
		   	// '_give_levels_minimum_amount' => '10',
		   	// '_give_levels_maximum_amount' => '250',
		   	// '_give_set_price'		   		=> '1',
		   	// '_give_custom_amount_range_minimum'	=> '5',
		   	// '_give_custom_amount_range_maximum'	=> '9999',
		   	'_give_form_status'				=> 'open',
		   	//'_give_checkout_label'			=> 'Donate Now',
		   	'_give_form_floating_labels'	=> 'global',
		   	'_give_default_gateway'			=> 'global',
		   	//'_give_custom_amount_text'		=> 'Custom Amount',
		   	'_give_form_content'				=> 'On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain.',
		   	'_give_payment_display'			=> $payment_display[rand(0, 2)]
		   );
		   foreach ( $post_meta_data as $meta_key => $meta_data ) {
		      $query_values[] = "( {$form_id}, '{$meta_key}', '{$meta_data}' ) ";
		   }
		   $query_values_string = implode( ' , ', $query_values );
		   $query_import = $insert_query . ' VALUES ' . $query_values_string;
		   $wpdb->query( $wpdb->prepare( "DELETE FROM {$wpdb->formmeta} WHERE form_id = '%d'", $form_id ) );
		   $wpdb->query( $query_import ); 
   	}
   }
}