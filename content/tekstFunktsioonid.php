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
?>
<?php
$aine = "PHONE";
$answer = $_POST['answer'] ?? '';
$correct = strtoupper($answer) === $aine;
?>
<form id="formAnswer" name="word" method='post'>
    <label for="answer"></label>
    <input type='text' name='answer' id="answer" placeholder='Введите ваш ответ'>
    <button type='submit'>Проверить</button>
</form>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($correct) {
        echo "<p style='color: green;'>Верно! Это $aine.</p>";
    } else {
        echo "<p style='color: red;'>Неверно. Попробуйте ещё раз!</p>";
    }
}

echo "<ul>";
echo "<li>1. Количество символов в названии предмета: " . strlen($aine) . "</li>";
echo "<li>2. Название начинается с буквы: " . $aine[0] . "</li>";
echo "<li>3. Последняя буква: " . substr($aine, -1) . "</li>";
echo "<li>4. Три средние буквы: " . substr($aine, 1, 3) . "</li>";
echo "<li>5. Буквы в алфавитном порядке: " . implode(', ', str_split($aine)) . "</li>";
echo "<li>6. Переставленные буквы (2,3,4,1,5): " . $aine[1] . $aine[2] . $aine[3] . $aine[0] . $aine[4] . "</li>";
echo "</ul>";
?>
<div id="code">
    <?php
    highlight_file('matemTehted.php');
    ?>
</div>