<?php wp_head(); ?>
<?php
while(have_posts()){
    the_post();

    the_content();
}
//the_content(); ?>

<?php wp_footer(); ?>