<?php wp_head(); ?>
<?php 
//print_r(is_single());
_e("this is single");
while(have_posts()) {

    the_post();
    _e("<h1>");
    the_title();
    _e("</h1>");
    _e("<article>");
    the_content();
    _e("</article>");

} 
?>

<?php wp_footer(); ?>