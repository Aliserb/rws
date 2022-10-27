<?php

function rws_register() {
	
	wp_enqueue_script( 'jquery' );
 
	wp_enqueue_script( 'rws_frontend_js', RWS_URL . 'public/js/rws_ajax.js');

	wp_localize_script( 
		'rws_frontend_js', 
		'rws_frontend_script', 
		array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ),
	);
}
add_action('wp_enqueue_scripts', 'rws_register');


add_action( 'admin_enqueue_scripts', 'rws_style_admin', 25 );
 
function rws_style_admin() {
 	wp_enqueue_style( 'rws_style', RWS_URL . 'admin/css/rws_style.css' );
}

add_action( 'wp_enqueue_scripts', 'rws_style_public', 25 );
 
function rws_style_public() {
 	wp_enqueue_style( 'rws_form_style', RWS_URL . 'public/css/rws_form_style.css' );
}
?>