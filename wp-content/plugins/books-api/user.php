<?php

 
function user_api()
{
    register_rest_route("whpapi","/user", [
        "methods"=>"POST",
        "callback"=>"userhandler",
        "permission_callback"=>fn()=>true,


    ]);
}
function authcallback()
{

}
function userhandler($request)
{
    global $wpdb;
    $username = $request->get_param("username");

    $userid = $wpdb->get_var($wpdb->prepare("select ID from wpusers where user_login = %s",$username));
    $result = $wpdb->get_results($wpdb->prepare("select * from wp_user_card where author = %d order by order_date DESC",$userid));

    $data = [];

    foreach($result as $row ){
        array_push($data,[
            "pk"=>$row->pk,
            "product"=>$row->product,
            "user"=>$row->author,
            "status"=>$row->review,
            "tracking_code"=>$row->tracking_code,
            "date"=>$row->order_date,
        ]);
    }
    return $data;
    
}
