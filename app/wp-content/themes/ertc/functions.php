<?php

add_action( 'wp_enqueue_scripts', 'style_and_script' );
add_action( 'wp_footer', 'script_them' );
add_action( 'after_setup_theme', 'register_settings' );

function register_settings() {
	add_theme_support( 'post-thumbnails', array( 'post' ) );
	add_filter( 'excerpt_more', function ( $more ) {
		return '';
	} );
}

function style_and_script() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	wp_enqueue_style( 'maincss', get_template_directory_uri() . '/css/main.css' );
	wp_deregister_script( 'jquery-core' );
	wp_register_script( 'jquery-core', '//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js' );
	wp_enqueue_script( 'jquery' );
}

function script_them() {
	wp_enqueue_script( 'init', get_template_directory_uri() . '/buildjs/index.js' );
	add_filter( 'script_loader_tag', 'codeless_remove_type_attr', 10, 2 );
	function codeless_remove_type_attr( $tag, $handle ) {
		return preg_replace( "/type=['\"]text\/(javascript|css)['\"]/", '', $tag );
	}
}

add_action( 'init', 'register_post_types' );
function register_post_types() {
	register_post_type( 'graph', array(
		'label'               => null,
		'labels'              => array(
			'name'               => 'Графики', // основное название для типа записи
			'singular_name'      => 'График', // название для одной записи этого типа
			'add_new'            => 'Добавить график', // для добавления новой записи
			'add_new_item'       => 'Добавление графика', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование графика', // для редактирования типа записи
			'new_item'           => 'Новый график', // текст новой записи
			'view_item'          => 'Смотреть график', // для просмотра записи этого типа.
			'search_items'       => 'Искать график', // для поиска по этим типам записи
			'not_found'          => 'Не найден график', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найден график в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'графики', // название меню
		),
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true,
		// зависит от public
		'exclude_from_search' => true,
		// зависит от public
		'show_ui'             => true,
		// зависит от public
		'show_in_menu'        => true,
		// показывать ли в меню адмнки
		'show_in_admin_bar'   => true,
		// по умолчанию значение show_in_menu
		'show_in_nav_menus'   => true,
		// зависит от public
		'show_in_rest'        => null,
		// добавить в REST API. C WP 4.7
		'rest_base'           => null,
		// $post_type. C WP 4.7
		'menu_position'       => 2,
		'menu_icon'           => 'dashicons-chart-line',
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => array('title'),
		// 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => array(),
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	) );
	register_post_type( 'contacts', array(
		'label'               => null,
		'labels'              => array(
			'name'               => 'Контакты', // основное название для типа записи
			'singular_name'      => 'Контакт', // название для одной записи этого типа
			'add_new'            => 'Добавить Контакт', // для добавления новой записи
			'add_new_item'       => 'Добавление контакта', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование контакта', // для редактирования типа записи
			'new_item'           => 'Новый контакт', // текст новой записи
			'view_item'          => 'Смотреть контакт', // для просмотра записи этого типа.
			'search_items'       => 'Искать контакт', // для поиска по этим типам записи
			'not_found'          => 'Не найден контакт', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найден контакт в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'контакты', // название меню
		),
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true,
		// зависит от public
		'exclude_from_search' => true,
		// зависит от public
		'show_ui'             => true,
		// зависит от public
		'show_in_menu'        => true,
		// показывать ли в меню адмнки
		'show_in_admin_bar'   => true,
		// по умолчанию значение show_in_menu
		'show_in_nav_menus'   => true,
		// зависит от public
		'show_in_rest'        => null,
		// добавить в REST API. C WP 4.7
		'rest_base'           => null,
		// $post_type. C WP 4.7
		'menu_position'       => 3,
		'menu_icon'           => 'dashicons-admin-site-alt2',
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => array('title'),
		// 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => array(),
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	) );
	register_post_type( 'settings', array(
		'label'               => null,
		'labels'              => array(
			'name'               => 'Настройки сайта', // основное название для типа записи
			'singular_name'      => 'Настройка сайта', // название для одной записи этого типа
			'add_new'            => 'Добавить настройку', // для добавления новой записи
			'add_new_item'       => 'Добавление настройки', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование настройки', // для редактирования типа записи
			'new_item'           => 'Новая настройка', // текст новой записи
			'view_item'          => 'Смотреть настройку', // для просмотра записи этого типа.
			'search_items'       => 'Искать настройку', // для поиска по этим типам записи
			'not_found'          => 'Не найдена настройка', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдена настройка в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'настройки сайта', // название меню
		),
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true,
		// зависит от public
		'exclude_from_search' => true,
		// зависит от public
		'show_ui'             => true,
		// зависит от public
		'show_in_menu'        => true,
		// показывать ли в меню адмнки
		'show_in_admin_bar'   => true,
		// по умолчанию значение show_in_menu
		'show_in_nav_menus'   => true,
		// зависит от public
		'show_in_rest'        => null,
		// добавить в REST API. C WP 4.7
		'rest_base'           => null,
		// $post_type. C WP 4.7
		'menu_position'       => 4,
		'menu_icon'           => 'dashicons-admin-generic',
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => array('title'),
		// 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => array(),
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	) );
}