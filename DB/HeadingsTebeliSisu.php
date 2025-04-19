<?php
require("conf.php");
//tabeli sisu naitamine
//SELECT id, pealkiri, sisu FROM lehed
global $yhendus;
//kustutamine должно находиться в начале кода перед отображением
if(isset($_REQUEST["kustuta"])) {
    $kask = $yhendus->prepare("DELETE FROM lehed WHERE id=?");
    $kask->bind_param("i", $_REQUEST["kustuta"]);//i - integer, s - string
    $kask->execute();
}
$kask=$yhendus->prepare("SELECT id, pealkiri FROM lehed");
$kask->bind_result($id, $pealkiri);
$kask->execute();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tabeli sisu naitamine</title>
</head>
<body>
<h1>Tabeli "lehed" sisu</h1>
<table>
    <tr>
        <th>id</th>
        <th>pealkiri</th>
        <th>sisu</th>
        <th>kuupaev</th>
        <th>Kustuta</th>
    </tr>
    <?php
    //read tabelist tsukliga
    while ($kask->fetch()) {
        echo "<li><a href='teadetevalik.php?id=$id'>" . htmlspecialchars($pealkiri) . "</a></li>";
    }
    ?>
</table>
</body>
</html>