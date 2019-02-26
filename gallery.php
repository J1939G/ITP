<?php 
/**
* Template Name: Gallery
*
* @package wpit
*/
    $assets = get_stylesheet_directory_uri() . '/images/' . $pagename . '/';
    get_header();
?><div id="text"><p><?php echo  'Alfa lorem ipsum dolor sit ammet blah blah blah blah'?></p></div>
    <div><p><?php echo 'Beta tbeta tbeta beta beta beta beta beata'?></p></div>
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
    <div><p><?php echo  'gamma gamma gamma gamma gammga gamma gammag gamma'?></p></div>
    <div><img src="<?php echo $assets . "CM.jpg\" alt='Third image'" ?>"
            srcset="	<?php echo $assets . "CS.jpg 1450w"?>,
                        <?php echo $assets . "CM.jpg 1940w"?>,
                        <?php echo $assets . "CL.jpg 3200w"?>"	
            />
    </div>
    <div><p><?php echo  'delta delta delta delta delta delta delta'?></p></div>
    <div><img src="<?php echo $assets . "DM.jpg\" alt='Fourth image'" ?>"
            srcset="	<?php echo $assets . "DS.jpg 1450w"?>,
                        <?php echo $assets . "DM.jpg 1940w"?>,
                        <?php echo $assets . "DL.jpg 3200w"?>"	
            />
    </div>
<?php get_footer(); ?>