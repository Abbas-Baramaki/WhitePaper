<?php
include_once get_stylesheet_directory() . "/includes/icons.php";
// include_once get_stylesheet_directory() . "/patterns/search.php";
        include get_stylesheet_directory() . "/patterns/search-grid.php";

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
        if ($this->path ==  "" | $this->path == " " | $this->path == null | $this->path == get_stylesheet_directory_uri())
        {
            $this->path = get_stylesheet_directory_uri() . "/files/images/noCover.jpg";
        }
        else {

        }
        global $icons_grid;
        $code = '
        
            <div class="flexbox-container__item flex col p-1 ">
                <div class="flexbox-container-item__pic"><img src="' . $this->path . '">
                </div>
                <div class="flexbox-container-item__general p-2 flex col">
                    <div class="flexbox-container-item-general__title flex jc-s a-c p-1">'. $this->title . '</div>
                    <div class="flexbox-container-item-general__description p-1 flex a-c">' . $this->description . '</div>
                    <div class="flexbox-container-item-general__stars p-1"><span class ="b" >  ' .$this->amount .  '</span> Product Available</div>
                </div>
                <div class="flexbox-container-item__footer flex row a-e">
                    <div class="flexbox-container-item-footer__content flex row gap-1 jc-e a-c p-2">
                        Cost
                    </div>
                    <div class="flexbox-container-item-footer__price flex row gap-1 jc-e a-c pl-2 pr-2">
                        <div class="flexbox-container-item-footer-price__icon flex a-c jc-c">' .$icons_grid["price"] . '</div>
                        <div class="flexbox-container-item-footer-price__value flex a-c jc-c">' . $this->price . '</div>
                    </div>
                    <div class="flexbox-container-item-footer__porcu">
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
    $rows = "";
    global $wpdb;
    $atts = shortcode_atts(
        array(
            "query" => "SELECT * FROM wp_products LIMIT 20",
            "top"=>"true",
        ),
        $atts
    );
    if ((bool)$atts["top"] == true)
    // if (true)
    {

        _searchgrid();
        
        
        
        // '
        
        //                     <div class="flexbox-search flex row gap-2 p-1 a-c jc-c">
        //                 <div class="flexbox-search__query">
        //                     <input type="text" value="Book">
                            
        //                 </div>
        //                 <div class="flexbox-search__submit flex a-c jc-c">
        //                 '.$icons_grid["search"].'
        //                 </div>
                    
        //             </div>
        
        // ';
    }
    else {

    }
    $rows = '
                    

                    <div class="flexbox-container flex p-1 row  gap-2">
                
        
        
        
                    ';

    $items = $wpdb->get_results($atts["query"]);
    foreach ($items as $row) { 

        $book = new Book($row->title,$row->description,$row->author,$row->price,$row->image_path,$row->amount);
        $rows .= $book->GetHTML();
    }


    $rows .= "</div>";
    // if (is_page("books") | is_page())
    // if (true)
    // {
    //     return $rows;
    // }
    // else {
    //     return "";
    // }
    return $rows;
}
?>
<div id="root"></div>


<script type="text/babel">
    import React from 'react';
    import ReactDom from 'react-dom';
    const book = ()=>{
        let code = `
            <div class="ex"  style="background-color:red;width:100%;height:10rem;"></div>
        `;
        return code;
    }
    ReactDom.render(book,document.getElementById("root");
)

</script>