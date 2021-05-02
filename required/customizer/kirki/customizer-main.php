<?php



define('LOGO_CUSTOMIZER_CONFIG_ID', 'logo_customizer_settings');
define('LOGO_CUSTOMIZER_PANEL_ID', 'logo_customizer_panel');

if(class_exists('Kirki')) {
    error_reporting(E_ERROR | E_PARSE);
    Kirki::add_config(LOGO_CUSTOMIZER_CONFIG_ID, array(
        'capability' => 'edit_theme_options',
        'option_type' => 'theme_mod',
    )

    );

    Kirki::add_panel( LOGO_CUSTOMIZER_PANEL_ID, array(
        'priority'    => 10,
        'title'       => esc_html__( 'My Panel', 'logo' ),
        'description' => esc_html__( 'My panel description', 'logo' ),
    ) );

    Kirki::add_section( 'logo_homepage', array(
        'title'          => esc_html__( 'My Section', 'logo' ),
        'description'    => esc_html__( 'My section description.', 'logo' ),
        'panel'          => LOGO_CUSTOMIZER_PANEL_ID,
        'priority'       => 160,
    ) );

    Kirki::add_field( LOGO_CUSTOMIZER_CONFIG_ID, [
        'type'     => 'text',
        'settings' => 'text_setting',
        'label'    => esc_html__( 'Text Control', 'logo' ),
        'section'  => 'logo_homepage',
        'default'  => esc_html__( 'This is a default value', 'logo' ),
        'priority' => 10,
    ] );

    
}