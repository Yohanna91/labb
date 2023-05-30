<?php

// Gör alla assets tillgänliga
add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );
add_action( 'wp_enqueue_scripts', 'loadJS' );
add_action( 'wp_enqueue_scripts', 'loadImages' );

// Ladda in CSS
function theme_name_scripts() {
   wp_enqueue_style( 'style-name', get_stylesheet_uri() . "/css/bootstrap.css" );
   wp_enqueue_style( 'style-name', get_stylesheet_uri() . "/css/font-awesome.css" );
   wp_enqueue_style( 'style-name', get_stylesheet_uri() . "/css/style.css" );
}

// Ladda in Javascript
function loadJS() {
   wp_enqueue_script( "script-name", get_stylesheet_uri() . "/js/script.js");
   wp_enqueue_script( "script-name", get_stylesheet_uri() . "/js/jquery.js");
}

// Ladda in bilder
function loadImages() {
   wp_enqueue_media("image-name", get_stylesheet_uri() . "/img/city.jpg");
   wp_enqueue_media("image-name", get_stylesheet_uri() . "/img/london.jpg");
   wp_enqueue_media("image-name", get_stylesheet_uri() . "/img/paris.jpg");
   wp_enqueue_media("image-name", get_stylesheet_uri() . "/img/photo.jpg");
   wp_enqueue_media("image-name", get_stylesheet_uri() . "/img/washington.jpg");
}

// Aktivera så att menyer och thumbnails för inlägg syns
add_theme_support("menus");
add_theme_support( 'post-thumbnails' );

// Aktivera lokalisering av menyn
register_nav_menus(
   array(
      "main-menu" => "Main Menu Location",
      "side-menu" => "Side Menu Location",
   )
);

// Skapar custom templates för sidor som ska se annorlunda ut från de andra.
function custom_page_template( $templates ) {
   $templates['template-custom.php'] = 'Custom Template';
   $templates['template-undersida2.php'] = 'Undersida 2 Template';
   $templates['template-no-sidebar.php'] = 'No Sidebar Template';
   $templates['template-contact.php'] = 'Contact Template';
   $templates['template-undersida4.php'] = 'Undersida 4 Template';
   return $templates;
}
add_filter( 'theme_page_templates', 'custom_page_template' );