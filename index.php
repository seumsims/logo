<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo( 'name' ); ?></title>
    <?php wp_head(  ); ?>
</head>
<body <?php body_class(  )?>>
<?php 
//esc_html_e( basename(get_page_template(  ))  );
?>
<?php //the_title( ); ?>
<?php the_content(); ?>
<?php wp_footer(  ) ?>   
</body>
</html>
