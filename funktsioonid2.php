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
$number = rand(11,14515);
echo 'Arvu '.$number.' ristsumma on '.arvuSumma($number).'<br />';
