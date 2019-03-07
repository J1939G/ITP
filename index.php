<?php 

    echo '<link rel="stylesheet" href="' . get_stylesheet_directory_uri() . '/styles/posts.css" />';
    echo '<script src="' . get_stylesheet_directory_uri() . '/scripts/posts.js" ></script>';

    get_header();
    query_posts('posts_per_page=3');
    if( have_posts() ):
        while (have_posts()): the_post();
        ?>

    <div class="post">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            <?php the_content('číst dál', TRUE); ?>
            <div class="thumb"><?php the_post_thumbnail('large'); ?></div>
    </div>
        <?php
        endwhile;
    endif;
    get_footer();
?>