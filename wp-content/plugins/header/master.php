<?php
/*
Plugin Name: WhitePaper Header
Plugin URI: https://abbas-baramaki.ir/whp-header
Description: This plugin made for whitepaper header
Author: Zynrax
Author URI: https://abbas-baramaki.ir/
*/

include_once plugin_dir_path(__FILE__) . 'includes/functions.php';
function custom_style()
{
    wp_enqueue_style("header-style",plugin_dir_url(__FILE__) . "/assets/css/style.css");
}
function custom_style_lib()
{
    wp_enqueue_style("header-style",plugin_dir_url(__FILE__) . "/assets/css/lib.css");
}
function custom_style_responsive()
{
    wp_enqueue_style("header-style",plugin_dir_url(__FILE__) . "/assets/css/responsive.css");
}
function custom_script()
{
    wp_enqueue_script("header-style",plugin_dir_url(__FILE__) . "/assets/js/script.js");
}


add_action("wp_enqueue_scripts","custom_style");
add_action("wp_enqueue_scripts","custom_style_lib");
add_action("wp_enqueue_scripts","custom_style_responsive");
add_action("wp_enqueue_scripts","custom_script");
add_action("wp_head","custom_header");

