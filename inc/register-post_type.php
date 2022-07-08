<?php 

add_action( 'init', 'register_post_types' );
function register_post_types(){
	register_post_type( 'case_studies', [
		'label'  => null,
		'labels' => [
			'name'               => 'Case Studies',
			'singular_name'      => 'Case Study',
			'add_new'            => 'Add Case Study',
			'add_new_item'       => 'Add Case Study',
			'edit_item'          => 'Edit Case Study',
			'new_item'           => 'New Case Study',
			'view_item'          => 'View Case Study',
			'search_items'       => 'Search Case Studies',
			'not_found'          => 'Not found',
			'not_found_in_trash' => 'Not fount in trash',
			'parent_item_colon'  => '',
			'menu_name'          => 'Case Studies',
		],
		'description'         => '',
		'public'              => true,
		'show_in_menu'        => null,
		'show_in_rest'        => null,
		'rest_base'           => null,
		'menu_position'       => null,
		'menu_icon'           => null,
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor', 'thumbnail'], // 'title','editor','author','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
		'menu_position'       => 21,
        'menu_icon'           => 'dashicons-pressthis'
	] );

	register_post_type( 'protfolio', [
		'label'  => null,
		'labels' => [
			'name'               => 'Portfolio',
			'singular_name'      => 'Single Portfolio',
			'add_new'            => 'Add Portfolio',
			'add_new_item'       => 'Add Portfolio',
			'edit_item'          => 'Edit Portfolio',
			'new_item'           => 'New Portfolio',
			'view_item'          => 'View Portfolio',
			'search_items'       => 'Search Portfolio',
			'not_found'          => 'Not found',
			'not_found_in_trash' => 'Not fount in trash',
			'parent_item_colon'  => '',
			'menu_name'          => 'Portfolio',
		],
		'description'         => '',
		'public'              => true,
		'show_in_menu'        => null,
		'show_in_rest'        => null,
		'rest_base'           => null,
		'menu_position'       => null,
		'menu_icon'           => null,
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor', 'thumbnail'], // 'title','editor','author','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
		'menu_position'       => 21,
        'menu_icon'           => 'dashicons-pressthis'
	] );

	register_taxonomy( 'copywriting_cat', [ 'post' ], [
		'label'                 => '', // определяется параметром $labels->name
		'labels'                => [
			'name'              => 'Categories',
			'singular_name'     => 'Category',
			'search_items'      => 'Search Category',
			'all_items'         => 'All Categories',
			'view_item '        => 'View Category',
			'parent_item'       => 'Parent Category',
			'parent_item_colon' => 'Parent Category:',
			'edit_item'         => 'Edit Category',
			'update_item'       => 'Update Category',
			'add_new_item'      => 'Add New Category',
			'new_item_name'     => 'New Category Name',
			'menu_name'         => 'Category',
		],
		'description'           => '', // описание таксономии
		'public'                => true,
		'hierarchical'          => false,

		'rewrite'               => true,
		'capabilities'          => array(),
		'meta_box_cb'           => 'post_categories_meta_box', // html метабокса. callback: `post_categories_meta_box` или `post_tags_meta_box`. false — метабокс отключен.
		'show_admin_column'     => false, // авто-создание колонки таксы в таблице ассоциированного типа записи. (с версии 3.5)
		'show_in_rest'          => null, // добавить в REST API
		'rest_base'             => null, // $taxonomy
	] );

	register_post_type( 'copywriting', [
		'label'  => null,
		'labels' => [
			'name'               => 'Copywriting',
			'singular_name'      => 'Copywriting',
			'add_new'            => 'Add Copywriting',
			'add_new_item'       => 'Add Copywriting',
			'edit_item'          => 'Edit Copywriting',
			'new_item'           => 'New Copywriting',
			'view_item'          => 'View Copywriting',
			'search_items'       => 'Search Copywriting',
			'not_found'          => 'Not found',
			'not_found_in_trash' => 'Not fount in trash',
			'parent_item_colon'  => '',
			'menu_name'          => 'Copywriting',
		],
		'description'         => '',
		'public'              => true,
		'show_in_menu'        => null,
		'show_in_rest'        => null,
		'rest_base'           => null,
		'menu_position'       => null,
		'menu_icon'           => null,
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor', 'thumbnail'], // 'title','editor','author','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => ['copywriting_cat'],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
		'menu_position'       => 21,
        'menu_icon'           => 'dashicons-pressthis'
	] );
}