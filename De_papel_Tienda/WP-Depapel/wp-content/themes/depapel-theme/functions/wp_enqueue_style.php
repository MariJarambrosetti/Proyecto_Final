<?php 
	
	function dl_enqueue_style() {
		$theme_data = wp_get_theme();

		/* Register Scripts */
		wp_register_style('reset', get_parent_theme_file_uri('/assets/css/reset.css'), null, $theme_data->get( 'Version' ), 'screen');
		wp_register_style('flickity', get_parent_theme_file_uri('/assets/css/flickity.css'), null, '2.1.0', 'screen');
		wp_register_style('mainStyle', get_parent_theme_file_uri('/assets/css/style.css'), array('reset'), $theme_data->get( 'Version' ), 'screen');
		wp_register_style('bootstrap_css', get_parent_theme_file_uri( '/assets/css/bootstrap.min.css' ), null, $theme_data->get( 'Version' ), 'screen' );
		wp_register_style('custom_style',get_parent_theme_file_uri( '/assets/css/custom_style.css' ), null, $theme_data->get('Version'), 'screen' );
		wp_register_style( 'lato', 'https://fonts.googleapis.com/css?family=Lato:400,700,900', null, $theme_data->get('Version'), 'screen' );
		wp_register_style( 'fontawesome', 'https://use.fontawesome.com/releases/v5.2.0/css/all.css', null, $theme_data->get('Version'), 'screen' );
		
		/* Enqueue Scripts */
		wp_enqueue_style('flickity');
		wp_enqueue_style('mainStyle');
		wp_enqueue_style('bootstrap_css');
		wp_enqueue_style('custom_style');
		wp_enqueue_style('lato');
		wp_enqueue_style('fontawesome');
	}

	add_action( 'wp_enqueue_scripts', 'dl_enqueue_style' );
?>