<?php
    function error($content)
    {
        
        $code = '
        
            <div class="error-container flex a-c jc-c">
                ' . $content .'
            </div>
        
        ';
        return $code;
    }
?>


