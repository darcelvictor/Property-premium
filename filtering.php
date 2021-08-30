<?php
/**
 * Template Name: Estates filtre
 */




// https://www.youtube.com/watch?v=UBhzNpQ6SqQ&list=PLxNjhgRPhopecPgkvj8HHMKxc4IrwrH7s&index=34&t=849s
require (__DIR__.'/single-estate-functions/index.php');
get_header();?>

<?php
echo do_shortcode( '[search_form]' );


if(isset($_GET['minprice']) && !empty($_GET['minprice'])){
    $minprice = sanitize_text_field($_GET['minprice']);
}
else {
    $minprice=false;
}
if(isset($_GET['maxprice']) && !empty($_GET['maxprice'])){
    $maxprice = sanitize_text_field($_GET['maxprice']);
}
else{
    $maxprice=false;
}
if(isset($_GET['type']) && !empty($_GET['type'])){
    $type = sanitize_text_field($_GET['type']);
    $type = [$type];
}
else{
    $type=["house","apartment","land","parking","commercial_property","office"];
}
if(isset($_GET['negociation']) && !empty($_GET['negociation'])){
    $negociation = sanitize_text_field($_GET['negociation']);
}
else{
    $negociation= false;
}
if(isset($_GET['roomnumber']) && !empty($_GET['roomnumber'])){
    $roomnumber = sanitize_text_field($_GET['roomnumber']);
}
else{
    $roomnumber= false;
}




$the_query = WP_SweepBright_Query::list([
    'page'=>1,
    'recent'=>10,
    'showAll' => false,
	'filters' => [
        'bedrooms'=> [
            'min' => $roomnumber,
        ],
        'status' => 'available',
        'negotiation' => $negociation,
        'category' =>  $type,
        'price' => [
            'min' => $minprice,
            'max' => $maxprice,
        ],
    ]
]);
  
$estates = $the_query['estates'];
?>
<div id="gallery">
    <?php
    foreach ($estates as $estate) {
            estate_gallery_thumbnails($estate);

    }
    unset($estate);
    ?>
</div>


<?php

// $JSON=json_encode($the_query,JSON_UNESCAPED_SLASHES | JSON_HEX_QUOT | JSON_HEX_TAG | JSON_PRETTY_PRINT);
// var_dump($JSON);


get_footer();

?>