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
    <div>
    <?php // var_dump( get_post_meta( $post->ID, "typefield", true ) ); ?>
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

    update_post_meta($post_id, "typefield" , $my_title);

    

}

add_action( "save_post" , "logo_meta_box_id_1_save_data" );


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



 function render_meta_box_content( $post ) {
 
    // Add an nonce field so we can check for it later.
    wp_nonce_field( 'myplugin_inner_custom_box', 'myplugin_inner_custom_box_nonce' );

    // Use get_post_meta to retrieve an existing value from the database.
    $value = get_post_meta( $post->ID, '_my_meta_value_key', true );

    // Display the form, using the current value.
    ?>
    <label for="myplugin_new_field">
        <?php _e( 'Description for this field', 'textdomain' ); ?>
    </label>
    <input type="text" id="myplugin_new_field" name="myplugin_new_field" value="<?php echo esc_attr( $value ); ?>" size="25" />
    <?php
}


function op_register_menu_meta_box() {
    add_meta_box(
        'op-menu-meta-box-id',
        esc_html__( 'Op Menu MetaBox Title', 'text-domain' ),
        'op_render_menu_meta_box',
        'nav-menus',
        'side',
        'core'
        );
}
add_action( 'load-nav-menus.php', 'op_register_menu_meta_box' );
 
function op_render_menu_meta_box() {
    // Metabox content
    echo '<strong>Hi, I am MetaBox.</strong>';
}




