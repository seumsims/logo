<?php
function logo_bootstrapping() {
    load_theme_textdomain("logo");
    add_theme_support("post-thumbnails");
    add_theme_support("title-tag");

}
add_action("after_setup_theme","logo_bootstrapping");
/**
 * Enqueue scripts and styles.
 */
function logo_styles() {
    wp_enqueue_style("logo-style", get_stylesheet_uri());
    wp_enqueue_style("logo-bootstarp", get_template_directory_uri() . "/" . "assets/css/bootstrap.min.css");
    wp_enqueue_style("logo-owl-carou-sel", get_template_directory_uri() . "/" . "assets/css/owl.carousel.min.css");
    wp_enqueue_style("logo-mean-menu", get_template_directory_uri() . "/" . "assets/css/meanmenu.css");
    wp_enqueue_style("logo-font-awesome-all", get_template_directory_uri() . "/" . "assets/css/fontawesome-all.min.css");
    wp_enqueue_style("logo-all-min-css", get_template_directory_uri() . "/" . "assets/css/all.min.css");

    wp_enqueue_style("logo-css-main-css", get_template_directory_uri() . "/" . "assets/css/main.css");
    wp_enqueue_style("logo-css-custom-css", get_template_directory_uri() . "/" . "assets/css/custom.css");
}

add_action("wp_enqueue_scripts", "logo_styles");


function logo_scripts() {

    

    wp_enqueue_script("logo-jquery-min" , get_template_directory_uri() . "/" . "assets/js/jquery.min.js");
    wp_enqueue_script("logo-jquery-one-one-two-four-min" , get_template_directory_uri() . "/" . "assets/js/vendor/jquery-1.12.4.min.js");
    wp_enqueue_script("logo-popper-min" , get_template_directory_uri() . "/" . "assets/js/popper.min.js");
    wp_enqueue_script("logo-bootstrap-min" , get_template_directory_uri() . "/" . "assets/js/bootstrap.min.js");
    wp_enqueue_script("logo-jquery-scroll-min" , get_template_directory_uri() . "/" . "assets/js/jquery.scrollUp.min.js");
    wp_enqueue_script("logo-jquery-meanmenu-min" , get_template_directory_uri() . "/" . "assets/js/jquery.meanmenu.min.js");
    wp_enqueue_script("logo-imagesloaded-pkgd-min" , get_template_directory_uri() . "/" . "assets/js/imagesloaded.pkgd.min.js");
    wp_enqueue_script("logo-owl-carousel-min" , get_template_directory_uri() . "/" . "assets/js/owl.carousel.min.js");

    wp_enqueue_script("logo-isotope-pkgd-min" , get_template_directory_uri() . "/" . "assets/js/isotope.pkgd.min.js");

    wp_enqueue_script("logo-main-js" , get_template_directory_uri() . "/" . "assets/js/main.js");

    wp_enqueue_script("logo-main-custom-js" , get_template_directory_uri() . "/" . "assets/js/custom.js");
}
add_action("wp_enqueue_scripts", "logo_scripts");
//_e(get_template_directory_uri());