<?php 
require_once("assets/inc/scripts-and-styles.php");
require_once('assets/inc/post-types.php');
require_once('assets/inc/img-sizes.php');

add_action('after_setup_theme', 'theme_setup');

function theme_setup(){
   	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'custom-logo' );
	add_theme_support( 'title-tag' );
	register_nav_menus(array(
		'top'    => 'Top Menu',   

	));

}
function redirect_login_page() {  
    $login_page  = home_url( 'https://curators.org.ua/' );  
    $page_viewed = basename($_SERVER['REQUEST_URI']);  
  
    if( $page_viewed == "wp-login.php" && $_SERVER['REQUEST_METHOD'] == 'GET') {  
        wp_redirect($login_page);  
        exit;  
    }  
}  
add_action('init','redirect_login_page');

function login_failed() {  
    $login_page  = home_url( '/login/' );  
    wp_redirect( $login_page . '?login=failed' );  
    exit;  
}  
add_action( 'wp_login_failed', 'login_failed' );  
  
function verify_username_password( $user, $username, $password ) {  
    $login_page  = home_url( '/login/' );  
    if( $username == "" || $password == "" ) {  
        wp_redirect( $login_page . "?login=empty" );  
        exit;  
    }  
}  
add_filter( 'authenticate', 'verify_username_password', 1, 3);

function logout_page() {  
    $login_page  = home_url( '/login/' );  
    wp_redirect( $login_page . "?login=false" );  
    exit;  
}  
add_action('wp_logout','logout_page');

function login_redirect( $redirect_to, $request, $user ){
    return home_url('/home/');
}
add_filter( 'login_redirect', 'login_redirect', 10, 3 );


function true_logged_in_user_content( $atts, $content = null ) {
    if ( is_user_logged_in() && !is_null( $content ) && !is_feed() ) {
        return $content;
    }
    return '<div class="pfblock-subtitle secrblock">Ви не маєте доступу до цього блоку</div>'; // тут в кавычках можете написать сообщение об ошибке, отображающееся для пользователей, у которых нет доступа, можно использовать HTML.
}
add_shortcode( 'member', 'true_logged_in_user_content' );

function true_logged_in_user_sinout( $atts, $content = null ) {
    if ( is_user_logged_in() && !is_null( $content ) && !is_feed() ) {
        return $content;
    }
    return ''; // тут в кавычках можете написать сообщение об ошибке, отображающееся для пользователей, у которых нет доступа, можно использовать HTML.
}
add_shortcode( 'sinout', 'true_logged_in_user_sinout' );

