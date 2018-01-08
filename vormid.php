<?php
/**
 * Created by PhpStorm.
 * User: Gerli
 * Date: 08/01/2018
 * Time: 10:39
 */

/*echo '<pre>';
print_r($_SERVER);
echo '</pre>';*/
//echo $_SERVER['PHP_SELF'];

//name! et saaks seostada

/*
echo '
 <form action="'.$_SERVER['PHP_SELF'].'" method="post">
    Kasutaja: <input type="text" name="kasutaja"><br />
    Parool: <input type="password" name="parool"><br />
    <input type="submit" value="Saada">
 </form>
';

echo '<hr />';

if (count($_POST) > 0) {
    foreach ($_POST as $element){
        if (strlen($element) == 0){
            echo 'Tuleb täita väljad.<br />';
            exit;
        }
    }
    echo '<pre>';
    print_r($_GET);
    print_r($_POST);
    print_r($_REQUEST);
    echo '</pre>';

    echo $_POST['kasutaja'] . '<br />';
    echo $_POST['parool'] . '<br />';
}

echo '<hr />';


*/

/*
 * Koosta mäng, kus kasutaja saab ära arvata programmis mõeldud
 * täisarvu ühest viiekümneni. Skript peab
 * töötama seni kuni õige arv on leitud ning teavitama
 * sellest kasutajat.
 *
 * Vale arvu sisestamisel antakse kasutajale vihje, kas
 * serveri poolt valitud arv on suurem või väiksem
 * kasutaja sisestatud arvust.
 *
 * Täienda programmi selliselt, et kui õige vastuse ja
 * kasutaja sisestatud arvu vahe on väiksem
 * või võrdne 5-ga, siis teavitatakse kasutajat, et ta on
 * õigele vastusele juba üsna lähedale jõudnud.
 *
 * Täineda programmi selliselt, et on kirjas, mitu katset
 * on sooritatud õige arvu leidmisel.
 * */
$katseteArv = $_POST['katseteArv'];
$serveriArv = $_POST['serveriArv'];
$katseteArv = (isset($katseteArv)) ? ++$katseteArv : 0;
$serveriArv = (isset($serveriArv)) ? $serveriArv : rand(1,50);
echo 'Arva ära number 1-50:<br />';
echo '
    <form action="'.$_SERVER['PHP_SELF'].'" method="post">
    <input type="text" name="kasutajaArv">
    <input type="submit" value="Kontrolli!">
    <input type="hidden" name="serveriArv" value="'.$serveriArv.'">
    <input type="hidden" name="katseteArv" value="'.$katseteArv.'">
    </form>
';

$kasutajaArv = $_POST['kasutajaArv'];
if(strlen($kasutajaArv) > 0){
    if($kasutajaArv > $serveriArv){
        echo 'Sinu arv on suurem kui välja mõeldud<br />';
    }
    if($kasutajaArv < $serveriArv){
        echo 'Sinu arv on väiksem kui välja mõeldud<br />';
    }
    if(abs($kasutajaArv - $serveriArv) <= 5){
        if($kasutajaArv == $serveriArv){
            echo 'Õige! Väljamõeldud arv oli '.$serveriArv.'<br />';
            echo 'Arvasid ära '.$katseteArv.' korraga<br />';
            exit;
        }
        echo 'Aga oled juba väga lähedal õigele vastusele!<br />';
    }
    $katseteArv++;
}
