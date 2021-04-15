<?php 
/* 
Flushing Rewrite on Activation #Flushing Rewrite on Activation
To get permalinks to work when you activate the plugin use the 
following example, paying attention to how my_cpt_init() is called in the register_activation_hook callback:
*/
add_action( 'init', 'my_cpt_init' );
function my_cpt_init() {
    // register_post_type( ... );
}
 
register_activation_hook( __FILE__, 'my_rewrite_flush' );
function my_rewrite_flush() {
    // First, we "add" the custom post type via the above written function.
    // Note: "add" is written with quotes, as CPTs don't get added to the DB,
    // They are only referenced in the post_type column with a post entry, 
    // when you add a post of this CPT.
    my_cpt_init();
 
    // ATTENTION: This is *only* done during plugin activation hook in this example!
    // You should *NEVER EVER* do this on every page load!!
    flush_rewrite_rules();
}

// For themes, you’ll need to use the after_switch_theme hook instead. Like so:
    /*

    add_action( 'init', 'my_cpt_init' );
 function my_cpt_init() {
    register_post_type( ... );
    
}
 
add_action( 'after_switch_theme', 'my_rewrite_flush' );
function my_rewrite_flush() {
    my_cpt_init();
    flush_rewrite_rules();
}*/