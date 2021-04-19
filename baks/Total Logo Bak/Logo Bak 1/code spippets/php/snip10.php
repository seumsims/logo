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
                'singular_name' => 'Logo'
            ],
            'show_in_rest' => false,
            'menu_icon' => 'dashicons-admin-appearance'
    

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
