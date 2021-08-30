<?php
function Map($data){
    $latitude = $data['location']['latitude'];
    $longitude = $data['location']['longitude'];
    $location = $data['location']['formatted_agency'];

    if(!empty($latitude) && !empty($longitude)):?>
        <section class="contener">
            <h2>Carte</h2>
            <div class="separator"></div>
            <div id="map">
            </div>

            <iframe
  width="100%"
  height="450"
  style="border:0"
  loading="lazy"
  allowfullscreen
  src="https://www.google.com/maps/embed/v1/place?key=GOOGLE_KEY_API&q=<?php echo urlencode($location)?>">
</iframe>
        </section>
    <?php endif;
}
?>