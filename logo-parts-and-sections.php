<?php 
/*
Template Name: Logo Sections
*/
?>

<?php get_header( ); ?>  

<body <?php body_class(  ); ?>>

<?php get_template_part( "templates/top-menu-and-top-bar-section" ); ?>   
<?php get_template_part( "templates/banner" ); ?>   
<?php 
var_dump( get_post_meta( $post->ID, "typefield", true ) );
?>   


<?php get_footer(); ?>   