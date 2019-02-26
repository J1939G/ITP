<?php 

$assets = get_stylesheet_directory_uri() . '/images/';

?>

<!DOCTYPE html>
<head charset='<?php bloginfo('charset')?>'>
    <title><?php bloginfo('name')?></title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/styles/photography.css" />
</head>
<body>
	<div id="container">
		<div id="first" class="cat"><a href="portrety/">Portréty</a><img src="<?php echo $assets . "people" ?>M.jpg" alt="priroda"
        	    srcset="	<?php echo $assets . "people" ?>S.jpg 1450w,
                            <?php echo $assets . "people" ?>M.jpg 1940w,
                            <?php echo $assets . "people" ?>L.jpg 3200w"	
				/></div>
		<div id="second" class="cat"><a href="priroda/">Příroda</a><img src="<?php echo $assets . "nature" ?>M.jpg" alt="priroda"
        	    srcset="	<?php echo $assets . "nature" ?>S.jpg 1450w,
                            <?php echo $assets . "nature" ?>M.jpg 1940w,
                            <?php echo $assets . "nature" ?>L.jpg 3200w"	
				/></div>
		<div id="third" class="cat"><a href="sport/">Sport</a><img src="<?php echo $assets . "sport" ?>M.jpg" alt="sport"
        	    srcset="	<?php echo $assets . "sport" ?>S.jpg 1450w,
                            <?php echo $assets . "sport" ?>M.jpg 1940w,
                            <?php echo $assets . "sport" ?>L.jpg 3200w"	
				/></div>
	</div>	
</body>
</html>