<?php 

$post   = get_post( 534 );
$output =  apply_filters( 'the_content', $post->post_content ); 
_e( $output , 'logo' );

_e(get_post_field('post_content', $post_id = 534));
_e(hhokTest());


function hhokTest() {
    return 'SALAM';
}