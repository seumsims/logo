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
esc_html_e( get_post_meta( $post_id, "typefield", true ), "logo" );
?>   


<?php get_footer(); ?>   