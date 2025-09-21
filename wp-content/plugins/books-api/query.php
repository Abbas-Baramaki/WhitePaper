<?php


function bookquery()
    {
        register_rest_route("whpapi","/books/get",array(
            "methods"=>"POST",
            "callback"=>"bookhandler",
            "permission_callback"=>fn() =>true
        ));
    }
function bookhandler($request)
{

    global $wpdb;
    $id = $request->get_param("id");

    if(isset($id))
    {
        $result = $wpdb->get_row($wpdb->prepare("select * from wp_products where pk = %d",$id));
         if(isset($result->pk))
         {
            return array(
                "pk"=>$result->pk,
                "title"=>$result->title,
                "description"=>$result->description,
                "author"=>$result->author,
                "image_path"=>$result->image_path,
                "amount"=>$result->amount,
                "price"=>$result->price,
                "reseller"=>$result->reseller,
                "viewCount"=>$result->viewCount,
                "stars"=>$result->stars,
                "review"=>$result->review,
                "full_description"=>$result->full_description

            );
         }
         else {
            return "not found";
         }
    }
    else {
        
    }
}
?>
