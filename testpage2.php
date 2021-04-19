<?php /*
Template Name: Test Page 2
Template Post Type: logo

*/

esc_html_e( basename(get_page_template(  ))  );
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php the_title( ); ?></title>
    <?php wp_head(  ); ?>
</head>
<body <?php body_class(  )?>>
<?php the_post_thumbnail(); ?>
<?php wp_footer(  ) ?>   
</body>
</html>
