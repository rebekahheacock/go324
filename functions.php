<?php

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

function go324_widgets_init() {

	register_sidebar(array('name'=>'Header (Full-width Area)',
	    'description' => 'Widget area for "Instagram" widget.',
	    'id' => 'fullwidth_header',
	    'before_widget' => '<div class="widget %2$s" id="%1$s">',
	    'after_widget' => '<div class="clear"></div></div>',
	    'before_title' => '<h3 class="title">',
	    'after_title' => '</h3>',
	));

}
add_action( 'widgets_init', 'go324_widgets_init' );

