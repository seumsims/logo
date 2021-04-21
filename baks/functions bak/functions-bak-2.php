<?php



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
function logo_custom_menu_page(){

    
    

    /**
 * Display a custom menu page
 */
function custom_menu_page_logo(){
   
    require_once("testmenupage.php");
}
    add_menu_page( 
        __( 'Logo Menu Name', 'logo' ),
        'Logo Menu',
        'manage_options',
        
        
        $menu_slug = 'logopage',
        'custom_menu_page_logo',
        $icon_url   = 'dashicons-desktop',
        10
    ); 
    
   
}
add_action( 'admin_menu', 'logo_custom_menu_page' );

function logo_custom_page_css_enq() {

    wp_enqueue_style("logo-style-custom-page", get_stylesheet_uri() );

}
add_action("admin_enqueue_scripts", "logo_custom_page_css_enq");


add_filter('manage_posts_columns', 'posts_columns_id', 5);
    add_action('manage_posts_custom_column', 'posts_custom_id_columns', 5, 2);
    add_filter('manage_pages_columns', 'posts_columns_id', 5);
    add_action('manage_pages_custom_column', 'posts_custom_id_columns', 5, 2);
 
function posts_columns_id($defaults){
    $defaults['wps_post_id'] = __('ID');
    return $defaults;
}
function posts_custom_id_columns($column_name, $id){
    if($column_name === 'wps_post_id'){
            _e($id);
            
    }
}


function wporg_add_custom_box() {
    $screens = [ 'post', 'wporg_cpt' ];
    foreach ( $screens as $screen ) {
        add_meta_box(
            'wporg_box_id',                 // Unique ID
            'Custom Meta Box Title',      // Box title
            'wporg_custom_box_html',  // Content callback, must be of type callable
            $screen                            // Post type
        );
    }
}
add_action( 'add_meta_boxes', 'wporg_add_custom_box' ); 
function wporg_custom_box_html( $post ) {
    ?>
    <label for="wporg_field">Description for this field</label>
    <select name="wporg_field" id="wporg_field" class="postbox">
        <option value="">Select something...</option>
        <option value="something">Something</option>
        <option value="else">Else</option>
    </select>
    <?php
}