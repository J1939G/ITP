<?php 
    $db = mysqli_connect('localhost','ich','a','pittsburg')
    or die('Error connecting to MySQL server.');
    $lang = 'en';
    if (isset($_GET['lang'])) {
        $lang = $_GET['lang'];
        $langFlag = "?lang=" . $lang;
    } else {
        $langFlag = "";
    }
    $query = "SELECT sitp_photography.*, sitp_images.*, sitp_links.* FROM sitp_photography, sitp_images, sitp_links WHERE sitp_photography.lang='$lang' && sitp_photography.cat='$category' && sitp_images.cat='$category' && sitp_links.lang='$lang'";
    mysqli_query($db, $query) or die('Error querying database.');

    $result = mysqli_query($db, $query);
    $row = mysqli_fetch_array($result);

    $assets = "../../assets/images/" .  $category . "/";
?>
<html lang="<?php echo $lang?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/styles/gallery.css">
    <?php if($row['cat'] == 'nature') { echo "<link rel='stylesheet' href='../../assets/styles/nature.css'>";} ?>
    <title><?php echo $row['name']?></title>
    <link rel="shortcut icon" href="../../assets/images/camera.ico">
    <script src="../../assets/scripts/gallery.js"></script>
</head>
<body>
    <div id="navigation">
            <h1 id="title" style="background-image: url(../../assets/images/<?php echo $category ?>/<?php echo $category ?>_header.jpg);"><?php echo $row['name']?></h1>
            <div onclick="menu('menu')" id="arrow"></div>
            <div id="menu" style="background-image: url(../../assets/images/<?php echo $category ?>/<?php echo $category ?>_header.jpg);">
                <p><?php echo $row['linkName']?>
                    <?php if( $row['name'] != $row['linkB']) { echo '<a href="../portrait/'. $langFlag . '">'. $row['linkB'] . '</a>';} ?>
                    <?php if( $row['name'] != $row['linkC']) { echo '<a href="../nature/'. $langFlag . '">'. $row['linkC'] . '</a>';} ?>
                    <?php if( $row['name'] != $row['linkD']) { echo '<a href="../sport/'. $langFlag . '">'. $row['linkD'] . '</a>';} ?>
                </p>
                <a href="../../jose/<?php echo $langFlag ?>"><?php echo $row['linkA']?></a>
                <a href="../../stories/<?php echo $langFlag ?>"><?php echo $row['linkE']?></a>
                <a href="../../contact/<?php echo $langFlag ?>"><?php echo $row['linkF']?></a>
                <a href="../../<?php echo $langFlag ?>"><?php echo $row['home']?></a>
            </div>
        </div>
    <div id="container">
        <div id="text"><p><?php echo $row['textB']?></p></div>
        <div><p><?php echo $row['textA']?></p></div>
        <div><img src="<?php echo $assets . $row['imgA']?>M.jpg" alt="<?php echo $row['imgA']?>"
        	    srcset="	<?php echo $assets . $row['imgA'] ?>S.jpg 1450w,
                            <?php echo $assets . $row['imgA'] ?>M.jpg 1940w,
                            <?php echo $assets . $row['imgA'] ?>L.jpg 3200w"	
				/>
        </div>
        <div><img src="<?php echo $assets . $row['imgB']?>M.jpg" alt="<?php echo $row['imgB']?>"
        	    srcset="	<?php echo $assets . $row['imgB'] ?>S.jpg 1450w,
                            <?php echo $assets . $row['imgB'] ?>M.jpg 1940w,
                            <?php echo $assets . $row['imgB'] ?>L.jpg 3200w"	
				/>
        </div>
        <div><p><?php echo $row['textC']?></p></div>
        <div><img src="<?php echo $assets . $row['imgC']?>M.jpg" alt="<?php echo $row['imgC']?>"
        	    srcset="	<?php echo $assets . $row['imgC'] ?>S.jpg 1450w,
                            <?php echo $assets . $row['imgC'] ?>M.jpg 1940w,
                            <?php echo $assets . $row['imgC'] ?>L.jpg 3200w"	
				/>
        </div>
        <div><p><?php echo $row['textD']?></p></div>
        <div><img src="<?php echo $assets . $row['imgD']?>M.jpg" alt="<?php echo $row['imgD']?>"
        	    srcset="	<?php echo $assets . $row['imgD'] ?>S.jpg 1450w,
                            <?php echo $assets . $row['imgD'] ?>M.jpg 1940w,
                            <?php echo $assets . $row['imgD'] ?>L.jpg 3200w"	
				/>
        </div>
        <div id="copyright">
            <a href="https:/github.com/j1939g/pittsburg">GitHub</a><p>© 2019 José Smutný</p>
        </div>
    </div>  
</body>
</html>