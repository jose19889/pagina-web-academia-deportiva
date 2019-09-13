<?php
/*
* Creating a function to create our CPT
*/
 
add_action( 'init', 'bf_register_custom_post_type' );
/**
 * Registro un custom post type 'team'.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function bf_register_custom_post_type() {
    /* Añado las etiquetas que aparecerán en el escritorio de WordPress */
	$labels = array(
		'name'               => _x( 'team', 'post type general name', 'text-domain' ),
		'singular_name'      => _x( 'team', 'post type singular name', 'text-domain' ),
		'menu_name'          => _x( 'Team', 'admin menu', 'text-domain' ),
		'add_new'            => _x( 'Añadir nuevo', 'team', 'text-domain' ),
		'add_new_item'       => __( 'Añadir nuevo team', 'text-domain' ),
		'new_item'           => __( 'Nuevo team', 'text-domain' ),
		'edit_item'          => __( 'Editar team', 'text-domain' ),
		'view_item'          => __( 'Ver team', 'text-domain' ),
		'all_items'          => __( 'list all team', 'text-domain' ),
		'search_items'       => __( 'Buscar teams', 'text-domain' ),
		'not_found'          => __( 'No hay teams.', 'text-domain' ),
		'not_found_in_trash' => __( 'No hay teams en la papelera.', 'text-domain' )
	);

    /* Configuro el comportamiento y funcionalidades del nuevo custom post type */
	$args = array(
		'labels'             => $labels,
		'description'        => __( 'Descripción.', 'text-domain' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'team' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
	);

	register_post_type( 'team', $args );
}

// Lo enganchamos en la acción init y llamamos a la función create_book_taxonomies() cuando arranque
add_action( 'init', 'create_book_taxonomies', 0 );  

// Creamos dos taxonomías, género y autor para el custom post type "team"
function create_book_taxonomies() {
  /* Configuramos las etiquetas que mostraremos en el escritorio de WordPress */
  $labels = array(
    'name'             => _x( 'categories', 'taxonomy general name' ),
    'singular_name'    => _x( 'Género', 'taxonomy singular name' ),
    'search_items'     =>  __( 'Buscar por Género' ),
    'all_items'        => __( 'Todos los Géneros' ),
    'parent_item'      => __( 'Género padre' ),
    'parent_item_colon'=> __( 'Género padre:' ),
    'edit_item'        => __( 'Editar Género' ),
    'update_item'      => __( 'Actualizar Género' ),
    'add_new_item'     => __( 'Añadir nuevo Género' ),
    'new_item_name'    => __( 'Nombre del nuevo Género' ),
  );
  
  /* Registramos la taxonomía y la configuramos como jerárquica (al estilo de las categorías) */
  register_taxonomy( 'genero', array( 'team' ), array(
    'hierarchical'       => true,
    'labels'             => $labels,
    'show_ui'            => true,
    'query_var'          => true,
    'rewrite'            => array( 'slug' => 'genero' ),
  ));
  
  /* Si quieres añadir la siguiente taxonomía del ejemplo, sustituye esta línea por la del código correspondiente */
  
}

