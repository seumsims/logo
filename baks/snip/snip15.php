<?php

 //esc_html_e( 'Admin Logo Page Test', 'logo' );  
    // esc_attr_e( get_theme_file_uri ("testmenupage.php") , 'logo' ) ;
    // esc_html_e( get_theme_file_uri ("testmenupage.php") , 'logo' );
add_shortcode( 'baztag', 'wpdocs_baztag_func' );
function wpdocs_baztag_func( $atts, $content = "" ) {
    function htmview() {

        _e("htmview");

    }
    $content = htmview();
    return $content;
}