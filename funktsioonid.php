<?php
/**
 * Created by PhpStorm.
 * User: Gerli
 * Date: 15/12/2017
 * Time: 08:48
 */


//tabeli loomine, parameetrid: ridade arv, veergude arv
//sisu: juhuslikud arvud, vahemik 10-99
function looTabel($ridadeArv,$veergudeArv){
    echo '<table border="1">';
    for ($reaNr = 1; $reaNr <= $ridadeArv; $reaNr++){
        echo '<tr>';
        for ($veeruNr = 1; $veeruNr <= $veergudeArv; $veeruNr++){
            echo '<td>';
            echo rand(10,99);
            echo '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
}
looTabel(7,12);