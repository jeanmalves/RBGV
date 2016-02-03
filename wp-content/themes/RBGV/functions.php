<?php
	
	/**
	 * Definição de constantes WP.
	*/
	define( 'PW_URL', get_home_url() );
	define( 'PW_THEME_URL', get_bloginfo( 'template_url' ) . '/' );
	define( 'PW_SITE_NAME', get_bloginfo( 'name' ) );


	add_action('after_setup_theme', 'custom_setup' );

	function custom_setup()
	{
		add_action( 'wp_enqueue_scripts', 'custom_formats' );
		
		register_nav_menus( array(
			'menu-header' => 'Menu Header',
			'menu-footer-left' => 'Menu Esquerdo Rodapé',
			'menu-footer-right' => 'Menu Direito Rodapé',
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
	 * Função para exibir os menus do site.
	*/

	add_filter( 'wp_nav_menu_items', 'my_nav_menu_items', 10, 2 );

	function my_nav_menu_items( $theme_location, $args = array() ) {

		if ( ($theme_location) && ($locations = get_nav_menu_locations()) && isset($locations[$theme_location]) ) {
	        
	        $menu = get_term( $locations[$theme_location], 'nav_menu' );
	       	$menu_items = wp_get_nav_menu_items($menu->term_id);
	 
			if($theme_location == "menu-header"){
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
	        }	
	        else{

	        	$menu_list  = '<ul class="w-list-unstyled menu-footer">'."\n";

	        	foreach( $menu_items as $menu_item ) {

	        		$link = $menu_item->url;
		            $title = $menu_item->title;
		             
		            if (array_key_exists("type", $args)) {

		            	if($args['type'] == "area-atuacao"){
			                if ($title == "Direito de Infraestrutura") {
			                    $title = substr($title,11);
			                }else{
			                    $title = substr($title,8); 
			                }
			            }
			        }

	        		$menu_list  .= '<li>'."\n";
			        $menu_list  .= '   <div class="txt-footer">'."\n";
			        $menu_list  .= '     <a class="link branco" href="'. $link .'">'. $title .'</a>'."\n";
			        $menu_list  .= '    </div>'."\n";
			        $menu_list  .= '</li>';
	        	}

	        	$menu_list .= '</ul>' ."\n";
	        }	
	 
	    } else {
	        $menu_list = '<!-- no menu defined in location "'.$theme_location.'" -->';
	    }
	    echo $menu_list;
	}


	/*add_filter('excerpt_length', 'custom_excerpt_length');
	function custom_excerpt_length($length) {
		return 1200; //Nova quantidade de caracteres do excerpt
	}*/

	function the_excerpt_max_charlength($charlength) {
		$excerpt = get_the_excerpt();
		$charlength++;

		if ( mb_strlen( $excerpt ) > $charlength ) {
			$subex = mb_substr( $excerpt, 0, $charlength - 5 );
			$exwords = explode( ' ', $subex );
			$excut = - ( mb_strlen( $exwords[ count( $exwords ) - 1 ] ) );
			if ( $excut < 0 ) {
				echo mb_substr( $subex, 0, $excut );
			} else {
				echo $subex;
			}
			echo '[...]';
		} else {
			echo $excerpt;
		}
	}

	function new_excerpt_more( $more ) {
		return ' <a class="link leia-mais" id="link" href="'. get_permalink( get_the_ID() ) . '">' . __($more,'leia_mais' ) . '</a>';
	}
	add_filter( 'excerpt_more', 'new_excerpt_more' );


	/**
	 * Função para customizar o painel administrativo na sessão de configurações gerais.
	 */



	add_action('admin_init', 'my_general_section');

	function my_general_section() {  
	    add_settings_section(  
	        'my_settings_section', // Section ID 
	        'Informações Adicionais', // Section Title
	        'my_section_options_callback', // Callback
	        'general' // What Page?  This makes the section show up on the General Settings Page
	    );

	    add_settings_field( // Option 1
	        'endereco_site', // Option ID
	        'Endereço', // Label
	        'my_textbox_callback', // !important - This is where the args go!
	        'general', // Page it will be displayed (General Settings)
	        'my_settings_section', // Name of our section
	        array( // The $args
	            'endereco_site' // Should match Option ID
	        )  
	    ); 

	     add_settings_field( // Option 2
	        'cep_site', // Option ID
	        'CEP', // Label
	        'my_textbox_callback', // !important - This is where the args go!
	        'general', // Page it will be displayed
	        'my_settings_section', // Name of our section (General Settings)
	        array( // The $args
	            'cep_site' // Should match Option ID
	        )  
	    ); 

	    add_settings_field( // Option 2
	        'cidade_site', // Option ID
	        'Cidade', // Label
	        'my_textbox_callback', // !important - This is where the args go!
	        'general', // Page it will be displayed
	        'my_settings_section', // Name of our section (General Settings)
	        array( // The $args
	            'cidade_site' // Should match Option ID
	        )  
	    ); 

	    add_settings_field( // Option 2
	        'fone_site', // Option ID
	        'Telefone', // Label
	        'my_textbox_callback', // !important - This is where the args go!
	        'general', // Page it will be displayed
	        'my_settings_section', // Name of our section (General Settings)
	        array( // The $args
	            'fone_site' // Should match Option ID
	        )  
	    ); 

	    add_settings_field( // Option 2
	        'email_site', // Option ID
	        'Email', // Label
	        'my_textbox_callback', // !important - This is where the args go!
	        'general', // Page it will be displayed
	        'my_settings_section', // Name of our section (General Settings)
	        array( // The $args
	            'email_site' // Should match Option ID
	        )  
	    ); 

	    register_setting('general','endereco_site', 'esc_attr');
	    register_setting('general','fone_site', 'esc_attr');
	    register_setting('general','cep_site', 'esc_attr');
	    register_setting('general','cidade_site', 'esc_attr');
	    register_setting('general','email_site', 'esc_attr');
	}

	function my_section_options_callback() { // Section Callback
	    echo '<p>Informações de endereço e contato do site.</p>';  
	}

	function my_textbox_callback($args) {  // Textbox Callback
	    $option = get_option($args[0]);
	    echo '<input type="text" id="'. $args[0] .'" name="'. $args[0] .'" value="' . $option . '" />';
	}