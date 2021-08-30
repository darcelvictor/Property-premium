<?php

require_once (__DIR__.'/functions.php');


function Caracteristiques($data){
    ?>
    <section class='contener' id="carac">
        <h2>Caractéristiques</h2>
        <div class="separator"></div>
            <ul>
                <?php
                print_facilities($data);
                print_confort($data);
                print_amenites($data);
                ?>
            </ul>
    </section><?php
}


?>