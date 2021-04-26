<?php 
// Logo Custom Meta Box

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

    update_post_meta($post_id, "typefield" , $my_title);



}

add_action( "save_post" , "logo_meta_box_id_1_save_data" );

/*

add_filter( 'rwmb_meta_boxes', 'your_prefix_register_meta_boxes' );

function your_prefix_register_meta_boxes( $meta_boxes ) {
    $prefix = '';

    $meta_boxes[] = [
        'title'   => esc_html__( 'Untitled Field Group', 'online-generator' ),
        'id'      => 'untitled',
        'context' => 'normal',
        'fields'  => [
            [
                'type'  => 'text',
                'name'  => esc_html__( 'Text', 'online-generator' ),
                'id'    => $prefix . 'text_cuzc1tplefl',
                'clone' => true,
            ],
        ],
    ];

    return $meta_boxes;
}
*/