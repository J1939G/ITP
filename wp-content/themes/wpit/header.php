<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset')?>" />
    <title><?php bloginfo('name') ?></title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/styles/jose.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/scripts/jose.js" ></script>
    <?php echo '<style rel="stylesheet" type="text/css">@media only screen and ( min-aspect-ratio: 3/4) {#navigation .menu-page-container {background-image: url(' . get_stylesheet_directory_uri() . '/images/' . $pagename . '/' . $pagename . '_header.jpg);}}</style>';
    
    wp_head(); 
    
    
    global $post;
    $post_slug=$post->post_name;
    ?>
</head>
<body>
    <nav id="navigation">
        <h1 id="title" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/<?php echo $pagename ?>/<?php echo $pagename ?>_header.jpg);"><?php echo get_post_field('post_title'); ?></h1>
        <div onclick="menu('menu-page-container')" id="arrow"></div>
        <?php wp_nav_menu(array('theme_location' => 'page')); ?>
    </nav>
    <div id="content">