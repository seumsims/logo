<?php get_header( ); ?>  
<?php if ( have_posts() ) : ?>

<?php

while ( have_posts() ) :
    the_post();
    the_excerpt( the_permalink(  ) );

 

endwhile;
endif;
?>


<?php get_footer(); ?>   