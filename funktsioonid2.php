<?php
/**
 * Created by PhpStorm.
 * User: Gerli
 * Date: 18/12/2017
 * Time: 12:02
 */

//fn nimega arvuSumma, parameeter suvaline nr;
function arvuSumma($number){
    $summa = 0;
    while ($number != 0){
        $arv = $number % 10;
        $summa = $summa +$arv;
        $number = $number / 10;
        settype($number, 'integer');
    }
    return $summa;
}
for ($kord = 1; $kord <= 5; $kord++){
    $number = rand(11,1795);
    echo 'Arvu '.$number.' ristsumma on '.arvuSumma($number).'<br />';
}
echo '<hr>';

//funktsioon otsiNumber, parameetriks suvaline arv, kindel arv, mitu korda esineb kindel arv suvalises arvus
function otsiNumber($suvalineArv, $kindelArv){
    echo $kindelArv.' esineb numbris '.$suvalineArv;
    $luger = 0;
    while ($suvalineArv != 0){
        $arv = $suvalineArv % 10;
        if ($arv == $kindelArv){
            $luger++;
        }
        $suvalineArv = $suvalineArv /10;
        settype($suvalineArv, 'integer');
    }
    echo ' '.$luger.' korda'.'<br />';
}
otsiNumber(15151, 5);
otsiNumber(15151, 1);
otsiNumber(15151, 7);