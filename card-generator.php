<?php 
    global $wpdb;
    $item = $wpdb->get_results("select * FROM CARD");

    foreach($item as $it){

   echo ' <div class="card">
    <div style="display: flex;">
    <div class="card-content">
    <div class="logo-content">
    <img src= "' . $it->url .   '" class="lazy-image toplist-logo lazy-loaded" title="21.com" alt="21.com">
        <p>' .$it->logo_name. '</p>
    </div>    
    <div class="card-rate">
        <div class="inner-rate">
        '.$it->rate.'/10
        </div>
    </div>
    </div>
    <div class="card-content"> <p>'.$it->liker.'</p></div>
    <div class="card-content"></div>
</div>
</div>';

};

?>