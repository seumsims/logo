<?php wp_head() ?>
<?php 
_e("this is single-recipe page");

?>
<?php 
while(have_posts()) {
    the_post();
    the_content();
}
?>
<?php wp_footer() ?>