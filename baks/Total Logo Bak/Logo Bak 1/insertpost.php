<?php
// Gather post data.
function run_post_once() {
    $my_post = array(
        'post_title'    => 'My post From Insert',
        'post_content'  => 'This is my post.',
        'post_status'   => 'publish',
        'post_type'             => 'book',
        'post_author'   => 1,
        //'post_category' => array( 8,39 )
    );
     
    // Insert the post into the database.
    
    wp_insert_post( $my_post );
    }

    run_post_once();