<?php

add_filter( 'nav_menu_link_attributes', 'dl_menu_add_class', 10, 3 );

function dl_menu_add_class( $atts, $item, $args ) {
	$class = 'nav-link dropdown-toggle';
	$atts['class'] = $class;
	return $atts;
}





function new_submenu_class($menu) {    
    $menu = preg_replace('/ class="sub-menu"/','/ class="dropdown-menu" /',$menu);        
    return $menu;      
}

add_filter('wp_nav_menu','new_submenu_class');