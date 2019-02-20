<?php 
    $db = mysqli_connect('localhost','ich','a','pittsburg')
    or die('Error connecting to server.');
	$lang = 'en';
    if (isset($_GET['lang'])) {
		$lang = $_GET['lang'];
		$langFlag = "?lang=" . $lang;
    } else {
        $langFlag = "";
    }
    $query = "SELECT * FROM sitp_home WHERE lang='$lang'";
    mysqli_query($db, $query) or die('Error querying database.');
    $result = mysqli_query($db, $query);
    $row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>José Smutný photography</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<link rel="stylesheet" href="assets/styles/home.css"/>
   		<link rel="shortcut icon" href="../assets/images/camera.ico" type="image/x-icon">
		<script src="assets/scripts/home.js"></script>
	</head>
	<body>
		<div id="content">
			<div id="languageSwitcher">
				<?php if( $lang != "en") { echo '<a href="/pittsburg/public/index.php?lang=en" style="background-image: url(assets/images/en.svg)"></a>';}?>
				<?php if( $lang != "es") { echo '<a href="/pittsburg/public/index.php?lang=es" style="background-image: url(assets/images/es.svg)"></a>';}?>
				<?php if( $lang != "cz") { echo '<a href="/pittsburg/public/index.php?lang=cz" style="background-image: url(assets/images/cz.svg)"></a>';}?>
			</div>
			<h1 onclick="changer(this.id)" id="title">José Smutný</h1>
			<a href="jose/jose.php<?php echo $langFlag ?>"><?php echo $row['linkA'] ?></a>
			<a href="photography/photography.php<?php echo $langFlag ?>"><?php echo $row['linkB'] ?></a>
			<a href="stories/"><?php echo $row['linkC'] ?></a>
			<a href="contact.php<?php echo $langFlag ?>"><?php echo $row['linkD'] ?></a>
			<div id="background">
				<img src="assets/images/home-backgroundM.jpg" alt="photography of snowy forest"
					 srcset="	assets/images/home-backgroundS.jpg 1450w,
					 			assets/images/home-backgroundM.jpg 1940w,
								assets/images/home-backgroundL.jpg 3200w"	
				/>
			</div>	
		</div>
	</body>
</html>
