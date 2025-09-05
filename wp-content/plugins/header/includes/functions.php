<?php
include_once plugin_dir_path(__FILE__) . "addresses.php";
    
function login_signup()
{
    $code = '
        <div class="action-container flex row gap-4">
            <div class="action-container__login flex a-c jc-c">
                <a href="~/login">
                    Login
                </a>
            </div>
            <div class="action-container__signup flex a-c jc-c">
                <a href="~/signup">
                    Sign up
                </a>
            </div>
        </div>
    ';
    return $code;
}

function custom_header()
{
    global $icons;
    $logo_url = plugin_dir_url(__FILE__) . "../assets/images/logo.png";
    
    $user = wp_get_current_user();
    if(!is_page("login"))
    {
    ?>
    <div class="whp-header flex row">
        <div class="whp-header__vendor flex jc-c a-c">
            <span class="whp-header-vendor__logo flex p-4">
                <img src="<?php echo $logo_url ?>" alt="N">
            </span>
            <span class="whp-header-vendor__content flex a-c">White Paper</span>
        </div>
        <div class="whp-header__navigation flex jc-c a-c row gap-8">

            <a href="#" class="aCustom">
                <div class="whp-header-nav__item flex jc-c a-c row gap-1" destination="home">
                    <div class="whp-header-nav-item__icon jc-c a-c"><?php echo $icons["home"]?></div>
                    <div class="whp-header-nav-item__content flex jc-s a-c">Home</div>
                </div>
            </a>
            <a href="#" class="aCustom">
                <div class="whp-header-nav__item flex jc-c a-c row gap-1" destination="home">
                    <div class="whp-header-nav-item__icon flex jc-c a-c"><?php echo $icons["book"]?></div>
                    <div class="whp-header-nav-item__content flex jc-s a-c">Books</div>
                </div>
            </a>            
            <a href="#" class="aCustom">
                <div class="whp-header-nav__item flex jc-c a-c row gap-1" destination="home">
                    <div class="whp-header-nav-item__icon jc-c a-c"><?php echo $icons["manager"]?></div>
                    <div class="whp-header-nav-item__content flex jc-s a-c">About US</div>
                </div>
            </a>
        </div>
        <div class="whp-header__action flex jc-c a-c">


            <?php

            if (is_user_logged_in()) {
                ?>
                <div class="action-container flex row a-c jc-c gap-3">
                    <div class="action-container__icon flex a-c jc-c">
                        <?php
                        if (current_user_can("administrator")) {
                            echo $icons["admin"];
                        } else {
                            echo $icons["user-male"];
                        }
                    ?>
                    </div>
                <div class="action-container__username flex a-c jc-c">
                    <?php
                    echo $user->display_name;
                    ?>
                </div>
                <div class="action-container__action">
                    <div class="action-container-action__icon">
                        <?php
                        echo $icons["right-arrow"];
                        ?>
                    </div>
                    <div class="action-container-action__content"></div>
                </div>
            </div>
                    <?php
            }
            else{
                echo login_signup();
            }

            ?>

        </div>
    </div>
    <?php
    }
}
