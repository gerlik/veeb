<?php
/**
 * Created by PhpStorm.
 * User: Gerli
 * Date: 15/12/2017
 * Time: 08:48
 */


//funktsioon looTabel - tabeli loomine, parameetrid: ridade arv, veergude arv
//sisu: juhuslikud arvud, vahemik 10-99
function looTabel($ridadeArv,$veergudeArv){
    echo '<table border="1">';
    for ($reaNr = 1; $reaNr <= $ridadeArv; $reaNr++){
        echo '<tr>';
        for ($veeruNr = 1; $veeruNr <= $veergudeArv; $veeruNr++){
            echo '<td style="background-color: '.genereeriVarv().'">';
            echo rand(10,99);
            echo '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
}
looTabel(7,12);

//funktsioon genereeriVarv() genereerib juhusliku värvi #XXXXXX
//tagastab selle põhiskriptile, muudab tabeli pesa värviliseks

function genereeriVarv(){
    $varv = '#';
    for ($kord = 1; $kord <=6; $kord++){
        $juhuarv =  rand(0, 15);
        $juhuhex = dechex($juhuarv);
        $varv = $varv.$juhuhex;}
    return $varv;
}
genereeriVarv();