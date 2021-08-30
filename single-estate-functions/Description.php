<?php
function Description($data){
$description = $data['estate']['description']['fr'];
?>
<section class="contener">
    <h2>Description</h2>
    <div class="separator"></div>
    <?php echo $description?>
</section>
<?php }?>