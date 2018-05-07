<?php
/**
 * @package Pet Animal Store
 * @subpackage pet-animal-store
 * @since pet-animal-store 1.0
 * Setup the WordPress core custom header feature.
 *
 * @uses pet_animal_store_header_style()
*/

function pet_animal_store_custom_header_setup() {

	add_theme_support( 'custom-header', apply_filters( 'pet_animal_store_custom_header_args', array(

		'default-text-color'     => 'fff',
		'header-text' 			 =>	false,
		'width'                  => 1600,
		'height'                 => 400,
		'wp-head-callback'       => 'pet_animal_store_header_style',
	) ) );

}

add_action( 'after_setup_theme', 'pet_animal_store_custom_header_setup' );

if ( ! function_exists( 'pet_animal_store_header_style' ) ) :

/**
 * Styles the header image and text displayed on the blog
 *
 * @see pet_animal_store_custom_header_setup().
 */

function pet_animal_store_header_style() {
	$header_text_color = get_header_textcolor();
	?>
	<style type="text/css">
	<?php
		//Check if user has defined any header image.
		if ( get_header_image() ) :
	?>
		#header{
			background: url(<?php echo esc_url(get_header_image()); ?>) no-repeat;
			background-position: center top;
		}
	<?php endif; ?>	
	</style>
	<?php
}
endif; // pet_animal_store_header_style