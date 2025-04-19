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

$kask=$yhendus->prepare("SELECT id, pealkiri, sisu , kuupaev FROM lehed");
$kask->bind_result($id, $pealkiri, $sisu, $kuupaev);
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
    while($kask->fetch()) {
        echo "<tr>";
        echo "<td>".htmlspecialchars($id)."</td>";
        echo "<td>".htmlspecialchars($pealkiri)."</td>";
        echo "<td>".htmlspecialchars($sisu)."</td>";
        echo "<td>".htmlspecialchars($kuupaev)."</td>";
        echo "<td><a href='?kustuta=$id'>Kustuta</a></td>";
        echo "</tr>";
    }
    ?>
</table>
</body>
</html>