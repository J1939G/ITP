<?php 
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
