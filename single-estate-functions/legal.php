<?php
function Legal($data){
    $EPC_total=$data["energy_details"]["total_epc_value"];
    $cadastral_income=$data["property_and_land"]["cadastral_income"];
    $reportEG=$data["energy_details"]["report_electricity_gas"];

    if(!empty($cadastral_income) or !empty($co2_emissions)){
    ?>
    <section class="contener">
    <h2>Mentions urbanistiques & légales</h2>
    <div class="separator"></div>
    <p>
    <?php if(!empty($EPC_total)) { ?>
        <div class="listSeparatorCont">Consommation totale d'énergie primaire<span></span><?php echo $EPC_total ?> KWh</div>
    <?php } ?>
    <?php if(!empty($reportEG)) { ?>
        <div class="listSeparatorCont">Certificat d'installation électrique/gaz<span></span><?php echo $reportEG ?></div>
    <?php } ?>
    <?php if(!empty($cadastral_income)) { ?>
        <div class="listSeparatorCont">Revenu Cadastral<span></span><?php echo(number_format($cadastral_income, '0', ',', ' ')) ?> €</div>
    <?php } ?>
    </p>
    </section>
    <?php 
    }
    
}
?>