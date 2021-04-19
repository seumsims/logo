<?php 



function logo_bootstrapping() {

    

    load_theme_textdomain("logo");
    add_theme_support("post-thumbnails");
    add_theme_support("title-tag");
    add_post_type_support('page', 'thumbnail');

    
    
    add_theme_support( 'post-thumbnails', array( 'post', 'page' ) );

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

}
add_action("after_setup_theme","logo_bootstrapping");

register_nav_menus(
    array(
        'primary' => esc_html__( 'Primary menu logo', 'logo' ),
        //'footer'  => __( 'Secondary menu', 'twentytwentyone' ),
        'testmenu' => __( 'Test menu logo', 'logo' )
    )
);


function logo_styles() {
    wp_enqueue_style("logo-style", get_stylesheet_uri());
    wp_enqueue_style("logo-bootstarp", get_theme_file_uri ("assets/css/bootstrap.min.css"));
    wp_enqueue_style("logo-owl-carou-sel",  get_theme_file_uri ("assets/css/owl.carousel.min.css"));
    wp_enqueue_style("logo-mean-menu", get_theme_file_uri ("assets/css/meanmenu.css"));
    wp_enqueue_style("logo-font-awesome-all", get_theme_file_uri ("assets/css/fontawesome-all.min.css"));
    wp_enqueue_style("logo-all-min-css", get_theme_file_uri ("assets/css/all.min.css"));

    wp_enqueue_style("logo-css-main-css", get_theme_file_uri ("assets/css/main.css"));
    wp_enqueue_style("logo-css-custom-css", get_theme_file_uri ("assets/css/custom.css"));
}

add_action("wp_enqueue_scripts", "logo_styles");


function logo_scripts() {

    

    
    
    wp_enqueue_script("logo-jquery-min" , get_theme_file_uri ("assets/js/jquery.min.js"),array("jquery"),null,true);
    wp_enqueue_script("logo-jquery-one-one-two-four-min" , get_theme_file_uri ("assets/js/vendor/jquery-1.12.4.min.js"),array("jquery"),null,true);
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


function logo_post_type_for_one_page() {
   

    $args = array(

        'hierarchical' => true,    
        'public' => true,
        
            'has_archive' => true,
            'supports' => ['title','editor','thumbnail','author','custom-fields',
            'post-formats'],
            'rewrite' => ['slug' => 'sections'],
            'labels' => [
                'name' => 'Manage Logo',
                'singular_name' => 'Logo',
                'featured_image'        => __( 'Logo image', 'logo' ),
            ],
            'show_in_rest' => false,
            'menu_icon' => 'dashicons-admin-appearance',
            
    

    );
    
    register_post_type("logo", $args);
    flush_rewrite_rules();

}

add_action("init", "logo_post_type_for_one_page");

function logo_one_page_post_type_custom_taxonomy_types() {

    $args = [
        
        'labels' => [
            'name' => 'Logo Types',
            'singular_name' => 'Type',
        ],
        
        'public' => true,
        'hierarchical' => true


    ];

    register_taxonomy('types', array('logo') , $args);


}

add_action("init", "logo_one_page_post_type_custom_taxonomy_types");


function new_post_type_for_one_page() {
   
    $supports = [];
    $args = array(

        'hierarchical' => true,    
        'public' => true,
        'supports' => $supports,
            'has_archive' => true,
            'show_ui' => true,
            'rewrite' => ['slug' => 'sections'],
            'show_in_rest' => false,
            'menu_icon' => 'dashicons-admin-appearance',
            
    

    );
    
    register_post_type("new", $args);
    flush_rewrite_rules();

}

add_action("init", "new_post_type_for_one_page");

/**
 * Register a custom menu page.
 */
function wpdocs_register_my_custom_menu_page(){

    /**
 * Display a custom menu page
 */
function my_custom_menu_page(){
    esc_html_e( 'Admin Logo Page Test', 'logo' );  
}
    add_menu_page( 
        __( 'Logo Menu Name', 'logo' ),
        'Logo Menu',
        'manage_options',
        
        $menu_slug = 'logopage',
        'my_custom_menu_page',
        $icon_url   = 'dashicons-desktop',
        10
    ); 
    
   
}
add_action( 'admin_menu', 'wpdocs_register_my_custom_menu_page' );
 

