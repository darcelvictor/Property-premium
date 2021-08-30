<?php

require_once (__DIR__.'/functions.php');
require_once (__DIR__.'/data.php');

function firstBannerInfo($data){
    $estate = $data['estate']['title']['fr'];
    $status = $data['estate']['status'];
    $price = $data['price']['amount'];
    $negotiation= $data["features"]["negotiation"];
    $location = $data['location']['formatted_agency'];
    $formatted_price = number_format($price, '0', ',', ' ');
    $latitude = $data['location']['latitude'];
    $longitude = $data['location']['longitude'];
    
    ?>
    
    <section id="firstBannerInfo">
        <div class="row">
            <div>
                <?php 
                echo ('<p id="negociation">').(status_print($status, $negotiation)).('</p>');
                echo "<h1>$estate</h1>";
                if(!empty($latitude) && !empty($latitude)):
                echo ('<p><i aria-hidden="true" class="fas fa-map-marker-alt"></i >'),(" $location"),('<a class="addresLink" href="#map"> - voir sur la carte</a><p>');
                endif;
                ?>
            </div>
            <div class="headerPrice">
                <?php
                    if($negotiation=="sale"):
                        echo "<b>$formatted_price €<br></b>";
                    else:
                        echo "<b>$formatted_price €/mois<br></b>";
                    endif; 
                ?>
            </div>
        </div>
    </section>
    
    
    
    
    <?php
}


?>