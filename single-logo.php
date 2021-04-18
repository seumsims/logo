<?php wp_head(); ?>
<?php 
_e("this is single logo ");
_e(" <br> ");
while(have_posts()) {

    the_post();
    _e(get_the_ID());
    _e("<h1 style=\"color:green\">");
    the_title();
    _e("</h1>");
    the_post_thumbnail();
    _e("<article>");
    the_content();
    _e("</article>");

} 
?>

<?php wp_footer(); ?>