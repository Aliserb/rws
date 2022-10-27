<?php



function rws_form() {
    return '
        <form action="./rws_ajax.php" method="POST" class="rws_form">
            <div class="rws_form_input">
                <label for="rws_title">
                    Тема
                </label>

                <input type="text" id="rws_title" name="rws_title">
            </div>

            <div class="rws_form_input">
                <label for="rws_description">
                    Описание
                </label>

                <input type="text" id="rws_description" name="rws_description">
            </div>

            <div class="rws_form_input">
                <label for="rws_name">
                    Ваше имя
                </label>

                <input type="text" id="rws_name" name="rws_name">
            </div>

            <div class="rws_form_input">
                <label for="rws_social_link">
                    Ссылка на социальные сети
                </label>

                <input type="text" id="rws_social_link" name="rws_social_link">
            </div>

            <button type="submit">Отправить</button>
        </form>
    ';
}

add_shortcode( 'rws_form_shortcode', 'rws_form' );
?>