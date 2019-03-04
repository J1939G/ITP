<?php 
    echo '<link rel="stylesheet" href="' . get_stylesheet_directory_uri() . '/styles/posts.css" />';
    echo '<script src="' . get_stylesheet_directory_uri() . '/scripts/posts.js" ></script>';
    get_header();
    if( have_posts() ):
        while (have_posts()): the_post();
        ?>

    <div class="post-archive">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            <p class="date"><?php the_modified_date("d. m.", "", "", TRUE); ?></p>
            <?php the_content('číst dál', TRUE); ?>
    </div>

        <?php
        endwhile;
    endif;
    get_footer();
?>