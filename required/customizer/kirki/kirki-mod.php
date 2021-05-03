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
        'priority'    => 140,
        'title'       => esc_html__( 'Logo Panel', 'logo' ),
        'description' => esc_html__( 'Logo panel description', 'logo' ),
    ) );

    Kirki::add_section( 'logo_about_section_id_1', array(
        'title'          => esc_html__( 'Logo Section', 'logo' ),
        'description'    => esc_html__( 'Logo section description.', 'logo' ),
        'panel'          => LOGO_CUSTOMIZER_PANEL_ID,
        'priority'       => 160,
    ) );

    Kirki::add_field( LOGO_CUSTOMIZER_CONFIG_ID, [
        'type'     => 'text',
        'settings' => 'logo_about_section_h1_text_setting_id_1',
        'label'    => esc_html__( 'Logo About H1 Text ', 'logo' ),
        'section'  => 'logo_about_section_id_1',
        'default'  => esc_html__( 'Hi, I’m James Watt', 'logo' ),
        'priority' => 10,
    ] );

    
}