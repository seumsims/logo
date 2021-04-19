<?php
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
   /* add_menu_page( 
        __( 'Logo Menu Name', 'logo' ),
        'Logo Menu',
        'manage_options',
        
        $menu_slug = 'custompage',
        'my_custom_menu_page',
        $icon_url   = 'dashicons-desktop',
        10
    ); 
    */
    add_menu_page('My Page Title', 'My Menu Title', 'manage_options', 'my-menu', 'my_menu_output' );
    add_submenu_page('my-menu', 'Submenu Page Title', 'Whatever You Want', 'manage_options', 'my-menu' );
    add_submenu_page('my-menu', 'Submenu Page Title2', 'Whatever You Want2', 'manage_options', 'my-menu2' );
}
add_action( 'admin_menu', 'wpdocs_register_my_custom_menu_page' );
 

