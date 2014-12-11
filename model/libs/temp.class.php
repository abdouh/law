<?php

class Temp {

    static function get_template($data) {
        
    }
    
    
    
    
    
    

}


$templates = array();

$templates['slider_item'] = <<<HERE
    <!-- carousel item -->
    <div class="item">
        <img src=":img_url" width="1920" height="1080">
        <div class="carousel-caption">
            <div class="tb">
                <div class="tb-cell">
                    :data
                </div>
            </div>
        </div>					
    </div>
    <!-- carousel item -->
HERE;



