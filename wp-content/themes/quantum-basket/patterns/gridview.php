<?php
include_once get_stylesheet_directory() . "/includes/icons.php";
class Book{

    private $title;
    private $description;
    private $author;
    private $price;
    private $path;
    private $amount;
    function __construct($title,$description,$author,$price,$path,$amount)
    {
        $this->title = $title;
        $this->description = $description;
        $this->author = $author;
        $this->price = $price;
        $this->path = get_stylesheet_directory_uri() . $path;
        $this->amount = $amount; 
        
    }
    function GetHTML()
    {
        global $icons_grid;
        $code = '
        
            <div class="flexbox-container__item flex flex col p-2">
                <div class="flexbox-container-item__pic"><img src="' . $this->path . '">
                </div>
                <div class="flexbox-container-item__general flex col">
                    <div class="flexbox-container-item-general__title flex jc-s a-c p-1">'. $this->title . '</div>
                    <div class="flexbox-container-item-general__description p-1 flex a-c">' . $this->description . '</div>
                    <div class="flexbox-container-item-general__stars p-1"> Amount ' .$this->amount .  ' </div>
                </div>
                <div class="flexbox-container-item__footer flex row">
                    <div class="flexbox-container-item-footer__content flex row gap-1 jc-e a-c p-2">
                        Pricing
                    </div>
                    <div class="flexbox-container-item-footer__price flex row gap-1 jc-e a-c p-2">
                        <div class="flexbox-container-item-footer-price__icon flex a-c jc-c">' .$icons_grid["price"] . '</div>
                        <div class="flexbox-container-item-footer-price__value flex a-c jc-c">' . $this->price . '</div>
                    </div>
                </div>
            </div>
        
        
        ';
        return $code;
    }
}

function _createGridView($atts)
{
    global $icons_grid;

    global $wpdb;
    $atts = shortcode_atts(
        array(
            "query" => "SELECT * FROM wp_products",
            "limit" 
        ),
        $atts
    );
    $rows = '
                    <div class="flexbox-search flex row gap-1 p-1">
                        <div class="flexbox-search__query">
                            <input type="text" value="Book">
                            
                        </div>
                        <div class="flexbox-search__submit flex a-c jc-s p-4">
                        '.$icons_grid["search"].'
                        </div>
                    
                    </div>
                    <div class="flexbox-container flex p-1 row  gap-2">
                
        
        
        
                    ';

    $items = $wpdb->get_results($atts["query"]);
    foreach ($items as $row) { 

        $book = new Book($row->title,$row->description,$row->author,$row->price,$row->image_path,$row->amount);
        $rows .= $book->GetHTML();
    }


    $rows .= "</div>";
    if (is_page("books"))
    {
        return $rows;
    }
    else {
        return "";
    }
}
?>
