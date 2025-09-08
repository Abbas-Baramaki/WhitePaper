<?php
    include_once get_stylesheet_directory() . "/includes/addresses.php";
    global $photos;

?>

<div class="login-container flex jc-c a-c pt-8">
    
    <form class="login-contatiner__form flex row" method="POST" action="">
        <div class="login-container-form__content flex col">
            <div class="login-container-form-content__header flex a-c jc-c">Welcome Back</div>
            <div class="login-container-form-content__body flex col p-4 gap-2 ">
                <div class="login-container-form-content-body__field flex a-c jc-c ">
                    <input type="text" id="username" name="username" placeholder="Username">
                </div>
                <div class="login-container-form-content-body__field flex  a-c jc-c ">
                    <input type="password" name="password" id="password" placeholder="Password">
                </div>
            </div>
            <div class="login-container-form-content__footer flex a-c jc-c">

                <input type="submit" value="Login">

            </div>
        </div>
        <div class="login-container-form__wal">
            <img src="<?php  echo $photos['sandMountain']; ?>" alt="">
        </div>
    </form>
    
    
</div>