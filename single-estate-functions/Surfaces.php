<?php

require_once (__DIR__.'/functions.php');
require_once (__DIR__.'/data.php');

function Surfaces($data)
{
    $rooms = $data["rooms"]["room"];
    if (!empty($rooms)) :?>
    <section class="contener" id="superficie">
        <h2>Surfaces</h2>
        <div class="separator"></div>
            <ul>
                <?php foreach( $rooms as $room ):?>
                <?php $roomTrad = array_search($room["type"], array_column(AREA,"eng")); 
                    if ($roomTrad !== false) { ?>
                        <li><div class="listSeparatorCont"><?php echo(ucfirst(AREA[$roomTrad]["fr"])) ?><span></span><?php echo $room["size"].AREA[$roomTrad]["unit"] ?></div></li> 
                    <?php } 
                    else { ?>
                        <li><div class="listSeparatorCont"><?php echo(ucfirst($room["type"])) ?><span></span><?php echo($room["size"]) ?> m²</div></li> 
                    <?php

                    }; 
                endforeach; ?>
            </ul>
    </section>
    <?php endif;
}
?>