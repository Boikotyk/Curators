<?php
add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );

// add_action('wp_print_styles', 'theme_name_scripts'); // можно использовать этот хук он более поздний
function theme_name_scripts() {
    wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery-1.11.1.min.js', '', '', true);
	wp_enqueue_script( 'jquery' );

	wp_register_script( 'bootstra', get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.min.js', '', '', true);
	wp_enqueue_script( 'bootstra' );

	wp_register_script( 'parallax', get_template_directory_uri() . '/assets/js/jquery.parallax-1.1.3.js', '', '', true);
	wp_enqueue_script( 'parallax' );

	wp_register_script( 'imagesloaded', get_template_directory_uri() . '/assets/js/imagesloaded.pkgd.js', '', '', true);
	wp_enqueue_script( 'imagesloaded' );

	wp_register_script( 'sticky', get_template_directory_uri() . '/assets/js/jquery.sticky.js', '', '', true);
	wp_enqueue_script( 'sticky' );

	wp_register_script( 'smoothscroll', get_template_directory_uri() . '/assets/js/smoothscroll.js', '', '', true);
	wp_enqueue_script( 'smoothscroll' );

	wp_register_script( 'wow', get_template_directory_uri() . '/assets/js/wow.min.js', '', '', true);
	wp_enqueue_script( 'wow' );	

	wp_register_script( 'easypiechart', get_template_directory_uri() . '/assets/js/jquery.easypiechart.js', '', '', true);
	wp_enqueue_script( 'easypiechart' );

	wp_register_script( 'waypoints', get_template_directory_uri() . '/assets/js/waypoints.min.js', '', '', true);
	wp_enqueue_script( 'waypoints' );

	wp_register_script( 'cbpQTRotator', get_template_directory_uri() . '/assets/js/jquery.cbpQTRotator.js', '', '', true);
	wp_enqueue_script( 'cbpQTRotator' );

	wp_register_script( 'customjs', get_template_directory_uri() . '/assets/js/custom.js', '', '', true);
	wp_enqueue_script( 'customjs' );
	
}

add_action( 'wp_enqueue_scripts', 'inclede_style' );

function inclede_style(){
	wp_register_style( 'font', 'https://fonts.googleapis.com/css?family=Raleway:400,600');
	wp_enqueue_style( 'font' );

	wp_register_style( 'bootstrap', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css');
	wp_enqueue_style( 'bootstrap' );

	wp_register_style( 'awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css');
	wp_enqueue_style( 'awesome' );

	wp_register_style( 'icons', get_template_directory_uri() . '/assets/css/simple-line-icons.css');
	wp_enqueue_style( 'icons' );

	wp_register_style( 'animate', get_template_directory_uri() . '/assets/css/animate.css');
	wp_enqueue_style( 'animate' );

	wp_register_style( 'style', get_template_directory_uri() . '/assets/css/style.css');
	wp_enqueue_style( 'style' );

	wp_register_style( 'custom', get_template_directory_uri() . '/assets/css/custom.css');
	wp_enqueue_style( 'custom' );

	wp_register_style( '', get_template_directory_uri() . '/assets/js/modernizr.custom.js');
	wp_enqueue_style( 'modernizr' );

}
?>