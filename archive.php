<?php get_header( ); ?>  
<?php if ( have_posts() ) : ?>
<div <?php post_class( array('logo-post-permalink-link-color-cls-id-1') ); ?>>
<?php

while ( have_posts() ) :
    the_post();
    the_title(  );
    the_excerpt(  );
    ?> 

    <div class="">
    
    <span>
        <a href="<?php  the_permalink(); ?>">Read More</a>
    </span>
    
    </div>
     <?php
 

endwhile;
endif;
?>
</div>
<!-- Posts End -->

<?php get_footer(); ?>   