<?php 

function logo_register_meta_box_id_1() {
    add_meta_box( "logo-c-meta-box-id-1", __( "Logo Meta Box", "logo" ), 
    "logo_function_display_callback_id_1", "post" , "normal" , "default" );
}
add_action( "add_meta_boxes", "logo_register_meta_box_id_1" );

function logo_function_display_callback_id_1( $post ) {

    wp_nonce_field( "logo_meta_box_id_nf_1" , "logo_meta_box_nonce_field_id_1");

    $logo_meta_data_insert_field_id_1 = get_post_meta($post->ID,"typefield", true);

    
    ?>
    <label><h1>Test</h1></label>
    <input type="text" name="typefield" value="<?php esc_attr_e( $logo_meta_data_insert_field_id_1  , "logo" ) ?>" placeholder=" type something ">
    <div>
    <?php  var_dump( $logo_meta_data_insert_field_id_1 ); ?>
    </div>

     <?php
}

function logo_meta_box_id_1_save_data($post_id) {

    if ( !isset($_POST['logo_meta_box_nonce_field_id_1']) ) {
        return;
    }

    if ( !wp_verify_nonce( $_POST['logo_meta_box_nonce_field_id_1'], "logo_meta_box_id_nf_1") ) {
        return;
    }

    if ( !isset($_POST['typefield']) ) {
        return;
    }

    $logo_typefield_id_1 = sanitize_text_field( $_POST['typefield'] );

    update_post_meta( $post_id, "typefield" , $value);

    

}

add_action( "save_post" , "logo_meta_box_id_1_save_data" );

/*

add_filter( 'rwmb_meta_boxes', 'your_prefix_register_meta_boxes' );

function logo_register_meta_box_id_1( $meta_boxes ) {
    $prefix = '';

    $meta_boxes[] = [
        'title'    => esc_html__( 'Untitled Field Group', 'logo' ),
        'id'       => 'untitled',
        'context'  => 'normal',
        'priority' => 'low',
        'fields'   => [
            [
                'type'        => 'text',
                'name'        => esc_html__( 'LOGO Meta Box', 'logo' ),
                'id'          => $prefix . 'logo_meta_box',
                'placeholder' => esc_html__( 'Type', 'logo' ),
                'clone'       => true,
            ],
        ],
    ];

    return $meta_boxes;
}

add_action( "add_meta_boxes", "logo_register_meta_box_id_1" );
*/

/*

function logo_register_meta_box_id_1() {

    function logo_function_display_callback_id_1($post) {
        _e("<h1 style=\"color:limegreen\"> SALAM </h1>", "logo"); 
        ?> 
<!--  -->
<form method="post">
    <label><h1>Test</h1></label>
    <input type="text" name="typefield" value="<?php get_post_meta($post->ID,"typefield", true); ?>" placeholder=" type something ">
    <?php wp_nonce_field( "logo_c_box_meta_action", "logo_c_box_meta_nonce_field" ); ?>
    </form>

<!--  -->

        <?php

if ( ! isset( $_POST['logo_c_box_meta_nonce_field'] ) 
|| ! wp_verify_nonce( $_POST['logo_c_box_meta_nonce_field'], 'logo_c_box_meta_action' ) 
) {
print 'Sorry, your nonce did not verify.';
exit;
} else {
// process form data
}


    }
    
    ?>

    <?php



    add_meta_box( "logo-c-meta-box-id-1", esc_html__( "Logo Meta Box", "logo" ), 
    "logo_function_display_callback_id_1", "post" , "normal" , "default" );
}
add_action( "add_meta_boxes", "logo_register_meta_box_id_1" );

*/
