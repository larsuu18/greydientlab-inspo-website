<?php



// Load Style Sheets
function load_css()
{

        wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', 
            array(), false, 'all' );
        wp_enqueue_style('bootstrap');

        wp_register_style('main', get_template_directory_uri() . '/css/main.css', 
            array(), false, 'all' );
        wp_enqueue_style('main');



}
add_action('wp_enqueue_scripts', 'load_css');



// Load Javascript
function load_js()
{
        wp_enqueue_script('jquery');

        wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', '
            jquery', false, true);
        wp_enqueue_script('bootstrap');

        wp_register_script('video-hover', get_template_directory_uri(). '/js/video-hover.js' ,
            array('jquery'), false, true);
        wp_enqueue_script('video-hover');

        wp_register_script('gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js' ,
            array('jquery'), false, true);
        wp_enqueue_script('gsap');

        wp_register_script('scrolltrigger', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js' ,
            array('jquery'), false, true);
        wp_enqueue_script('scrolltrigger');

        wp_register_script('jq', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js' ,
            array('jquery'), false, true);
        wp_enqueue_script('jq');

        wp_register_script('intro', get_template_directory_uri(). '/js/intro.js' ,
            array('jquery'), false, true);
        wp_enqueue_script('intro');

}
add_action('wp_enqueue_scripts', 'load_js');



// Theme Options
add_theme_support('menus');





// Menus
register_nav_menus(

        array(

            'top-menu' => 'Top Menu Location',
            'mobile-menu' => 'Mobile Location',

        )

);

