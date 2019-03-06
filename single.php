<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset')?>" />
    <title><?php bloginfo('name') ?></title><?php
    echo '<link rel="stylesheet" href="' . get_stylesheet_directory_uri() . '/styles/single.css" />';
    the_post();
    ?>
    </head>
    <body>
        <div id="content">
    <?php 
        ?><h2><?php the_title(); ?></h2><?php 
        echo "<div>" . get_the_post_thumbnail() . "</div>";
        the_content("", FALSE);
        ?> 
        <p id="pageNav"><a href="../">Jít domu</a>, <a href="../pribehy/">Příběhy</a>, <a href="../pribehy/historie/">Historie</a></p>
        <?php
    get_footer(); 
?>