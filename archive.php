<?php get_header( ); ?>  
<?php if ( have_posts() ) : ?>

<?php

while ( have_posts() ) :
    the_post();
    the_excerpt(  );

    sprintf( '<a class="read-more" href="%1$s">%2$s</a>',
            get_permalink( get_the_ID() ),
            __( 'Read More', 'logo' )
);

 

endwhile;
endif;
?>


<?php get_footer(); ?>   