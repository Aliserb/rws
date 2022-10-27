<?php



function rws_form() {
    return '
        <h3>Оставьте отзыв</h3>

        <div class="rws_form_box">
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
        </div>

        <div class="rws_form_result">
            <div class="rws_form_success rws_form_notice">
                Успех. Ваш отзыв был отправлен. Спасибо ;)
            </div>

            <div class="rws_form_loading rws_form_notice">
                Ваш отзыв отправляется. Не закрывайте страницу.
            </div>

            <div class="rws_form_error rws_form_notice">
                Ой. Что-то пошло не так. Попробуйте еще раз или обратитесь к администратору сайта.
            </div>
        </div>
    ';
}

add_shortcode( 'rws_form_shortcode', 'rws_form' );
?>