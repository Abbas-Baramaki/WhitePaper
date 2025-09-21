<?php
/*
Plugin Name: WhitePaper API
Plugin URI: https://abbas-baramaki.ir/whp-api
Description: This plugin made for whitepaper API
Author: Zynrax
Author URI: https://abbas-baramaki.ir/
*/
$limit = 9999;
$author = false;

include get_stylesheet_directory() . "/includes/icons.php";
include  __DIR__ . "/query.php";
include __DIR__ . "/user.php";
define('Limit','10');

if (!defined("ABSPATH"))
{
    exit;
}

if (isset($_GET["limit"]))
{
    $limit = (int)$_GET["limit"];
}
else if (isset($_GET["author"])){
    $author = (string)$_GET["author"];
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
    global $wpdb,$limit,$author;

    $query = "";
    if ($author)
    {
        $query = "select * from wp_products where author = '$author' and review = true order by stars DESC limit $limit ";
    }
    else {
        $query = "select * from wp_products where review = true order by stars DESC limit $limit";

    }

    $result = $wpdb->get_results($query);   

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
            "stars"=>$value->stars,
            "image_path"=>$value->image_path,
            "amount"=>$value->amount,
            "pk"=>$value->pk
        ));
        }
    }
    return $data;
}

add_action("rest_api_init","books_api");
add_action("rest_api_init","bookquery");
add_action("rest_api_init","user_api");


?>
