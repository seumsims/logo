<?php 
define('LOGO_CUSTOMIZER_ID', 'logo_customizer_settings');
define('LOGO_CUSTOMIZER_SECTION_ID', 'logo_customizer_section');

if (class_exists('Kirki')) {
    Kirki::add_config( LOGO_CUSTOMIZER_ID, array(
        'capability'    => 'edit_theme_options',
        'option_type'   => 'theme_mod',
    ) );
}