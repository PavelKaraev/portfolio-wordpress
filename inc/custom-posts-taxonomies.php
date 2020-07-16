<?php
    if ( ! defined( 'ABSPATH' ) ) {
        exit;
    }

    function create_catalog_taxonomy(){


        register_taxonomy('project-category', array('project'), array(
            'label'                 => '', // определяется параметром $labels->name
            'labels'                => array(
                'name'              => 'Категории проектов',
                'singular_name'     => 'Категория проекта',
                'search_items'      => 'Искать категорию',
                'all_items'         => 'Все категории',
                'view_item '        => 'Просмотреть категорию',
                'parent_item'       => 'Родительская категория',
                'parent_item_colon' => 'Родительская категория:',
                'edit_item'         => 'Редактировать категорию',
                'update_item'       => 'Обновить категорию',
                'add_new_item'      => 'Добавить новую категорию',
                'new_item_name'     => 'Новое имя категории',
                'menu_name'         => 'Категории проектов',
            ),
            'description'           => '', // описание таксономии
            'public'                => true,
            'publicly_queryable'    => null, // равен аргументу public
            'show_in_nav_menus'     => true, // равен аргументу public
            'show_ui'               => true, // равен аргументу public
            'show_in_menu'          => true, // равен аргументу show_ui
            'show_tagcloud'         => false, // равен аргументу show_ui
            'show_in_rest'          => null, // добавить в REST API
            'rest_base'             => null, // $taxonomy
            'hierarchical'          => true,
            'update_count_callback' => '',
            'rewrite'               => array('slug' => 'portfolio/category', 'with_front' => false),
            //'query_var'             => $taxonomy, // название параметра запроса
            'capabilities'          => array(),
            'meta_box_cb'           => null, // callback функция. Отвечает за html код метабокса (с версии 3.8): post_categories_meta_box или post_tags_meta_box. Если указать false, то метабокс будет отключен вообще
            'show_admin_column'     => false, // Позволить или нет авто-создание колонки таксономии в таблице ассоциированного типа записи. (с версии 3.5)
            '_builtin'              => false,
            'show_in_quick_edit'    => null, // по умолчанию значение show_ui
        ) );
    }
    add_action('init', 'create_catalog_taxonomy');
?>
