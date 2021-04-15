<?php

//flush_rewrite_rules( false );
//flush_rewrite_rules( true );

/* Flush rewrite rules for custom post types. */
    
add_action( 'after_switch_theme', 'flush_rewrite_rules' );