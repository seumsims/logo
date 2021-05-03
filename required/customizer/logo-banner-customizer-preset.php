<?php

function logo_index_page_template_banner() {
    ?>
    
                <style>
                    .bannar-bg-img {
                        background-image: url(<?php esc_attr_e( header_image() ); ?>);
                        background-size: cover;
                    }
                </style>
    
                <?php
    
    
    }
    
    add_action( "wp_head", "logo_index_page_template_banner",100 );