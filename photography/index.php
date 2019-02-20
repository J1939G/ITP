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
    $query = "SELECT * FROM sitp_links WHERE lang='$lang'";
    mysqli_query($db, $query) or die('Error querying database.');
    $result = mysqli_query($db, $query);
    $row = mysqli_fetch_array($result);

    $assets = "../assets/images/";
?>

<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="../assets/styles/photography.css"/>
    <title>J. S. photography</title>
</head>
<body>
	<div id="container">
		<div id="first" class="cat"><a href="portrait/<?php echo $langFlag ?>"><?php echo $row['linkB'] ?></a><img src="<?php echo $assets . "people" ?>M.jpg" alt="<?php echo $row['linkB']?>"
        	    srcset="	<?php echo $assets . "people" ?>S.jpg 1450w,
                            <?php echo $assets . "people" ?>M.jpg 1940w,
                            <?php echo $assets . "people" ?>L.jpg 3200w"	
				/></div>
		<div id="second" class="cat"><a href="nature/<?php echo $langFlag ?>"><?php echo $row['linkC'] ?></a><img src="<?php echo $assets . "nature" ?>M.jpg" alt="<?php echo $row['linkC']?>"
        	    srcset="	<?php echo $assets . "nature" ?>S.jpg 1450w,
                            <?php echo $assets . "nature" ?>M.jpg 1940w,
                            <?php echo $assets . "nature" ?>L.jpg 3200w"	
				/></div>
		<div id="third" class="cat"><a href="sport/<?php echo $langFlag ?>"><?php echo $row['linkD'] ?></a><img src="<?php echo $assets . "sport" ?>M.jpg" alt="<?php echo $row['linkD']?>"
        	    srcset="	<?php echo $assets . "sport" ?>S.jpg 1450w,
                            <?php echo $assets . "sport" ?>M.jpg 1940w,
                            <?php echo $assets . "sport" ?>L.jpg 3200w"	
				/></div>
	</div>	
</body>
</html>