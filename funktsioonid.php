<?php
/**
 * Created by PhpStorm.
 * User: Gerli
 * Date: 15/12/2017
 * Time: 08:48
 */


//funktsioon looTabel - tabeli loomine, parameetrid: ridade arv, veergude arv
//sisu: juhuslikud arvud, vahemik 10-99
//automaatne refresh
//header("Refresh:0.2");
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

//funktsioon tabelTekst
//parameetrid: 4 sõna
//väljastan 4realise tabeli, mille pesades parameetrid

echo '<hr >';
function tabelTekst($sona1, $sona2, $sona3, $sona4){
    $sonad = array($sona1,$sona2,$sona3,$sona4);
    echo '<table border="1">';
    for ($reaNr = 0; $reaNr <= 3; $reaNr++){
        echo '<tr>';
            echo '<td>';
                echo $sonad[$reaNr];
                //või, ja muuta tsüklipäises $reaNr = 1 ja $reaNr <= 4
                //echo ${'sona'.$reaNr};
            echo '</td>';
        echo '</tr>';
    }
    echo '</table>';
}
tabelTekst('see', 'on', 'väike', 'tabel');