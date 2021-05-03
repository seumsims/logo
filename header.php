<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Page Title -->
    <title><?php bloginfo( "name" ); ?></title>
     <!-- Meta Data -->
     <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.png" />
    <?php  wp_head(); ?>
    <?php 
//var_dump(get_page_template()); ?>
</head>
<body <?php body_class(  ); ?>>

<?php get_template_part( "templates/top-menu-and-top-bar-section" ); ?> 

