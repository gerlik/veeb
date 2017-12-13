<?php
/**
 * Created by PhpStorm.
 * User: Gerli
 * Date: 13/12/2017
 * Time: 14:54
 */

//värviline tekst, isevärskendav leht
header("Refresh:2");
for($rida = 1; $rida <=5; $rida++){
    $varv = '#';
    for ($kord = 1; $kord <=6; $kord++){
        $juhuarv =  rand(0, 9);
        $varv = $varv.$juhuarv;
        //echo $varv.'<br />';
    }
    echo '<font color ="'.$varv.'">Värviline tekst</font><br/>';
}