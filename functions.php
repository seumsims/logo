<?php
function logo_bootstrapping() {
    load_theme_textdomain("logo");
    add_theme_support("post-thumbnails");
    add_theme_support("title-tag");

}
add_action("after_setup_theme","logo_bootstrapping");