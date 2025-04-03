<?php
//https://pastebin.com/Qdb6QDtJ
function clearVarsExcept($url, $varname) {
    // basename - makes the link relative, url must contain a filename that it returns basename('http://www.ee/index.php') > index.php
    $url = basename($url);
    if (str_starts_with($url, "?")) {
        return "?$varname=".$_REQUEST[$varname];
    }
    // strtok - returns first token after spliting on separator "?" strtoken('index.php?haha=lala', '?') > index.php
    return strtok($url, "?")."?$varname=".$_REQUEST[$varname];
}
    echo "<h2>Matemaatilised tehted</h2>";
    echo "<br>";
    echo "<a href='https://www.metshein.com/unit/php-matemaatilised-tehted-ulesanne-2/'>
    PHP matemaatilised tehted</a>";
    ?>
<div id="moistatus">
    <?php
//moistatus
echo "<h2>Загадали 2 числа до ...</h2>";
$arv1=10;
$arv2=5;
echo "<ul>";
echo "<li> Если из первого числа вычесть второе, то будет ".$arv1-$arv2."</li>";
echo "<li> Если первое число умножить на второе ".$arv1*$arv2."</li>";
echo "<li> Если певое и второе число сложить ".$arv1+$arv2."</li>";
echo "<li> Если первое число разделить на второе ".$arv1/$arv2."</li>";
echo "<li> Если взять остаток от деления первого числа на второе будет ".$arv1%$arv2."</li>";
echo "</ul>";
echo "<br>";
//В подсказках перебрать все матем операции
//пару операторов присваивания (omistamise operaatorid)
$x = 15;
$y = 7;
echo "<h2>Операторы присваивания</h2>";
echo "<ul>";
$x+=$y;
echo "<li>x +=y ".$x."</li>";
$x -=$y;
echo "<li> x -=y ".$x."</li>";
$x *=$y;
echo "<li> x *=y ".$x."</li>";
$x /= $y;
echo "<li> x /=y ".$x."</li>";
echo "</ul>";
echo "<h2>Vastuste kontroll</h2>";
?>
</div>
<!--
echo "<label for='quantity'>Arv1</label>";
echo "<input type='number' id='arv1' min='1' max='10' step='1'>";
echo "<br>";
echo "<label for='quantity'>Arv2</label>";
echo "<input type='number' id='arb2' min='1' max='10' step='1'>";
echo "<br>";
echo "<button>kontroll</button>";-->
<br>
    <form id="formArvud" name="arvud" action="<?=clearVarsExcept($_SERVER['REQUEST_URI'], "leht")?>" method="post">
        <label for="arv1">Arv1</label>
        <input type="number" name="arv1" id="arv1" min="0" max="10" step="1">
        <br>
        <label for="arv2">Arv2</label>
        <input type="number" name="arv2" id="arv2" min="0" max="10" step="1">
        <input type="submit" value="Kontrolli">
    </form>
<?php
if(isset($_REQUEST['arv1'])){
    if($_REQUEST["arv1"]==$arv1){
        if($_REQUEST["arv2"]==$arv2){
            echo "oige";
            echo "<body style='background-color:green;'>";
        }else if ($_REQUEST["arv2"]!=$arv2){
            echo "vale";
            echo "<body style='background-color:red;'>";
        }
    }else if ($_REQUEST["arv1"]!=$arv1){
        echo "vale";
        echo "<body style='background-color:red;'>";
    }
}
?>
<br>
<div id="code">
    <?php
    highlight_file('matemTehted.php');
    ?>
</div>
<!--
else if(isset($_REQUEST['arv1'])){
    if($_REQUEST["arv1"]!=$arv1){
        if($_REQUEST["arv2"]==$arv2){
            echo "vale";
            echo "<body style='background-color:red;'>";
        }
    }
}
-->