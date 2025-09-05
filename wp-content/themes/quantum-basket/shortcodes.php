<?php

include_once get_stylesheet_directory() . "/includes/addresses.php";

function login_user_countainer() { 
    global $photos;
    ob_start();
    if (!is_user_logged_in())
    {
        include get_stylesheet_directory() . "/patterns/login.php";
        return ob_get_clean() ;

    }
    else {
        wp_redirect(home_url());
        exit();
    }

}


function handle_login_form()
{
    global $wpdb;
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        if(isset($_POST['username']) && isset($_POST['password']))
        {
            $creds = array(
                "user_login" => $_POST['username'],
                "user_password" => $_POST['password']
            );


            $user = $wpdb->get_row($wpdb->prepare("Select * from wpusers where user_login = %s",$creds["user_login"]));
            if ($user && wp_check_password($creds["user_password"],$user->user_pass,$user->ID))
            {
                wp_signon($creds,false);
                wp_redirect(home_url());
                exit;
            }
            else {
                include_once get_stylesheet_directory() . "/patterns/error.php";
                echo error("Your password is wrong");
            }
            // echo ;
        }
    }
}
add_action("init","handle_login_form");
add_shortcode('whp_login', 'login_user_countainer');
?>


