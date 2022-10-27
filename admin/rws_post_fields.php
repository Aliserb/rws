<?php

add_action('add_meta_boxes', 'my_extra_fields', 1);

function my_extra_fields() {
	add_meta_box( 'extra_fields', 'Дополнительные поля', 'extra_fields_box_func', 'rws_reviews', 'normal', 'high'  );
}


// код блока
function extra_fields_box_func( $post ){
	?>
    <div class="rws_post_field">
        <label for="rws_name">
            Имя
        </label>

        <input type="text" name="extra[rws_name]" id="rws_name" value="<?php echo get_post_meta($post->ID, 'rws_name', 1); ?>">
    </div>

    <div class="rws_post_field">
        <label for="rws_social_links">
            Ссылка на социальные сети
        </label>

        <input type="text" name="extra[social_links]" id="rws_social_links" value="<?php echo get_post_meta($post->ID, 'social_links', 1); ?>">
    </div>
	<input type="hidden" name="extra_fields_nonce" value="<?php echo wp_create_nonce(__FILE__); ?>" />
	<?php
}

// включаем обновление полей при сохранении
add_action( 'save_post', 'my_extra_fields_update', 0 );

## Сохраняем данные, при сохранении поста
function my_extra_fields_update( $post_id ){
	// базовая проверка
	if (
		   empty( $_POST['extra'] )
		|| ! wp_verify_nonce( $_POST['extra_fields_nonce'], __FILE__ )
		|| wp_is_post_autosave( $post_id )
		|| wp_is_post_revision( $post_id )
	)
		return false;

	// Все ОК! Теперь, нужно сохранить/удалить данные
	$_POST['extra'] = array_map( 'sanitize_text_field', $_POST['extra'] ); // чистим все данные от пробелов по краям
	foreach( $_POST['extra'] as $key => $value ){
		if( empty($value) ){
			delete_post_meta( $post_id, $key ); // удаляем поле если значение пустое
			continue;
		}

		update_post_meta( $post_id, $key, $value ); // add_post_meta() работает автоматически
	}

	return $post_id;
}

?>