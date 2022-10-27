<?php
/*
Plugin Name: RWS
Description: Простой плагин для отзывов
Version: 1.0
Author: Alisher
*/

define('RWS_FOLDER', plugin_basename(dirname(__FILE__)));
define('RWS_DIR', WP_PLUGIN_DIR . '/' . RWS_FOLDER);
define('RWS_URL', plugins_url( '/', __FILE__ ));

require_once RWS_DIR . '/admin/rws_post_type.php';
require_once RWS_DIR . '/public/rws_form.php';
require_once RWS_DIR . '/public/rws_ajax.php';
require_once RWS_DIR . '/rws_hooks.php';
require_once RWS_DIR . '/admin/rws_post_fields.php';

function rws_activated() {

}

register_activation_hook(__FILE__, 'rws_activated');
?>