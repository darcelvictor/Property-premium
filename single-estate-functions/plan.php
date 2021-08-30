<?php 

function Plan($data){
    $plans = $data['features']['plans'];
    if( !empty( $plans ) ): ?>
    <section class="contener" id="plan">
     <h2>Plan</h2>
     <div class="separator"></div>
        <div class="planGallery">
            <?php foreach( $plans as $plan ): 
                $extension = strtolower(pathinfo($plan['file']['url'], PATHINFO_EXTENSION));
                if ($extension=="pdf"):?>
                    <div><a href="<?php echo esc_attr($plan['file']['url']); ?>" target="_blank" style="color:black"><i class="fas fa-file-pdf"></i><?php echo($plan['description']); ?></a></div>
                <?php else :?>
                    <div><a href="<?php echo esc_attr($plan['file']['url']); ?>" target="_blank" style="color:black"><image src="<?php echo($plan['file']['sizes']['estate_plan']); ?>"/><?php echo($plan['description']); ?></a></div>
                <?php endif;
            endforeach; ?>
        </div>
    </section>
    <?php endif; }
?>