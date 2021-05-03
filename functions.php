<?php

require_once("required/customizer/kirki/class-kirki-preset.php");
require_once("required/customizer/kirki/kirki-mod.php");
require_once("required/customizer/logo-banner-customizer-preset.php");
require_once("required/logoTestWidgetClass.php");



function logo_bootstrapping() {




    

    
load_theme_textdomain("logo");
    add_theme_support("post-thumbnails");
    add_theme_support("title-tag");
    add_theme_support( "custom-header" );
    //add_theme_support( "custom-logo" );

    //add_theme_support( array( 'editor-styles', 'align-wide' ) );

    

    add_theme_support( 'custom-background', array(
        'default-image'          => '',
        'default-preset'         => 'fit', // 'default', 'fill', 'fit', 'repeat', 'custom'
        'default-position-x'     => 'center',    // 'left', 'center', 'right'
        'default-position-y'     => 'center',     // 'top', 'center', 'bottom'
        'default-size'           => 'auto',    // 'auto', 'contain', 'cover'
        'default-repeat'         => 'no-repeat',  // 'repeat-x', 'repeat-y', 'repeat', 'no-repeat'
        'default-attachment'     => 'fixed',  // 'scroll', 'fixed'
        'default-color'          => '',
        'wp-head-callback'       => '_custom_background_cb',
        'admin-head-callback'    => '',
        'admin-preview-callback' => '',
    ) );

    
    
    
    
    
    // add_post_type_support('page', 'thumbnail');

    

    add_theme_support( 'custom-logo', array(
        'width'  => 95,
        
        'height' => 38,
        
        'flex-width' => true,
        'flex-height' => true,
    ) );

    $logo_custom_header_box_setting = array( 
            
        
        'width' => 1200,
        'height' => 900,
        
        'flex-width' => true,
        'flex-height' => true,
    );
    add_theme_support( "custom-header", $logo_custom_header_box_setting );
    

    
    
    // add_theme_support( 'post-thumbnails', array( 'post', 'page' ) );

		add_theme_support(
			'post-formats',
			array(
				'link',
				'aside',
				'gallery',
				'image',
				'quote',
				'status',
				'video',
				'audio',
				'chat',
			)
		);

        register_nav_menus(
            array(
                'primary' => __( 'Primary menu logo', 'logo' ),
                //'footer'  => __( 'Secondary menu', 'twentytwentyone' ),
                'testmenu' => __( 'Test menu logo', 'logo' )
            )
        );


        

    

}
add_action("after_setup_theme","logo_bootstrapping");


//require_once("required/classes/widget-classes/logo-test-widget-class.php");


function logo_styles() {
    wp_enqueue_style("logo-style", get_stylesheet_uri());
    
    wp_enqueue_style("logo-owl-carou-sel",  get_theme_file_uri ("assets/css/owl.carousel.min.css"));
    wp_enqueue_style("logo-mean-menu", get_theme_file_uri ("assets/css/meanmenu.css"));
    wp_enqueue_style("logo-font-awesome-all", get_theme_file_uri ("assets/css/fontawesome-all.min.css"));
    
    wp_enqueue_style("logo-bootstarp", get_theme_file_uri ("assets/css/bootstrap.min.css"));
    
    wp_enqueue_style("logo-css-main-css", get_theme_file_uri ("assets/css/main.css"));
    wp_enqueue_style("logo-all-min-css", get_theme_file_uri ("assets/css/all.min.css"));
    wp_enqueue_style("logo-css-custom-css", get_theme_file_uri ("assets/css/custom.css"));
    wp_enqueue_style("logo-style", get_stylesheet_uri());
    
    
}

add_action("wp_enqueue_scripts", "logo_styles");


function logo_scripts() {

    

    
    wp_enqueue_script("logo-jquery-min" , get_theme_file_uri ("assets/js/jquery.min.js"),array(),null,true);
    wp_enqueue_script("logo-jquery-one-one-two-four-min" , get_theme_file_uri ("assets/js/vendor/jquery-1.12.4.min.js"),array(),null,true);
    wp_enqueue_script("logo-popper-min" , get_theme_file_uri ("assets/js/popper.min.js"),array("jquery"),null,true);
    wp_enqueue_script("logo-bootstrap-min" , get_theme_file_uri ("assets/js/bootstrap.min.js"),array("jquery"),null,true);
    wp_enqueue_script("logo-jquery-scroll-min" , get_theme_file_uri ("assets/js/jquery.scrollUp.min.js"),array("jquery"),null,true);
    wp_enqueue_script("logo-jquery-meanmenu-min" , get_theme_file_uri ("assets/js/jquery.meanmenu.min.js"),array("jquery"),null,true);
    wp_enqueue_script("logo-imagesloaded-pkgd-min" , get_theme_file_uri ("assets/js/imagesloaded.pkgd.min.js"),array("jquery"),null,true);
    wp_enqueue_script("logo-owl-carousel-min" , get_theme_file_uri ("assets/js/owl.carousel.min.js"),array("jquery"),null,true);

    wp_enqueue_script("logo-isotope-pkgd-min" , get_theme_file_uri ("assets/js/isotope.pkgd.min.js"),array("jquery"),null,true);

    wp_enqueue_script("logo-main-js" , get_theme_file_uri ("assets/js/main.js"),array("jquery"),null,true);

    wp_enqueue_script("logo-main-custom-js" , get_theme_file_uri ("assets/js/custom.js"),array("jquery"),null,true);
    
}
add_action("wp_enqueue_scripts", "logo_scripts");

function logo_widgets_init() {

	register_sidebar( array(
		'name'          => 'Footer Left Column',
		'id'            => 'logo_footer_left_column_id_1',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

    register_sidebar( array(
		'name'          => 'Footer Right Column',
		'id'            => 'logo_footer_right_column_id_1',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'logo_widgets_init' );

     
     








