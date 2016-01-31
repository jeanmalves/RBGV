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


	/**
	 * Função para exibir o menu topo do site.
	*/

	add_filter( 'wp_nav_menu_items', 'my_nav_menu_items', 10, 2 );

	function my_nav_menu_items( $theme_location, $args = array() ) {

		if ( ($theme_location) && ($locations = get_nav_menu_locations()) && isset($locations[$theme_location]) ) {
	        $menu = get_term( $locations[$theme_location], 'nav_menu' );
	        $menu_items = wp_get_nav_menu_items($menu->term_id);
	 
	        $menu_list  = '<nav role="navigation"  data-ix="'.$args['nav']['data-ix'].'" class="'.$args['nav']['class'].'">'."\n";
	 
	        $count = 0;
	        $submenu = false;

	        foreach( $menu_items as $menu_item ) {
	         
	            $link = $menu_item->url;
	            $title = $menu_item->title;

	            if ( !$menu_item->menu_item_parent ) {

	                $parent_id = $menu_item->ID;
	                $prox = next($menu_items);
	                if( $menu_items[ $count + 1 ]->menu_item_parent == $parent_id ){
	                	$menu_list .= '<div data-delay="200" data-hover="1" class="w-dropdown">' ."\n";
	                    $menu_list .= ' <div class="'.$args['div']['class'].'">'."\n";
	                    $menu_list .= '	 <div>'.$title.'</div>'."\n";
	                    $menu_list .= ' </div>'."\n";
	                }else{

	                	$menu_list .= '<a href="'.$link.'" class="'.$args['a']['class'].'">'.$title.'</a>' ."\n";	
	                }  
	            }
	 
	            if ( $parent_id == $menu_item->menu_item_parent ) {
	 
	                if ( !$submenu ) {
	                    $submenu = true;
	                    $menu_list .= ' <nav class="w-dropdown-list">';
	                }
	 
	                $menu_list .= '<a href="'.$link.'" class="w-dropdown-link link-navdropdown">'.$title.'</a>' ."\n";
	 
	                if ( $menu_items[ $count + 1 ]->menu_item_parent != $parent_id && $submenu ){
	                    $menu_list .= ' </nav>'."\n";
	                    $menu_list .= ' </div>'."\n";
	                    $submenu = false;
	                }
	            }
	            $count++;
	        }
	        $menu_list .= '</nav>' ."\n";
	 
	    } else {
	        $menu_list = '<!-- no menu defined in location "'.$theme_location.'" -->';
	    }
	    echo $menu_list;
	}