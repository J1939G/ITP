<?php 
/**
* Template Name: Gallery
*
* @package pittsburg
*/
        $assets = get_stylesheet_directory_uri() . '/images/' . get_post_meta($post->ID, 'Source', true) . '/';

        echo '<link rel="stylesheet" href="' . get_stylesheet_directory_uri() . '/styles/gallery.css" />';
        echo '<script src="' . get_stylesheet_directory_uri() . '/scripts/gallery.js" ></script>';

        get_header();

        if( have_posts() ):
                while (have_posts()): the_post();
                        the_content();
                endwhile;
        endif;
?>
    <div><img src="<?php echo $assets . "AM.jpg\" alt='First image'" ?>"
            srcset="	<?php echo $assets . "AS.jpg 1450w"?>,
                        <?php echo $assets . "AM.jpg 1940w"?>,
                        <?php echo $assets . "AL.jpg 3200w"?>"
            />
    </div>
    <div><img src="<?php echo $assets . "BM.jpg\" alt='Second image'" ?>"
            srcset="	<?php echo $assets . "BS.jpg 1450w"?>,
                        <?php echo $assets . "BM.jpg 1940w"?>,
                        <?php echo $assets . "BL.jpg 3200w"?>"	
            />
    </div>
    <div><img src="<?php echo $assets . "CM.jpg\" alt='Third image'" ?>"
            srcset="	<?php echo $assets . "CS.jpg 1450w"?>,
                        <?php echo $assets . "CM.jpg 1940w"?>,
                        <?php echo $assets . "CL.jpg 3200w"?>"	
            />
    </div>
    <div><img src="<?php echo $assets . "DM.jpg\" alt='Fourth image'" ?>"
            srcset="	<?php echo $assets . "DS.jpg 1450w"?>,
                        <?php echo $assets . "DM.jpg 1940w"?>,
                        <?php echo $assets . "DL.jpg 3200w"?>"	
            />
    </div>
<?php get_footer(); ?>