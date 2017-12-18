<?php
/**
 * Created by PhpStorm.
 * User: Gerli
 * Date: 18/12/2017
 * Time: 12:02
 */

//fn nimega arvuSumma, parameeter suvaline nr
//$sum = $sum + $arv % 10;
function arvuSumma($number){
    $summa = 0;
    while ($number != 0){
        $arv = $number % 10;
        echo 'arv = '.$arv.'<br />';
        $number = $number / 10;
        echo 'number = '.$number.'<br / >';
        settype($number, 'integer');
        echo 'number = '.$number.'<br />';
    }
}
$nr = rand(11,14515);
arvuSumma($nr);
echo '<br />';
//echo 'Arvu '.$nr.' ristsumma on '.$summa;
