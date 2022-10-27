<?php

function rws_creating_menu() {
    add_action('admin_menu', function(){
        add_menu_page( 'Шорткод вывода формы', 'RWS', 'manage_options', 'site-options', 'rws_menu', '', 20 );
    } );
    
    function rws_menu(){
        ?>
        <div class="wrap">
            <h2><?php echo get_admin_page_title() ?></h2>
    
            <p>вставьте этот шорткод на страницу, в которой хотите вывести форму</p>
    
            <span>
                [rws_form_shortcode]
            </span>
        </div>
    <?php
    }
}

?>