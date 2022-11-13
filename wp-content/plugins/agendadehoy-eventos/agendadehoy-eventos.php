<?php
/*
Plugin Name: Agendadehoy eventos generator
Plugin URI:
Descripción: Un Custon Content Type desarrollado por Jose Antonio durante la quincena de prácticas para obtener el Certificado Profesional
Version: 1.0.0
Author: Jose Antonio Jiménez Berrocal (benalmed)
Author URI:
Text Domain: learning_wp_theme
*/

if(!defined('ABSPATH')) die(); // seguridad por si alguien quiere abrir en el navegador accediendo al archivo de forma directa

// Registrar Custom Post Type
function agendadehoy_eventos_post_type() {

	$labels = array(
		'name'                  => _x( 'Eventos', 'Post Type General Name', 'agendadehoy' ),
		'singular_name'         => _x( 'Evento', 'Post Type Singular Name', 'agendadehoy' ),
		'menu_name'             => __( 'Eventos', 'agendadehoy' ),
		'name_admin_bar'        => __( 'Evento', 'agendadehoy' ),
		'archives'              => __( 'Archivo', 'agendadehoy' ),
		'attributes'            => __( 'Atributos', 'agendadehoy' ),
		'parent_item_colon'     => __( 'Evento Padre', 'agendadehoy' ),
		'all_items'             => __( 'Todas Los Eventos', 'agendadehoy' ),
		'add_new_item'          => __( 'Agregar Evento', 'agendadehoy' ),
		'add_new'               => __( 'Agregar Evento', 'agendadehoy' ),
		'new_item'              => __( 'Nueva Evento', 'agendadehoy' ),
		'edit_item'             => __( 'Editar Evento', 'agendadehoy' ),
		'update_item'           => __( 'Actualizar Evento', 'agendadehoy' ),
		'view_item'             => __( 'Ver Evento', 'agendadehoy' ),
		'view_items'            => __( 'Ver Eventos', 'agendadehoy' ),
		'search_items'          => __( 'Buscar Evento', 'agendadehoy' ),
		'not_found'             => __( 'No Encontrado', 'agendadehoy' ),
		'not_found_in_trash'    => __( 'No Encontrado en Papelera', 'agendadehoy' ),
		'featured_image'        => __( 'Imagen Destacada', 'agendadehoy' ),
		'set_featured_image'    => __( 'Guardar Imagen destacada', 'agendadehoy' ),
		'remove_featured_image' => __( 'Eliminar Imagen destacada', 'agendadehoy' ),
		'use_featured_image'    => __( 'Utilizar como Imagen Destacada', 'agendadehoy' ),
		'insert_into_item'      => __( 'Insertar en Evento', 'agendadehoy' ),
		'uploaded_to_this_item' => __( 'Agregado en Evento', 'agendadehoy' ),
		'items_list'            => __( 'Lista de Eventos', 'agendadehoy' ),
		'items_list_navigation' => __( 'Navegación de Eventos', 'agendadehoy' ),
		'filter_items_list'     => __( 'Filtrar Eventos', 'agendadehoy' ),
	);
	$args = array(
		'label'                 => __( 'Evento', 'agendadehoy' ),
		'description'           => __( 'Eventos para el Sitio Web', 'agendadehoy' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => true, // true=posts , false=pages
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
        'menu_position'         => 6,
        'menu_icon'             => 'dashicons-welcome-learn-more',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'agendadehoy_eventos', $args );

}
add_action( 'init', 'agendadehoy_eventos_post_type', 0 );