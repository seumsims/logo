<?php

function logo_index_page_template_banner() {
    if(has_header_image(  )) {
                
                ?>
    
                <style>
                    .bannar-bg-img {
                        background-image: url(<?php esc_html_e( header_image() ); ?>);
                        background-size: cover;
                    }
                </style>
    
                <?php
    }
    else {
        _e("no"); ?>
    
        <style>
                    .bannar-bg-img {
                        background-image: url(<?php esc_attr_e(get_theme_file_uri ("assets/image/bannar/bannar-bg.jpg")); ?>);
                        background-size: cover;
                    }
                </style>
    
         <?php
    
    }
        
    }
    
    add_action( "wp_head", "logo_index_page_template_banner",100 );