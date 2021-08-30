<?php
/**
 * Property Premium Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Property Premium
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define( 'CHILD_THEME_PROPERTY_PREMIUM_VERSION', '1.0.0' );

/**
 * Enqueue styles
 */
function child_enqueue_styles() {

	wp_enqueue_style( 'property-premium-theme-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), CHILD_THEME_PROPERTY_PREMIUM_VERSION, 'all' );

}

add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 15 );



/**
 * Enqueue lightgallery
 */

function add_light_gallery() {
//css
  wp_enqueue_style( 'lg-style',"https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.1.8/css/lightgallery.min.css");
  wp_enqueue_style( 'lg-zoom-style',"https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.1.8/css/lg-zoom.min.css");
  wp_enqueue_style( 'lg-thumbnails-style',"https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.1.8/css/lg-thumbnail.min.css");
//js
  wp_enqueue_script( 'lg-script',"https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.1.8/plugins/zoom/lg-zoom.min.js", true);
  wp_enqueue_script( 'lg-zoom-script',"https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.1.8/lightgallery.min.js", true);
  wp_enqueue_script( 'lg-thumbnails-script',"https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.1.8/plugins/thumbnail/lg-thumbnail.min.js", true);
}
add_action( 'wp_enqueue_scripts', 'add_light_gallery' );

/**
 * Enqueue font awesome free
 */
function add_font_awesome() {
  wp_enqueue_style( 'fa-style',"https://use.fontawesome.com/releases/v5.15.3/css/all.css");
}
add_action( 'wp_enqueue_scripts', 'add_font_awesome' );





function search_form_func(){?>
  <div id="research_form">
    <div class="border">
    <h2>Recherchez votre futur bien</h2>
    </div>
      <form action="/recherche/" method ="get" >
      <div class="formRow">
        <div class="formCol">
          <label for="negociation" >Vous souhaitez ?</label>
          <select name="negociation" id="negociation" required>
              <option value="sale">Acheter</option>
              <option value="let">Louer</option>
          </select>
        </div>
        <div class="formCol">
          <label for="type">Type de bien</label>
          <select name="type" id="type" required>
              <option value="house">Maison</option>
              <option value="apartment">Appartement</option>
              <option value="land">Terrain</option>
              <option value="parking">Parking</option>
        </select>
        </div>
        <div class="formCol">
          <label for="minprice" >Budget Min.</label>
          <input name="minprice" type="number">
        </div>
        <div class="formCol">
        <label for="maxprice" >Budget Max.</label>
        <input name="maxprice" type="number">
        </div>
        <div class="formCol">
        <label for="roomnumber">Nombre de chambre</label>
        <select name="roomnumber" required>
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="2">3</option>
            <option value="more">plus</option>
        </select>
        </div>
      </div>
      <div id="rowBttn">
        <button type="submit">Rechercher <i class="fas fa-caret-right"></i></button>
      </div>
      </form>
  </div>
<?php
}

add_shortcode( 'search_form', 'search_form_func' );

// Create gallery for listing

function property_gallery($atts, $content = null ) {
  require (__DIR__.'/single-estate-functions/Estate_gallery_thumbnails.php');

  $a = shortcode_atts( array(
		'nbr' => 9,
		'type' => 'available',
	), $atts );
	

  $the_query = WP_SweepBright_Query::list([
    'page'=>1,
    'recent'=>$a['nbr'],
    'showAll' => false,
    'filters' => [
        'status' => $a['type'],
    ]
]);
  
$estates = $the_query['estates'];
?>
<div id="gallery">
    <?php
    foreach ($estates as $estate) {
		estate_gallery_thumbnails($estate);
		$estate = NULL;
    }
	unset($estate);
	wp_reset_postdata();
    
    ?>
</div>
<?php
}

// Shortcode for property sold

// function property_sold_func(){
//   property_gallery($atts, $content = null );
// }
add_shortcode( 'property', 'property_gallery' );



function wpm_new_image(){

// L'image sera tronquée exactement à la dimension indiquée
add_image_size( 'estate_medium', 850, 450, true ); 
add_image_size( 'estate_plan', 320, 180, true ); 


}
add_action( 'after_setup_theme', 'wpm_new_image' );