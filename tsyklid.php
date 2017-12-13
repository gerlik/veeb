<?php
/**
 * Created by PhpStorm.
 * User: Gerli
 * Date: 13/12/2017
 * Time: 14:12
 */

//for
for ($kord = 1; $kord <= 10; $kord++){
    if($kord % 2 == 0){
        $varv = 'red';
        break;
    }else {
        $varv = 'blue';
    }
    echo '<font color="'.$varv.'">'.$kord.'</font><br />';
}

//while
echo '<br />';
echo '<hr />';
$kord = 11;
while ($kord <= 10){
    echo '<i>'.$kord.'</i><br />';
    $kord++;

}

//do-while
echo '<hr />';
$kord = 11;
do {
    echo '<b>'.$kord.'</b><br />';
    $kord++;
}while($kord <= 10);

