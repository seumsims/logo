<?php
/*
var_dump(get_post_meta(534));
var_dump(get_post_meta(403));
*/

/*
_e("<pre>");
var_dump(get_posts());
_e("</pre>");

*/

$obj = get_post_type_object( 'post' );
echo $obj->labels->singular_name;
$post   = get_post( 403 );
$output =  apply_filters( 'the_content', $post->post_content );
_e("<pre>");

var_dump($output);
_e("</pre>");

add_filter('manage_posts_columns', 'posts_columns_id', 5);
    add_action('manage_posts_custom_column', 'posts_custom_id_columns', 5, 2);
    add_filter('manage_pages_columns', 'posts_columns_id', 5);
    add_action('manage_pages_custom_column', 'posts_custom_id_columns', 5, 2);
 
function posts_columns_id($defaults){
    $defaults['wps_post_id'] = __('ID');
    return $defaults;
}
function posts_custom_id_columns($column_name, $id){
    if($column_name === 'wps_post_id'){
            echo $id;
    }
}

function custom_columns( $column, $post_id ) {
    switch ( $column ) {
        case 'book_author':
            $terms = get_the_term_list( $post_id, 'book_author', '', ',', '' );
            if ( is_string( $terms ) ) {
                echo $terms;
            } else {
                _e( 'Unable to get author(s)', 'your_text_domain' );
            }
            break;
 
        case 'publisher':
            echo get_post_meta( $post_id, 'publisher', true ); 
            break;
    }
}
add_action( 'manage_posts_custom_column' , 'custom_columns', 10, 2 );
