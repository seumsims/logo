<?php
/*
Template Name: Bookset
*/
_e("this is single Bookset");

 wp_head();

_e(" this is  book set");
while(have_posts()) {

    the_post();
    _e("<h1 style=\"color:green\">");
    the_title();
    _e("</h1>");
    _e("<article>");
    the_content();
    _e("</article>");

} 
?>




<?php wp_footer(); ?>