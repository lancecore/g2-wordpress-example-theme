<?php
add_action( 'widgets_init', 'themename_widgets_init' );
function themename_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Awesome Sidebar', 'theme_name' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<div id="%1$s" class="widget %2$s awesome">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}

function register_my_menus() {
	  register_nav_menus(
		array(
		  'header-menu' => __( 'Header Menu' ),
		 )
	   );
	 }
	 add_action( 'init', 'register_my_menus' );