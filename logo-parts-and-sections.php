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
_e( $output , 'logo' );

_e(get_post_field('post_content', $post_id = 534));
?>   


<?php get_footer(); ?>   