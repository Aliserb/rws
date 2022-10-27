<?php
/*
this file creating new post type
*/

function creating_post_type() {
    add_action( 'init', 'rws_reviews' ); // Использовать функцию только внутри хука init
    function rws_reviews() {
        $labels = array(
            'name' => 'Отзывы',
            'singular_name' => 'Отзывы', // админ панель Добавить->Функцию
            'add_new_item' => 'Добавить новый отзыв', // заголовок тега <title>
            'edit_item' => 'Редактировать запись',
            'all_items' => 'Все отзывы',
            'search_items' => 'Искать отзывы',
            'not_found' =>  'Отзыв не найден.',
            'not_found_in_trash' => 'В корзине нет отзывов.',
            'menu_name' => 'Отзывы' // ссылка в меню в админке
        );
        $args = array(
            'labels' => $labels,
            'public' => true,
            'publicly_queryable' => true,
            'show_ui' => true, // показывать интерфейс в админке
            'has_archive' => true,
            'menu_position' => 20, // порядок в меню
            'hierarchical' => false,
            'rewrite' => array(
                'slug' 		 => 'rws_reviews',
                'with_front' => false,
                'pages'      => true,
                'feeds'      => false,
                'feed'       => false,
            ),
            'supports' => array('title','editor','thumbnail','page-attributes',)
        );
        register_post_type('rws_reviews', $args);
    }                     
}

creating_post_type();
?>