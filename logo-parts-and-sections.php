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
$post   = get_post( 534 );
$output =  apply_filters( 'the_content', $post->post_content ); 
esc_html_e( $output , 'logo' );
?>   


<?php get_footer(); ?>   