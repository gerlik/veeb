<?php
/**
 * Created by PhpStorm.
 * User: Gerli
 * Date: 11/12/2017
 * Time: 11:06
 * php.net
 * Ülesanne:
 */

//header("Refresh:3");
$vanus = rand(0, 100);
if($vanus >= 0 and $vanus < 11){
    echo 'Oled laps: '.$vanus.'<br />';
} elseif ($vanus >10 and $vanus <18){
    echo 'Oled noor inimene: '.$vanus.'<br />';
}elseif ($vanus >17 and $vanus < 66){
    echo 'Oled täiskasvanu: '.$vanus.'<br />';
}else {
    echo 'Oled seenior: '.$vanus.'<br />';
}
echo '<br />';

//switchi katsetus
$sokolaad = 'Kalev';
switch ($sokolaad){
    case 'Kalev':
        echo 'Kalevi sokolaad';
        break;
    case 'Kinder':
        echo 'Lastele meeldib';
        break;
    default:
        echo 'Sobib, kui muud pole';
}
echo '<br />';

//ternary operaator
$pidu = 'halb';
$yrr = ($pidu == 'hea') ? 'lähme peole' : 'oleme kodus';
echo $yrr.'<br />';