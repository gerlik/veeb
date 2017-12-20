<?php
/**
 * Created by PhpStorm.
 * User: Gerli
 * Date: 20/12/2017
 * Time: 12:02
 */

$arvud = array(1, 5, 15 ,15, 1, 51);
var_dump($arvud);
echo '<hr />';
echo '<pre>';
print_r($arvud);
echo '<pre />';
echo '<hr />';

//-------tsüklid------
for ($i = 0; $i < count($arvud); $i++){
    echo '<b>'.$arvud[$i].'</b><br />';
}
echo '<hr />';
foreach ($arvud as $arv){
    echo '<i>'.$arv.'<i/><br />';
}
echo '<hr />';
//--------------------

$arvud[] = 6;
foreach ($arvud as $arv){
    echo '<i>'.$arv.'<i/><br />';
}
echo '<hr />';

$arvud[0] = 7;
foreach ($arvud as $arv){
    echo '<i>'.$arv.'<i/><br />';
}
echo '<hr />';