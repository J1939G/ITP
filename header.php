<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset')?>" />
    <title><?php bloginfo('name') ?></title>
    <?php if( $pagename == 'priroda'): echo '<link rel="stylesheet" href="' . get_stylesheet_directory_uri() . '/styles/nature.css" />'; endif;?>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-135957776-1"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-135957776-1');
    </script>
    <noscript><link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . '/styles/noscript.css' ?>" ></noscript>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php echo '<style rel="stylesheet" type="text/css">@media only screen and ( min-aspect-ratio: 3/4) {#navigation div {background-image: url(' . get_stylesheet_directory_uri() . '/images/headers/' . $pagename . '_header.jpg);}}</style>';
    wp_head(); 
    ?>
    
</head>
<body <?php if( $pagename == 'pribehy'){echo 'onload="portrait()"';}; ?>>
    <nav id="navigation">
        <h1 id="title" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/headers/<?php echo $pagename ?>_header.jpg);"><?php echo wp_title(""); ?></h1>
        <button onclick="menu('#navigation div')" id="arrow"></button>
        <?php wp_nav_menu(array('theme_location' => 'page')); ?>
    </nav>
    <div id="content">