<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset')?>" />
    <title><?php bloginfo('name') ?></title>
    <?php if( $pagename == 'jose' || $pagename == 'kontakt'): echo '<link rel="stylesheet" href="' . get_stylesheet_directory_uri() . '/styles/jose.css" />'; endif;?>
    <?php if( get_page_template_slug() == 'gallery.php'): echo '<link rel="stylesheet" href="' . get_stylesheet_directory_uri() . '/styles/gallery.css" />'; endif;?>
    <?php if( $pagename == 'priroda'): echo '<link rel="stylesheet" href="' . get_stylesheet_directory_uri() . '/styles/nature.css" />'; endif;?>
    <?php if( $pagename == 'pribehy' || $pagename == 'historie') : echo '<link rel="stylesheet" href="' . get_stylesheet_directory_uri() . '/styles/posts.css" />'; endif;?>
    <?php if( get_page_template_slug() == 'gallery.php'): echo '<script src="' . get_stylesheet_directory_uri() . '/scripts/gallery.js" ></script>'; endif;?>
    <?php if( $pagename == 'pribehy' || $pagename == 'historie'): echo '<script src="' . get_stylesheet_directory_uri() . '/scripts/posts.js" ></script>'; endif;?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php if( $pagename == 'jose' || $pagename == 'kontakt'): echo '<script src="' . get_stylesheet_directory_uri() . '/scripts/jose.js" ></script>'; endif; ?>
    <?php echo '<style rel="stylesheet" type="text/css">@media only screen and ( min-aspect-ratio: 3/4) {#navigation .menu-page-container {background-image: url(' . get_stylesheet_directory_uri() . '/images/' . $pagename . '/' . $pagename . '_header.jpg);}}</style>';
    
    wp_head(); 
    ?>
    
</head>
<body>
    <nav id="navigation">
    <h1 id="title" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/<?php echo $pagename ?>/<?php echo $pagename ?>_header.jpg);"><?php echo wp_title(""); ?></h1>
        <div onclick="menu('menu-page-container')" id="arrow"></div>
        <?php wp_nav_menu(array('theme_location' => 'page')); ?>
    </nav>
    <div id="content">