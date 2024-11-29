<?php

function init_template(){
    add_theme_support('post-thumbnails');
    add_theme_support( 'title-tag' );

    register_nav_menus(
        array( 'top_menu' => 'Menu principal')
    );
}

add_action( 'after_setup_theme','init_template'  ); 

function assets(){
   
    wp_register_style( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css', array(), '4.5.2', 'all' );

    wp_register_style( 'Montserrat', 'https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap', array(), '1.0', 'all' );
     
    wp_enqueue_style( 'estilos', get_stylesheet_uri(), array('bootstrap', 'Montserrat'), '1.0', 'all' );

    wp_enqueue_style( 'estilos1', get_stylesheet_uri(), array(), '1.0', 'all' );

    wp_register_script('popper', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js',  array(), '2.11.8', true);
    
    wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js', array('jquery','popper'), '5.3.3', true);

    wp_enqueue_script('custom',get_template_directory_uri().'/assets/js/custom.js', array(), '1.0', true);
}

add_action( 'wp_enqueue_scripts', 'assets');


