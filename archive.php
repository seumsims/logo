<?php wp_head(); ?>
<?php _e("this is archive page"); ?>
<?php
while(have_posts()){
    the_post();

    //the_title();

 ?>
 <a style="color:red" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>

<?php
    the_content();
}
//the_content(); ?>

<?php wp_footer(); ?>