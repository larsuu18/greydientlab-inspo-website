<?php

// Load Style Sheets
function load_css()
{
        wp_register_style('Montserrat', 'https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap', 
            array(), false, 'all' );
        wp_enqueue_style('Montserrat');

        wp_register_style('NAVI', 'https://fonts.cdnfonts.com/css/navi', 
            array(), false, 'all' );
        wp_enqueue_style('NAVI');

        wp_register_style('Kanit', 'https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap', 
            array(), false, 'all' );
        wp_enqueue_style('Kanit');

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

// Stoutlogic
require_once get_template_directory() . '/vendor/autoload.php';

$banner = new StoutLogic\AcfBuilder\FieldsBuilder('banner');
$banner

    ->addText('about_lars')
    ->addImage('profile_pic')
    ->addText('client_par')
    ->addText('button_text')
    ->addText('logo')
    ->addImage('des_1',
        ['return_format' => 'url'])
    ->addImage('des_2',
        ['return_format' => 'url'])
    ->addFile('wp_video1',
        ['return_format' => 'url'])
    ->addFile('wp_video2',
        ['return_format' => 'url'])
    ->addFile('wp_video3',
        ['return_format' => 'url'])
    ->addFile('wp_video4',
        ['return_format' => 'url'])
    ->addImage('shiz_logo',
        ['return_format' => 'url'])
    ->addImage('yuklog',
        ['return_format' => 'url'])
    ->addImage('navi_log',
        ['return_format' => 'url'])
    ->addImage('ashina_log',
        ['return_format' => 'url'])
    ->addRepeater('client_link')
            ->addImage('cli_pic',[
            'return_format' => 'url'
        ])
        ->addLink('cli_link',[
            'return_format' => 'url'
        ])
    ->endRepeater()
    ->addRepeater('social_links')
        ->addImage('sl_image',[
            'return_format' => 'url'
        ])
        ->addLink('sl_link',[
            'return_format' => 'url'
        ])
    ->endRepeater()
    ->setLocation('page_template', '==', 'front-page.php');

add_action('acf/init', function() use ($banner) {
   acf_add_local_field_group($banner->build());
});

$banner2 = new StoutLogic\AcfBuilder\FieldsBuilder('banner2');
$banner2

    ->addImage('ren_img',
    ['return_format' => 'url'])
    ->addImage('unren_img',
    ['return_format' => 'url'])
    ->setLocation('page_template', '==', 'about-page.php');

add_action('acf/init', function() use ($banner2) {
   acf_add_local_field_group($banner2->build());
});

