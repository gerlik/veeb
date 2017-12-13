<?php
/**
 * Created by PhpStorm.
 * User: Gerli
 * Date: 13/12/2017
 * Time: 14:12
 */
for ($i = 1; $kord <= 10; $kord++){
    if($kord % 2 ==0){
        $varv = 'red';
    }else {
        $varv = 'blue';
    }
    echo '<font color="'.$varv.'">'.$kord.'</font><br />';
    //echo $kord.'<br />';
}