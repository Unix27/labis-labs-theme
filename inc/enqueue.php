<?php 

add_action( 'wp_enqueue_scripts', 'labis_labs_enqueue_scripts' );
function labis_labs_enqueue_scripts(){
	wp_enqueue_style( 'theme-reset', get_template_directory_uri() . '/assets/css/reset.css');
	wp_enqueue_style( 'theme-fonts', get_template_directory_uri() . '/assets/fonts/fonts.css');
	wp_enqueue_style( 'theme-owl.carousel.min', get_template_directory_uri() . '/assets/css/owl.carousel.min.css');
	wp_enqueue_style( 'theme-owl.theme.default.min', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css');
	wp_enqueue_style( 'theme-style', get_template_directory_uri() . '/assets/css/style.css');
	wp_enqueue_style( 'theme-media', get_template_directory_uri() . '/assets/css/media.css');

	wp_enqueue_script('jquery');
	wp_enqueue_script( 'theme-owl.carousel.min', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'));
	wp_enqueue_script( 'theme-script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'));

	wp_localize_script( 'theme-script', 'MyAjax', array( 'url' => admin_url( 'admin-ajax.php' ) ) );

}