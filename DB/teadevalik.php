<?php
// võtame ühendust conf.php failist
require ('conf.php');

global $yhendus;
//lisamine andmetabelisse
?>

<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>Teade valik</title>
</head>
<body>
<h1>Teade valik</h1>
<main>
        <ul>
            <?php
            global $yhendus;
            $kaskMenyy = $yhendus->prepare("SELECT id, pealkiri FROM lehed");
            $kaskMenyy->bind_result($menuId, $pealkiri);
            $kaskMenyy->execute();
            while($kaskMenyy->fetch()){
                echo "<li><a href='?valik=$menuId'>".htmlspecialchars($pealkiri)."</a></li>";
            }
            $kaskMenyy->close();
            ?>
        </ul>
            <?php
            if(isSet($_REQUEST["valik"])) {
                $kaskValik = $yhendus->prepare("SELECT id, pealkiri, sisu, kuupaev FROM lehed WHERE id=?");
                $kaskValik->bind_param("i", $_REQUEST["valik"]);
                $kaskValik->bind_result($valikId, $valikpealkiri, $valikpealsisu, $valikkuupaev);
                $kaskValik->execute();
                if ($kaskValik->fetch()) {
                    echo "<h2>" . htmlspecialchars($valikpealkiri) . "</h2>";
                    echo "<p>" . $valikpealsisu . "</p>";
                    echo "<p>" . $valikkuupaev . "</p>";;
                    echo "</tr>";
                }
            }
            ?>
    <?php
    $yhendus->close();
    ?>
</main>
</body>
</html>