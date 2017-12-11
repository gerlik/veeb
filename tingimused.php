<?php
/**
 * Created by PhpStorm.
 * User: Gerli
 * Date: 11/12/2017
 * Time: 11:06
 * php.net
 * Ülesanne:
 */


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