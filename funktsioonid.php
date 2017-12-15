<?php
/**
 * Created by PhpStorm.
 * User: Gerli
 * Date: 15/12/2017
 * Time: 08:48
 */


//tabeli loomine, parameetrid: ridade arv, veergude arv
//sisu: juhuslikud arvud, vahemik 10-99
function looTabel($ridadeArv,$veergudearv){
    echo '<table border="1">';
    for ($reanr = 1; $reanr <= $ridadeArv; $reanr++){
        echo '<tr>';
        for ($veerunr = 1; $veerunr <= $veergudearv; $veerunr++){
            echo '<td>';
            echo rand(10,99);
            echo '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
}
looTabel(7,12);