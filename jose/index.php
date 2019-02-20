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
    $query = "SELECT sitp_me.*, sitp_links.* FROM sitp_me, sitp_links WHERE sitp_me.lang='$lang' && sitp_links.lang='$lang'";
    mysqli_query($db, $query) or die('Error querying database.');

    $result = mysqli_query($db, $query);
    $row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title><?php echo $row['title']?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../assets/styles/jose.css" />
    <script src="../assets/scripts/jose.js"></script>
</head>
<body>
    <div id="navigation">
        <h1 id="title"><?php echo $row['title']?></h1>
        <div onclick="menu('menu')" id="arrow"></div>
        <div id="menu">
            <p><?php echo $row['linkBCD'] ?>
                <a href="../photography/portrait/<?php echo $langFlag ?>"><?php echo $row['linkB'] ?></a>
                <a href="../photography/nature/<?php echo $langFlag ?>"><?php echo $row['linkC'] ?></a>
                <a href="../photography/sport/<?php echo $langFlag ?>"><?php echo $row['linkD'] ?></a>
            </p>
            <a href="../stories<?php echo $langFlag ?>"><?php echo $row['linkE'] ?></a>
            <a href="../contact<?php echo $langFlag ?>"><?php echo $row['linkF'] ?></a>
            <a href="../<?php echo $langFlag ?>"><?php echo $row['home']?></a>
        </div>
    </div>
    <div id="content">
        <p>
            <img src="../assets/images/jose/me.jpg" alt="José Smutný"/>
            <?php echo $row['content'] ?>
        </p>
        <div id="copyright">
            <a href="https:/github.com/j1939g/pittsburg">GitHub</a><p>© 2019 José Smutný</p>
        </div>
    </div>
</body>
</html>