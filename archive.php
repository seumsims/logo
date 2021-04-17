<?php wp_head(); ?>
<?php _e("this is archive page"); ?>
<?php
while(have_posts()){
    the_post();

    the_title();

    the_content();
}
//the_content(); ?>

<?php wp_footer(); ?>