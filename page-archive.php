<?php
/* Template name: Archives*/
?>


<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset')?>" />
    <title><?php bloginfo('name') ?></title>
    <?php echo '<link rel="stylesheet" href="' . get_stylesheet_directory_uri() . '/styles/posts.css" />';?>
    <?php echo '<script src="' . get_stylesheet_directory_uri() . '/scripts/jose.js" ></script>';?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php echo '<style rel="stylesheet" type="text/css">@media only screen and ( min-aspect-ratio: 3/4) {#navigation .menu-page-container {background-image: url(' . get_stylesheet_directory_uri() . '/images/' . $pagename . '/' . $pagename . '_header.jpg);}}</style>';
    wp_head(); 
    ?>
</head>
<body>
    <div id="content">
        <nav id="navigation">
            <h1 id="title" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/<?php echo $pagename ?>/<?php echo $pagename ?>_header.jpg);"><?php echo wp_title(""); ?></h1>
            <div onclick="menu('menu-page-container')" id="arrow"></div>
            <div class="menu-page-container">
                <ul id="menu-page" class="menu">
                    <li><a href="../pribehy">Příběhy</a></li>
                    <?php wp_get_archives('type=yearly'); ?>
                </ul>
            </div>
        </nav>

<?php 
    echo wp_get_archives('type=postbypost');
    get_footer();
?>