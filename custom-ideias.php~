<?php

/**
 * Adicionamos uma acção no inicio do carregamento do WordPress
 * através da função add_action( 'init' )
 */
add_action( 'init', 'create_post_type_ideias' );

/**
 * Esta é a função que é chamada pelo add_action()
 */
function create_post_type_ideias() {

    /**
     * Labels customizados para o tipo de post
     */
    $labels = array(
	    'name' => _x('Ideias', 'post type general name'),
	    'singular_name' => _x('Ideia', 'post type singular name'),
	    'add_new' => _x('Nova Ideia', 'Ideia'),
	    'add_new_item' => __('Nova Ideia'),
	    'edit_item' => __('Editar Ideia'),
	    'new_item' => __('Nova Ideia'),
	    'all_items' => __('Todos ideias'),
	    'view_item' => __('Ver Ideia'),
	    'search_items' => __('Procurar ideias'),
	    'not_found' =>  __('Nenhuma ideia encontrada'),
	    'not_found_in_trash' => __('Nenhuma ideia encontrado no lixo'),
	    'parent_item_colon' => '',
	    'menu_name' => 'ideias'
    );
    
    /**
     * Registamos o tipo de post ideias através desta função
     * passando-lhe os labels e parâmetros de controlo.
     */
    register_post_type( 'ideias', array(
	    'labels' => $labels,
	    'public' => true,
	    'publicly_queryable' => true,
	    'show_ui' => true,
	    'show_in_menu' => true,
	    /*'has_archive' => 'ideias',*/
	    'query_var' => true,
		'rewrite' => array(
		 'slug' => 'ideias',
		 'with_front' => false,
	    ),
	    'capability_type' => 'post',
	    'has_archive' => true,
	    'hierarchical' => true,
	    'menu_position' => null,
	    'supports' => array('title','editor','author','thumbnail','excerpt','comments')
	    )
    );
}

