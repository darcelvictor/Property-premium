<?php
function Visite($data){

    $visite = $data['features']['video_url'];

    if(!empty($visite)):?>
        <section class="contener">
            <h2>Visite</h2>
            <div class="separator"></div>
            <div id="visite">
            </div>

<iframe
  width="100%"
  height="450"
  style="border:0"
  loading="lazy"
  allowfullscreen
  src="<?php echo esc_url($visite)?>">
</iframe>
        </section>
    <?php endif;
}
?>