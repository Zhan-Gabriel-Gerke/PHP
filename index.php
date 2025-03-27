<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>PHP index leht</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
<?php
include("header.php");
?>
<!--NAV-->
<?php
include("nav.php");
?>
<main>
    <?php
        if(isset($_GET["leht"])){
            include('content/'.$_GET["leht"]);
        } else {
            include('content/avaleht.php');
        }
    ?>
</main>
<!--content kaustast failide sisud-->
<!--footer-->
<?php
include("footer.php");
?>
</body>
</html>