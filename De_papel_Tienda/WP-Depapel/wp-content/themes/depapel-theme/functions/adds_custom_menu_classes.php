<?php

function dl_menu_add_class( $atts, $item, $args ) {

	$class = 'nav-link';
	$atts['class'] = $class;
	return $atts;

}

add_filter( 'nav_menu_link_attributes', 'dl_menu_add_class', 10, 3 );
