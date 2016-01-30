<?php
	
	add_action('after_setup_theme', 'custom_setup' );

	function custom_setup()
	{
		add_action( 'wp_enqueue_scripts', 'custom_formats' );
		
		register_nav_menus( array(
			'menu-header' => 'Menu Header',
			'menu-footer' => 'Menu Rodapé',
		) );

	}

	add_post_type_support( 'page', 'excerpt' );
	add_theme_support( 'post-thumbnails' );

	/**
	 * Função que registra os scripts do site.
	*/ 
	function custom_formats()
	{
		wp_register_style('normalize', PW_THEME_URL. 'assets/css/normalize.css',null, null, 'all');
		wp_register_style('webflow', PW_THEME_URL. 'assets/css/webflow.css',null, null, 'all');
		wp_register_style('rbgv-advogados', PW_THEME_URL. 'assets/css/rbgv-advogados.webflow.css',null, true, 'all');
		wp_register_style('header', PW_THEME_URL. 'assets/css/header.css',null, null, 'all');

		wp_enqueue_script( 'google_jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js',null, null, false );
		wp_enqueue_script( 'modernizr', PW_THEME_URL. 'assets/js/modernizr.js',null, null, false );
		wp_enqueue_script( 'webflow_js', PW_THEME_URL. 'assets/js/webflow.js', null, null, false );
		wp_enqueue_script( 'google_fonts', 'https://ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js', null, null, false );
		wp_enqueue_script( 'webfont_load', PW_THEME_URL. 'assets/js/webfont_load.js', null, null, false );


 		wp_enqueue_script('google_fonts');	
 		wp_enqueue_script('webfont_load');	
 		wp_enqueue_script('google_jquery');	

		wp_enqueue_style('normalize');
		wp_enqueue_style('webflow');
		wp_enqueue_style('rbgv-advogados');
		wp_enqueue_style('header');

			
		wp_enqueue_script('modernizr');		
		wp_enqueue_script('webflow_js');	
		

	}


	/**
	 * Definição de constantes WP.
	*/
	define( 'PW_URL', get_home_url() );
	define( 'PW_THEME_URL', get_bloginfo( 'template_url' ) . '/' );
	define( 'PW_SITE_NAME', get_bloginfo( 'name' ) );