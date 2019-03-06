<?php 

    if( $pagename == 'jose' || $pagename == 'kontakt'): echo '<link rel="stylesheet" href="' . get_stylesheet_directory_uri() . '/styles/jose.css" />'; endif;
    if( $pagename == 'jose' || $pagename == 'kontakt'): echo '<script src="' . get_stylesheet_directory_uri() . '/scripts/jose.js" ></script>'; endif;

    get_header();
    if( $pagename == "jose"):
        echo '<img src=' . get_stylesheet_directory_uri() . '/images/jose/me.jpg alt="José Smutný">';
    endif;
    if( have_posts() ):
        while (have_posts()): the_post();
            the_content();
        endwhile;
    endif;
    get_footer();
?>
