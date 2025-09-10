<?php
/*
Plugin Name: WhitePaper API
Plugin URI: https://abbas-baramaki.ir/whp-api
Description: This plugin made for whitepaper API
Author: Zynrax
Author URI: https://abbas-baramaki.ir/
*/
include get_stylesheet_directory() . "/includes/icons.php";
define('Limit','10');

if (!defined("ABSPATH"))
{
    exit;
}

if (isset($_GET["limit"]))
{
}
else {

}

function books_api()
{
    register_rest_route("whpapi","/books",array(
        "methods"=>"GET",
        "callback"=>"booksCallback",
        "permission_callback"=>fn() =>true
    ));
}

function booksCallback()
{
    global $wpdb;


    $result = $wpdb->get_results("select * from wp_products");   
    
    $data = array();
    foreach($result as $index => $value)
    {
        if((bool)$value->review == true)
        {
        array_push($data,array(

            "title"=>$value->title,
            "description"=>$value->description,
            "price"=>$value->price,
            "author"=>$value->author,
            "reseller"=>$value->reseller,
            "viewCount"=>$value->viewCount,
            "stars"=>$value->stars

        ));
        }
    }
    return $data;
}

add_action("rest_api_init","books_api");
?>
