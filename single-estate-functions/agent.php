<?php
function Agent($data){
    $first_name=$data["negotiator"]["first_name"];
    $last_name=$data["negotiator"]["last_name"];
    $phone=$data["negotiator"]["phone"];
    $email=$data["negotiator"]["email"];
    $photo=$data["negotiator"]["photo"];
    $location = $data['location']['formatted_agency'];
    if(!empty($first_name) or !empty($last_name) or !empty($email) or !empty($phone)){
    ?>
    <section class="contener" id="agent">
        <div class="row">
            <img src="<?php echo esc_url($photo['url']); ?>" alt="<?php echo esc_attr($photo['alt']); ?>" />
            <div>
                <h2><?php echo("$first_name $last_name")?></h2>
                <i aria-hidden="true" class="fas fa-phone-alt"></i><a href="phoneto:<?php echo $phone ?>"><?php echo $phone ?></a><br>
                <i aria-hidden="true" class="far fa-envelope"></i><a href="mailto:<?php echo $email ?>"><?php echo $email ?></a><br>
                <button>Appeler Maintenant</button>
            </div>
        </div>
    <div class="separator"></div>
    <p class="title">Ce bien vous intéresse ?</p>
    <p class="subtitle">Remplissez le formulaire ci-dessous, je vous recontacterai dans les plus brefs délais.</p>
    <?php echo do_shortcode( '[contact-request-estate]' ); ?>
    </section>
    <?php 
    }
}
?>