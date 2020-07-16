<?php
    if ( ! defined( 'ABSPATH' ) ) {
        exit;
    }

    add_action( 'init', 'register_catalog_posts' );

    function register_catalog_posts(){
        register_post_type('project', array(
            'label'  => null,
            'labels' => array(
                'name'               => 'Проекты', // основное название для типа записи
                'singular_name'      => 'Проект', // название для одной записи этого типа
                'add_new'            => 'Добавить проект', // для добавления новой записи
                'add_new_item'       => 'Добавление проекта', // заголовка у вновь создаваемой записи в админ-панели.
                'edit_item'          => 'Редактирование проекта', // для редактирования типа записи
                'new_item'           => 'Новый проект', // текст новой записи
                'view_item'          => 'Просмотреть проект', // для просмотра записи этого типа.
                'all_items' 		 => 'Все проекты',
                'search_items'       => 'Искать проект', // для поиска по этим типам записи
                'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
                'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
                'parent_item_colon'  => '', // для родителей (у древовидных типов)
                'menu_name'          => 'Проекты', // название меню
            ),
            'description'         => '',
            'public'              => true,
            'publicly_queryable'  => null, // зависит от public
            'exclude_from_search' => null, // зависит от public
            'show_ui'             => null, // зависит от public
            'show_in_menu'        => null, // показывать ли в меню адмнки
            'show_in_admin_bar'   => null, // по умолчанию значение show_in_menu
            'show_in_nav_menus'   => true, // зависит от public
            'show_in_rest'        => null, // добавить в REST API. C WP 4.7
            'rest_base'           => null, // $post_type. C WP 4.7
            'menu_position'       => 5,
            'menu_icon'           => 'dashicons-portfolio',
            //'capability_type'   => 'post',
            //'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
            //'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
            'hierarchical'        => false,
            'supports'            => array('title','editor', 'custom-fields','thumbnail'), // 'title','editor','author','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
            'taxonomies'          => array(),
            'has_archive'         => false,
            'rewrite'             => array('slug' => 'portfolio/project', 'with_front' => false),
            'query_var'           => true,
        ) );
    }
?>
