<?php // wp_die( WP_Error ); ?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo( 'name' ); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(  ); ?>>

<?php get_template_part( "templates/banner" ); ?>   


<?php wp_footer(); ?>   
</body>
</html>
