<?php 
    get_header();
    if( have_posts() ):
        while (have_posts()): the_post();?>

    <article class="post">
        <h2 class="post-title"><?php the_title(); ?></h2>
        <div><?php the_post_thumbnail();?></div>
    </article>

        <?php
        endwhile;
    endif;
    get_footer();
?>