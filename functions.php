<?php

	/**
	 * Functions
	 *
	 * AARON BUNGE DESIGN
	 *
	 * 
	 * @package aaronbunge
	 * @since Aaron Bunge Design 1.0
	 */
	 
	 // REMOVE AUTO P TAGS ///////////////////////////
	 remove_filter( 'the_content', 'wpautop' );
	 
	 // FEATURED IMAGE SUPPORT ///////////////////////////
	 add_theme_support( 'post-thumbnails' );
	 // end
	 
	 // REMOVE IMAGE SIZE DIMENSIONS ///////////////////////////
	 function remove_img_attr ($html) {
	     return preg_replace('/(width|height)="\d+"\s/', "", $html);
	 }
	 add_filter( 'post_thumbnail_html', 'remove_img_attr' );
	 // end
	 
	 // ADD MENU SUPPORT //////////////////////////////
	 function register_my_menu() {
	   register_nav_menu('header-menu',__( 'Header Menu' ));
	 }
	 add_action( 'init', 'register_my_menu' );
	 // end
	 
	 // UPLOAD SIZE
	 @ini_set( 'upload_max_size' , '50M' );
	 @ini_set( 'post_max_size', '50M');
	 @ini_set( 'max_execution_time', '300' );
	 