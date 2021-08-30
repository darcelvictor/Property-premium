<?php

require (__DIR__.'/data.php');

function not_empty_tab($tab)
{
    foreach($tab as $case){
        if (!empty($case)){
           return true;
        }
    }
}

function print_with_text($name,$data,$unit="")
{
    if(!empty($data)){
        $res = "<b> $name : </b> $data$unit</br>";
        echo $res;
    }
}

function trad($word, $db)
{
    $i= array_search($word, array_column($db,"eng"));
    return($db[$i][0]);
}

function print_facilities($data)
{
    $facilities=$data["facilities"];
    if( not_empty_tab($facilities)): ?>
            <?php foreach( $facilities as $key => $value ): 
            if ($value>0): //if no room, no string
                $room = array_search($key, array_column(FACILITIES,"eng"))
                ?>
                <li><i aria-hidden="true" class="fas fa-check"></i><?php echo $value ? $value : 'no' ?> <?php print(FACILITIES[$room][0]) ?></li>
            
            <?php endif;
         endforeach; ?>
    <?php endif;
}


function print_confort($data)
{
    $conforts=$data["comfort"];
    if( not_empty_tab($conforts) ): ?>
            <?php foreach( $conforts as $key => $value ): 
            if ($value>0):
                $room = array_search($key, array_column(CONFORTS,"eng"))
                ?>
                <li><i aria-hidden="true" class="fas fa-check"></i><?php print(CONFORTS[$room][0]) ?></li>
            
            <?php endif;
         endforeach; ?>
    <?php endif;
}

function print_ecology($data)
{
    $ecology=$data["ecology"];
    if( not_empty_tab($ecology) ): ?>
            <?php foreach( $ecology as $key => $value ): 
            if ($value>0):
                $room = array_search($key, array_column(ECOLOGY,"eng"))
                ?>
                <li><i aria-hidden="true" class="fas fa-check"></i><?php print(ECOLOGY[$room][0]) ?></li>
            
            <?php endif;
         endforeach; ?>
    <?php endif;
}

function terrace_orientation($data)
{
    $or=$data["orientation"]["terrace_orientation"];
   if (! empty($or)):
    $i= array_search($or, array_column(ORIENTATION,"eng"));
    $french_orientation = ORIENTATION[$i][0];
    print "orientée $french_orientation";
   endif;
}

function garden_orientation($data)
{
    $or=$data["orientation"]["garden_orientation"];
   if (! empty($or)):
    $i= array_search($or, array_column(ORIENTATION,"eng"));
    $french_orientation = ORIENTATION[$i][0];
    print "orienté $french_orientation";
   endif;
}


function print_amenites($data)
{
    $amenites=$data["amenities"]["amenity"];
    if( !empty( $amenites ) ): ?>
            <?php
            foreach( $amenites as $amenity ):
                $room = array_search($amenity["amenity_type"], array_column(AMENITIES,"eng"));
                if (($amenity["amenity_type"]!="terrace") and ($amenity["amenity_type"]!="garden")) :?>
                <li><i aria-hidden="true" class="fas fa-check"></i><?php print(AMENITIES[$room][0]) ?></li>
                <?php elseif (($amenity["amenity_type"]=="terrace")):?>
                    <li><i aria-hidden="true" class="fas fa-check"></i><?php print(AMENITIES[$room][0]) ?> <?php terrace_orientation($data)?></li>
                <?php elseif (($amenity["amenity_type"]=="garden")):?>
                    <li><i aria-hidden="true" class="fas fa-check"></i><?php print(AMENITIES[$room][0]) ?> <?php garden_orientation($data)?></li>
                <?php endif;
         endforeach; ?>
    <?php endif;
}

function print_condition($data)
{
    $condition=$data["conditions"]["general_condition"];
    if( !empty($condition) ): ?>
    <h4>État</h4>
        <p><?php echo $condition ?></p>
    <?php
    endif;
}


function status_print($status, $negotiation){
    if (($status==="available"|| $status==="under_contract") && $negotiation==="sale"){
        return "À vendre";
    }
    if (($status==="sold" || $status==="option") && $negotiation==="sale"){
        return "Vendu";
    }
    if (($status==="available"|| $status==="under_contract") && $negotiation==="let"){
        return "À louer";
    }
    if (($status==="sold" || $status==="rented" || $status==="option") && $negotiation==="sale"){
        return "Loué";
    }
}


?>