<?php

require_once (__DIR__.'/functions.php');
require_once (__DIR__.'/data.php');

function mansonryImageInfo($data){
    $bedrooms =$data["facilities"]["bedrooms"];
    $bathrooms =$data["facilities"]["bathrooms"];
    $LivingArea = $data["sizes"]["liveable_area"]["size"];
    $images = $data['features']['images'];
    ?>
    
    <section id="mansonry">
        <div class="grid">
            <div class="img-1">
                <button class="btnImage" onclick="openGallery()">
                    <img src="<?php echo esc_url($images[0]['sizes']['estate_medium']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                </button>
            </div><div class="img-2">
                <button class="btnImage" onclick="openGallery()">
                    <img src="<?php echo esc_url($images[1]['sizes']['estate_medium']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                </button>
            </div>
            <div class="img-3">
                <button class="btnImage" onclick="openGallery()">
                    <img src="<?php echo esc_url($images[2]['sizes']['estate_medium']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <div class="centered">Afficher la suite</div>
                </button>
            </div>           
        </div>
        <div class="grid2">
            <div class="flex">
                <div class="info info-1"><p><?php echo ('<i aria-hidden="true" class="fas fa-bed"></i>'),("$bedrooms "); ?><br>Chambres</p></div>
                <div class="info info-2"><p><?php echo ('<i aria-hidden="true" class="fas fa-bath"></i>'),("$bathrooms "); ?><br>Salle de bains</p></div>
                <div class="info info-3"><p><?php echo ('<i aria-hidden="true" class="fas fa-vector-square"></i>'),("$LivingArea "); ?><br>m²</p></div>
            </div>
            <a href="#agent "><button>Demander plus d'information</button></a>
        </div>

      
       
        
               
    </section>
    
    
    
    
    <?php
}


?>