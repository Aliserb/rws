<?php
defined( 'WP_UNINSTALL_PLUGIN' ) || exit;

add_action( 'init', 'rws_post_remove', 999 );

function rws_post_remove(){
	unregister_post_type('rws_reviews');
}

function remove_post() {
    $params = array(
        'posts_per_page' => -1, // все посты
        'post_type'	=> 'rws_reviews' // записи, этот параметр можно не указывать, так как post - стоит по умолчанию
    );
    
    $q = new WP_Query( $params );
    if( $q->have_posts() ) : // если посты по заданным параметрам найдены
        while( $q->have_posts() ) : $q->the_post();
            wp_delete_post( $q->post->ID, true ); // второй параметр функции true означает, что пост будут удаляться, минуя корзину
        endwhile;
    endif;
    wp_reset_postdata();
}

add_action( 'init', 'remove_post' );
?>