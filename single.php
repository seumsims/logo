<?php get_header( ); ?>  

<body <?php body_class(  ); ?>>


<?php 
while(have_posts(  )) {
    $logo_post_start_text = "<span" . " class" . "= " . " logo-post-start-text " . ">" . ' start ' . "</span>" ;
    the_post();
    the_title( $logo_post_start_text   ,' end '  );
    the_content(  );
}
 ?>   

 


<?php get_footer(); ?>   