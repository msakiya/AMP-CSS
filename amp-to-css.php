<?php
/*
Plugin Name: AMP - Cambios Moises
Plugin URI: http://www.pymex.com
Description: Cambios CSS a la version AMP (plugin oficial)
Author: Moises Sakiyama
Version: 1.0
Author URI: http://www.pymex.com
License: <a href="https://es.wikipedia.org/wiki/Beerware">Beerware/a>
*/

/* Agregar CSS al AMP */

add_action( 'amp_post_template_css', 'xyz_amp_my_additional_css_styles' );

function xyz_amp_my_additional_css_styles( $amp_template ) {
  .div.col-sec-wrapper.m-b-sm {display:none;}
  .toggle-menu {display:none;}
	?>
	.amp-wp-byline amp-img {
		border-radius: 0; /* we don't want round avatars! */
	}
	.my-custom-class {
		color: blue;
	}
	<?php
}

/* Insertar código arriba y abajo */

add_action( 'amp_post_template_footer', 'xyz_amp_add_pixel' );

function xyz_amp_add_pixel( $amp_template ) {
	$post_id = $amp_template->get( 'post_id' );
	?>
	<amp-pixel src="https://example.com/hi.gif?x=RANDOM"></amp-pixel>
	<?php
}

?>
