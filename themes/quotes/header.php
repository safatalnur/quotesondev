<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <?php wp_head();?>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body <?php body_class();?>>

<!-- <div class="header-title">
    <h1><?php bloginfo('name');?></h1>
</div> -->
<div id="header-image">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
       <img src="<?php echo get_template_directory_uri(); ?>/images/qod-logo.svg" alt="Logo" width="HERE" height="HERE" />
    </a>
</div>
