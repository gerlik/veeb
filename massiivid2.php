<?php
/**
 * Created by PhpStorm.
 * User: Gerli
 * Date: 20/12/2017
 * Time: 12:23
 */

//--------Ülesanne 1--
//funktsioon looMassiiv, parameeter massiivi elementide arv,
//juhuarvudest massiiv,
/*
 * 1.
 * Koosta funktsioon nimega looMassiiv,
 * mis võtab parameetrina massiivi elementide
 * arvu ja loob juhuarvudest (täisarvud)
 * vahemikust 100-999 koosneva massiivi.
 * Loodud massiiv tuleb tagastada
 * põhiprogrammile ja kontrollida sisu
 * testväljastuse abil - näiteks print_r
 * */

function looMassiiv($elemArv){
    $arvud = [];
    for ($kord = 0; $kord < $elemArv; $kord++) {
        $number = rand(100, 999);
        $arvud[] = $number;

    }
    echo '<pre>';
    print_r($arvud);
    echo '<pre />';
    return $arvud;
}
looMassiiv(5);
echo '<hr/>';

//--------Ülesanne 2--
/*
 * 2.
 * Loo funktsioon nimega valjastaMassiiv,
 * mis võtab parameetrina massiivi ja
 * väljastab tema elemendid
 * üheveerulise tabeli kujul
 * Väljundi loomisel kasutada foreach
 * tsükkel
 * */
function valjastaMassiiv($massiiv){
    echo '<table border="1">';
    foreach ($massiiv as $item){
            echo '<tr>';
            echo '<td>';
            echo $item;
            echo '</td>';
            echo '</tr>';
    }
    echo '</table>';
}
$massiiv = array(1,2,3,4,5,6,7,7);
valjastaMassiiv($massiiv);