<?php
/*
Plugin Name: WhitePaper Login
Plugin URI: https://abbas-baramaki.ir/whp-Login
Description: This plugin made for whitepaper login
Author: Zynrax
Author URI: https://abbas-baramaki.ir/
*/

include_once plugin_dir_path(__FILE__) . 'includes/functions.php';
function custom_style()
{
    wp_enqueue_style("login-style",plugin_dir_url(__FILE__) . "/assets/css/style.css");
}
function custom_script()
{
    wp_enqueue_script("login_script",plugin_dir_url(__FILE__) . "assets/js/script.js");
}
function login_user_countainer() {
    return '<div class="login-container">فرم لاگین اینجا</div>';
}
add_shortcode('whp_login', 'login_user_countainer');


add_action("wp_enqueue_scripts","custom_style");
add_action("wp_enqueue_scripts","custom_script");

