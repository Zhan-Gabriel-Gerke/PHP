<?php
echo "<h2>Aja funktsioonid</h2>". time();
echo date_default_timezone_set('Europe/Tallinn');
// kui taimzone ei ole maaratud, siis naitab serveri-localhost aeg
echo "<br>";
echo "date()". date('d.m.Y G:i:s', time());
echo "<br>";
echo "d- paev 01...31";
echo "<br>";
echo "m- kuu 01...12";
echo "<br>";
echo "Y - aasta - neljakohane arv";
echo "<br>";
echo "G- 24-tudiline formaat or g-12h";
echo "<br>";
echo "i- minutid 0-59";
echo "<br>";
echo date('Y');
echo "<br>";
echo "<strong>Tehted kuupaevaga: </strong>";
echo "<br>";
echo "+1 min = ".date('d.m.Y G:i:s', time()+60);
echo "<br>";
echo "+1 tund = ".date('d.m.Y G:i:s', time()+60*60);
echo "<br>";
echo "+1 day = ".date('d.m.Y G:i:s', time()+60*60*24);
echo "<br>";
echo "mktime(tunnid, minutid, sekundid, kuu, paev, aasta)";
echo "<br>";
echo "Minu DR: ";
$s = mktime(5,5,10,12,6,2005);
echo date('d.m.Y G:i:s', $s);
?>
<div id="hooaeg">
    <h2>Kuvada hooajapilti (kevad, suvi, sygis, talv)
    vastavalt tanasele kuupaevale</h2>
    <?php
    $tana=new DateTime();
    echo "Tana on (m-d-Y)". $tana->format('m-d-Y');
    echo "<br>";
    $kevad = new DateTime('March 20');
    $suvi = new DateTime('June 21');
    $sugis = new DateTime('September 22');
    $talv = new DateTime('December 22');

    switch (true){
        //kevad
        case $tana > $kevad && $tana < $suvi:
            echo "Kevad";
            $pilt = "content/img/spring.jpg";
            break;
        //suvi
        case $tana > $suvi && $tana < $sugis:
            echo "Suvi";
            $pilt = "content/img/summer.jpg";
            break;
        //sugis
        case $tana > $sugis && $tana < $talv:
            echo "Sugis";
            $pilt = "content/img/autumn.jpg";
            break;
        //talv
        case $tana > $talv && $tana < $kevad:
            echo "Talv";
            $pilt = "content/img/winter.jpg";
            break;
    }
    ?>
    <br>
    <img src="<?=$pilt?>" alt="hooaja pilt" width="100px">
    <!--//Ülesanded
    //1.
    //<h2>Massivi abil näidata kuu nimega tänases kuupäevas.</h2>
    //$kuud=array(1=>'jaanuar', 'veebruar', )
    //$paev=date('d');
    //$year=date('Y');
    //$kuu=$kuud[date('n')];
    //echo ??? .' '.
    //
    //2. Leia mitu päeva on koolivaheajani - 16.06.2025 (kasuta date_diff funktsiooni)
    // 3. Oma näide, mis arvutab midagi ajafunktsiooniga.-->
</div>
<div id="ex1AjaF">
    <?php
    echo "<h2>Massivi abil näidata kuu nimega tänases kuupäevas.</h2>";
    $kuud=array(1=>'Jaanuar', 'Veebruar', 'March', 'April', 'Mai', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
    $paev=date('d');
    $year=date('Y');
    $kuu=$kuud[(int)date('m')];
    echo $paev.' '.$kuu.' '.$year;
    ?>
</div>
<div id="ex2AjaF">
    <?php
    $today = new DateTime();
    $endOfYear = new DateTime("2025-06-16");
    $different = date_diff($today, $endOfYear);
    echo 'Осталось времени до лета ' . $different->m. ' месяцев '. $different->d . " дней ";
    ?>
</div>
<div id="ex3AjaF">
    <?php
    $today = new DateTime();
    $MyBirthDay = new DateTime("2025-12-06");
    $different = date_diff($today, $MyBirthDay);
    echo 'Осталось времени до др ' . $different->m. ' месяцев '. $different->d .
        " дней " . $different->h . ' часов '. $different->m . ' минут';
    ?>
</div>
<div id="code">
    <?php
    highlight_file('matemTehted.php');
    ?>
</div>