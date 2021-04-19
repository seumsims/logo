<?php
function book_setup_post_type() {
    $args = array(
        'public'    => true,
        'label'     => __( 'Books', 'logo' ),
        'menu_icon' => 'dashicons-book',
    );
    register_post_type( 'book', $args );
}
add_action( 'init', 'book_setup_post_type' );