<?php
/*
Template Name: Logo Homepage


*/
?>

<?php get_header( ); ?>  

<body <?php body_class(  ); ?>>

<?php get_template_part( "templates/top-menu-and-top-bar-section" ); ?>   
<?php get_template_part( "templates/banner" ); ?> 
<?php the_content(); ?>   


<?php get_footer(); ?>   

