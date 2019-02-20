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
?>

<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="../assets/styles/photography.css"/>
    <title>J. S. photography</title>
</head>
<body>
	<div id="container">
		<div id="first" class="cat"><a href="portrait/<?php echo $langFlag ?>"><?php echo $row['linkB'] ?></a><img src="../assets/images/people.jpg" alt="people"></div>
		<div id="second" class="cat"><a href="nature/<?php echo $langFlag ?>"><?php echo $row['linkC'] ?></a><img src="../assets/images/nature.jpg" alt="nature"></div>
		<div id="third" class="cat"><a href="sport/<?php echo $langFlag ?>"><?php echo $row['linkD'] ?></a><img src="../assets/images/sport.jpg" alt="sport"></div>
	</div>	
</body>
</html>