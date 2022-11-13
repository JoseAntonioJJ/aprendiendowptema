<?php
/* enlazar css para modificar login de wp*/
/* function agenda_link_logincss(){
    wp_enqueue_style('custom_login',get_stylesheet_directory_uri()."assets/css/login-style.css");
};
add_action('login_enqueue_scripts','agenda_link_logincss'); */

/* consultas reutilizables */

require (get_template_directory(). "/inc/queries.php");

//funciones del tema
function agenda_setup(){
    // habilita imagenes destacadas
    add_theme_support('post-thumbnails');
    // definir y agregar imagenes de tamaño personalizado
    add_image_size('logo',150,150,true);
    add_image_size('square',350,350,true);
    add_image_size('portrait',350,724,true);
    add_image_size('cajas',400,375,true);
    add_image_size('mediano',700,400,true);
    add_image_size('blog',966,644,true);
};
add_action('after_setup_theme', 'agenda_setup');

// Menus de navegacion
function agenda_menus(){
    //habilita los menus de navegacion y los registra
    register_nav_menus(array(
        'menu-principal' => __('Menu de Principal','learning_wp_theme')
        ));
};
add_action('init','agenda_menus');

//Scripts y Styles
function agenda_scripts_styles(){
    $rutafuentesOpenSans ='https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Raleway:ital,wght@0,300;0,400;0,600;1,300;1,400;1,600&family=Staatliches&display=swap';

    // Normalize.css https://necolas.github.io/normalize.css/ version 8.0.1
    wp_enqueue_style('normalize', get_template_directory_uri().'/assets/css/normalize.css', array(), '8.0.1');

    //fuentes del sitio web prestadas por google fonts
    wp_enqueue_style('googleFonts', $rutafuentesOpenSans, array(), '1.0.0');

    //cargar slicknav tanto css como js para los menus responsivos
    wp_enqueue_style('slicknavCSS', get_template_directory_uri().'/assets/css/slicknav.css', array(),'1.0.10');
    wp_enqueue_script('slicknavJS', get_template_directory_uri().'/assets/js/jquery.slicknav.js', array('jquery'),'1.0.10',true);// true para cargar en el footer

    /* //fuente medicall obtenida en https://www.1001fonts.com/medicall-font.html y cargada desde /fonts
    wp_enqueue_style('medicall', get_template_directory_uri().'/assets/fonts/medicall/medicall.woff',array(),'1.0.0'); */


    // hoja de stilos style.css del tema
    wp_enqueue_style('style',get_stylesheet_uri(),array('normalize','googleFonts'),'1.0.0');

    // scripts de js personalizados
    wp_enqueue_script('scripts', get_template_directory_uri().'/assets/js/scripts.js', array('jquery','slicknavJS'), '1.0.0', true);

};
add_action('wp_enqueue_scripts','agenda_scripts_styles');