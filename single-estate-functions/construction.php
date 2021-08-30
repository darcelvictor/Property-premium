<?php


function Construction($data){
    $renovation=$data["building"]["renovation"]; 
    $construction=$data["building"]["construction"];
    $a = !empty( $renovation["year"] );
    $b = !empty( $construction["year"] );
    if($a or $b):?>
            <h3>Batiment</h3>
                <?php if( !empty( $construction["year"] ) ):?>
                    <h4>construction</h4>
                    <p><b><?php echo $construction["year"]; ?> : </b><?php echo $construction["architect"]; ?></p>
                <?php endif; ?>
                <?php if( !empty( $renovation["year"] ) ):?>
                    <h4>Rénovation</h4>
                    <p><b><?php echo $renovation["year"]; ?> : </b><?php echo $renovation["description"]; ?></p>
                <?php endif;
    endif;
}


?>