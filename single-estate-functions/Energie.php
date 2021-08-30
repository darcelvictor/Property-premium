<?php
function Energie($data){
    $EPC_category=$data["energy_details"]["epc_category"];
    $EPC_value=$data["energy_details"]["epc_value"];
    $energy_type=$data["features"]["energy"];

    foreach($energy_type as $energy){
        if (!empty($energy)){
            $energy_isnot_empty=1;
        }
    }
    if($energy_isnot_empty or !empty( $EPC_category)){
    ?>
    <section class="contener" id="energie">
    <h2>Energie</h2>
    <div class="separator"></div>
    <div class="row">
        <div>
            <ul>
                <?php foreach( $energy_type as $key => $value ):
                if ($value> 0):
                    $energy = array_search($key, array_column(ENERGY,"eng"))?>
                    <li><i aria-hidden="true" class="fas fa-check"></i> <?php print(ENERGY[$energy][0]) ?></li>
                <?php endif;
                endforeach; ?>
            </ul>
        </div>
        <div>
            <ul>
                <?php print_ecology($data);?>
            </ul>
        </div>
        <?php if(!empty( $EPC_category)):?>
            <div class="epc">
                <p class="value"><?php echo $EPC_value ?>kWh/m²</p>
                <p class="def">CONSOMMATION<br>SPÉCIFIQUE<br>D’ÉNERGIE<br>PRIMAIRE</p>
                <img class="epcImage" src="<?php echo (get_stylesheet_directory_uri()),("/images/peb/"),($EPC_category),(".png"); ?>">
                <p class="def">NIVEAU DPE/PEB</p>
            </div>
        <?php endif;?>
    </div>
    </section>
    <?php
    }
}
?>