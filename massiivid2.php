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
$massiiv = array(1,2,3,4,5);
valjastaMassiiv($massiiv);
echo '<hr />';

/*
 * 3.
 * Loo funktsioon nimega vahetaMinMax, mis võtab
 * parameetrina täisarvude massiivi (testimises
 * võib kasutada looMassiiv funktsiooniga
 * genereeritud massiiv)
 * ja leiab kõige väiksema ja kõige suurema
 * elemendi antud massiivis ning vahetab nende asukohad.
 *
 * Kontrolli kas kohad on vahetatud kasutades
 * valjastaMassiiv funktsiooni
*/

function vahetaMinMax($arvud){
    $min = min($arvud);
    $max = max($arvud);
    valjastaMassiiv($arvud);
    echo 'Miinimum = '.$min.'<br/>';
    echo 'Mmaksimum = '.$max.'<br />';
    for ($i = 0; $i < count($arvud); $i++){
            if ($arvud[$i] == $min){
                $arvud[$i] = $max;
            }else if($arvud[$i] == $max){
                $arvud[$i] = $min;
            }
        }
        valjastaMassiiv($arvud);
}
$array = array(213,141,41,1,51);
vahetaMinMax($array);
echo '<hr />';

/*
 * 4.
 * Loo funktsioon nimega elementideKorrutis, mis
 * võtab parameetrina täisarvude massiivi ja leiab
 * korrutis nendest arvudest, mis on suurem kui 0
 * ja mille indeksid on paarisarvud. Tulemus väljastatakse
 * antud funktsiooni abil kujul:
 *
 * Massiiv on 1, 0, 6, 0, 0, 3, 5
 * Tulemus: 1 * 6 * 5 = 30
*/

function elementideKorrutis($massiiv){
    $korrutis = 1;
    $i = 0;
    foreach ($massiiv as $item){
        $i++;
        if ($item > 0 and $massiiv[$i]%2 ==0){
            $korrutis = $korrutis * $item;

    }
    }echo $korrutis;
}
$massiiv = array(1, 0, 6, 0, 0, 3, 5);
elementideKorrutis($massiiv);
echo '<hr />';

/*
 * 5.
 * Töötluses kasutada massiiv
 * $massiiv = array(1, 1, 1, 2, 2, 2, 2, 3).
 * Loo funktsioon mitteDubleeri, mis võtab
 * parameetrina massiivi ja ei väljasta dubleeritud
 * elemendid. Ehk näidemassiivi puhul tuleb väljastada
 * ainult 1, 2, 3 - s.t. ilma dubleerimist.
 * NB! Lahenduses tuleb kasutada AINULT ÜKS foreach
 * tsükli abil, samuti EI SAA kasutada
 * grupeerimisfunktisoone ega muuta antud massiivi
 * */

function mitteDubleeri($massiiv){
    //$notDuubel = [];
    foreach (array_unique($massiiv) as $item){
            $notDuubel  = $item;
            echo $notDuubel;
    }
}
$massiiv2 = array(1, 1, 1, 2, 2, 2, 2, 3);
mitteDubleeri($massiiv2);

