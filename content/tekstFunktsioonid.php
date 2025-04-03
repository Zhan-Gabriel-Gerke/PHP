<?php
$tekst="PHP on skriptikeel serveri pool";
echo "<h2>Tekst Funktsioonid</h2>";
echo $tekst;
echo "<br>";
echo "Teksti pikkus on (strlen())".strlen($tekst). " tahte";
echo "<br>";
echo "Esimesed 5 tahte on (substr()):".substr($tekst, 0,5);
echo "<br>";
echo "Alates 6 tahte on ".substr($tekst, 5);
echo "<br>";
echo "Sonade arv lauses on: (str_word_count())".str_word_count($tekst);
echo "<br>";
echo "Esimese tuhiku asukoht on: (strpos())". strpos($tekst, " "). "sumboolit";
echo "<br>";
//Naita sumboolid peale esimese tuhiku
echo substr($tekst, strpos($tekst, " "));
echo "<br>";
echo "Koik tahed on vaiksed (strtolower) -".strtolower($tekst);
echo "<br>";
echo "Koik tahed on suured (strtoupper) -)".strtoupper($tekst);
echo "<br>";
echo "Iga sona laused algab suure tahega (ucwords)".ucwords($tekst);

echo "<br>";
echo "Moistatus. Oppeaine.";
//PHP - https://www.metshein.com/unit/php-tekstifunktsioonid-ulesanne-9/

//Дай 6 подсказок и использованием текстовых функцийб
//чтобы отгадать название предмета.
//Добавить проверку через ввод в текствое поле
echo "<br>";
$aine = "PHONE";
echo "<ul>";
echo "<li>Кол-во сиволов в названии предмета".strlen($aine). "</li>";
echo "<li>"."Word:".$aine[1], $aine[2], $aine[3], $aine[0], $aine[4]."</li>";

echo "</ul>";
