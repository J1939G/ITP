<?php 

/* Template name: Photography*/
$assets = get_stylesheet_directory_uri() . '/images/';
the_post();
?>

<!DOCTYPE html>
<head charset='<?php bloginfo('charset')?>'>
    <title><?php bloginfo('name')?></title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/styles/photography.css" />
</head>
<body>
	<div id="container">
		<div id="first" class="cat"><a href="portrety/"><?php echo get_post_meta($post->ID, 'People', true); ?></a>
			<picture>
				<source srcset="<?php echo $assets . "people" ?>S.jpg 1450w,
                            	<?php echo $assets . "people" ?>M.jpg 1940w,
                            	<?php echo $assets . "people" ?>L.jpg 3200w"
						media="(max-aspect-ratio: 1/1)">
				<source srcset="<?php echo $assets . "people" ?>S-M.jpg 1450w,
                            	<?php echo $assets . "people" ?>M-M.jpg 1940w,
                            	<?php echo $assets . "people" ?>L-M.jpg 3200w"
						media="(min-aspect-ratio: 1/1) and (max-aspect-ratio: 3/2)">
				<source srcset="<?php echo $assets . "people" ?>S-S.jpg 1450w,
                            	<?php echo $assets . "people" ?>M-S.jpg 1940w,
                            	<?php echo $assets . "people" ?>L-S.jpg 3200w"
						media="(min-aspect-ratio: 3/2)">
				<img src="<?php echo $assets . "people" ?>M.jpg" alt="Pohled na obličej" />
			</picture>
		</div>
		<div id="second" class="cat"><a href="priroda/"><?php echo get_post_meta($post->ID, 'Nature', true); ?></a>
			<picture>
				<source srcset="<?php echo $assets . "nature" ?>S.jpg 1450w,
                            	<?php echo $assets . "nature" ?>M.jpg 1940w,
                            	<?php echo $assets . "nature" ?>L.jpg 3200w"
						media="(max-aspect-ratio: 1/1)">
				<source srcset="<?php echo $assets . "nature" ?>S-M.jpg 1450w,
                            	<?php echo $assets . "nature" ?>M-M.jpg 1940w,
                            	<?php echo $assets . "nature" ?>L-M.jpg 3200w"
						media="(min-aspect-ratio: 1/1) and (max-aspect-ratio: 3/2)">
				<source srcset="<?php echo $assets . "nature" ?>S-S.jpg 1450w,
                            	<?php echo $assets . "nature" ?>M-S.jpg 1940w,
                            	<?php echo $assets . "nature" ?>L-S.jpg 3200w"
						media="(min-aspect-ratio: 3/2)">
				<img src="<?php echo $assets . "nature" ?>M.jpg" alt="Snněžený les" />
			</picture>
		</div>
		<div id="third" class="cat"><a href="sport/"><?php echo get_post_meta($post->ID, 'Sport', true); ?></a>
			<picture>
				<source srcset="<?php echo $assets . "sport" ?>S.jpg 1450w,
                            	<?php echo $assets . "sport" ?>M.jpg 1940w,
                            	<?php echo $assets . "sport" ?>L.jpg 3200w"
						media="(max-aspect-ratio: 1/1)">
				<source srcset="<?php echo $assets . "sport" ?>S-M.jpg 1450w,
                            	<?php echo $assets . "sport" ?>M-M.jpg 1940w,
                            	<?php echo $assets . "sport" ?>L-M.jpg 3200w"
						media="(min-aspect-ratio: 1/1) and (max-aspect-ratio: 3/2)">
				<source srcset="<?php echo $assets . "sport" ?>S-S.jpg 1450w,
                            	<?php echo $assets . "sport" ?>M-S.jpg 1940w,
                            	<?php echo $assets . "sport" ?>L-S.jpg 3200w"
						media="(min-aspect-ratio: 3/2)">
				<img src="<?php echo $assets . "sport" ?>M.jpg" alt="Běhající sportovce" />
			</picture>
		</div>
	</div>	
</body>
</html>