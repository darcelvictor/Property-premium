<?php

require_once (__DIR__.'/functions.php');

function estate_gallery_thumbnails($estate){
    $permalink=$estate["permalink"];
    $image = $estate['meta']['features']['images'][0];
    $status = $estate['meta']['estate']['status'];
    $negotiation=$estate['meta']['features']['negotiation'];
    $city_location=$estate['meta']['location']['city'];
    $title=$estate['meta']['estate']['title']['fr'];
    $amount=$estate['meta']['price']['amount'];
    $price = number_format($amount, '0', ',', ' ');
    $facilities= $estate['meta']['facilities'];
    $bedrooms= $facilities['bedrooms'];
    $bathrooms= $facilities['bathrooms'];
    $size=$estate['meta']['sizes']['liveable_area']['size'];
    ?>
    <a href=<?php print($permalink);?> class="estate_thumbnail_container">
    <div class="estate_thumbnail">
        <?php
        if( !empty($image) ) {?>
            <img src="<?php echo esc_url($image['sizes']['medium']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php }
        // echo(json_encode($estate,JSON_UNESCAPED_SLASHES | JSON_HEX_QUOT | JSON_HEX_TAG | JSON_PRETTY_PRINT));
        echo ('<p class="negociation">').(status_print($status, $negotiation)).(' à ').($city_location).('</p>');?>
        <p class="estate-title"> <?php echo($title);?> </p>
        <div class="row_thumbnail">
            <div class="col_thumbnail">
                <p class="estate-price"><?php echo($price)?> €</p>
            </div>
            <div class="col_thumbnail">
                <p class="bedrooms-title"><i aria-hidden="true" class="fas fa-bed"></i><?php echo($bedrooms);?> </p>
                <p class="bathrooms-title"><i aria-hidden="true" class="fas fa-bath"></i><?php echo($bathrooms);?> </p>
                <p class="bathrooms-title"><i aria-hidden="true" class="fas fa-vector-square"></i><?php echo($size);?> m²</p>
            </div>
        </div>
        <button>Découvrir</button>
    </div>
    </a>


    <?php
}
?>