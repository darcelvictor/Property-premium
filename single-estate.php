<?php
/**
 * The template for displaying all estates posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); 

// $data = json_encode(get_fields(),JSON_UNESCAPED_SLASHES | JSON_HEX_QUOT | JSON_HEX_TAG | JSON_PRETTY_PRINT);
// echo $data;

// Import Sections
require (__DIR__.'/single-estate-functions/index.php');

firstBannerInfo(get_fields());
mansonryImageInfo(get_fields());
?>

<div class="template">
	<div class="column_1">
		<?php 
		Caracteristiques(get_fields());
		Surfaces(get_fields());
		Energie(get_fields());
		Description(get_fields());
		Price(get_fields());
		Image(get_fields());
		Plan(get_fields());
		Legal(get_fields());
		Visite(get_fields());
		Map(get_fields());
		?>
	</div>
	<div class="column_2">
		<?php
		Agent(get_fields());
		// Map(get_fields());
		?>
	</div>
</div>
<?php get_footer(); ?>
