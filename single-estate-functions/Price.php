<?php
function Price($data){
    $price = $data['price']['amount'];
    $condition = $data['conditions']['general_condition'];
    $formatted_price = number_format($price, '0', ',', ' ') 
    ?>
    <section class='contener' id="price">
    <h2>Prix et État</h2>
    <div class="separator"></div>
    <div class="row">
        <div class="col">
            <p>Prix</p>
            <p><b><?php echo $formatted_price?> €</b></p>
        </div>
        <div class="col">
            <p>État</p>
            <img class="condImage" src="<?php echo esc_url(get_stylesheet_directory_uri()),("/images/condition/"),($condition),(".png"); ?>">
        </div>
    </section>
    <?php
}
?>