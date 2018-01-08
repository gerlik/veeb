<?php
/**
 * Created by PhpStorm.
 * User: Gerli
 * Date: 08/01/2018
 * Time: 12:37
 */

function raamatuVorm(){
    echo '
        <form action="'.$_SERVER['PHP_SELF'].'" method="post">
            Pealkiri: <input type="text" name="title"><br />
            Autor: <input type="text" name="author"><br />
            Trükikoda: <input type="text" name="print"><br />
            Seisund: <input type="text" name="status"><br />
            <input type="submit" value="Salvesta!">
        </form>  
    ';
}

function loeVormist(){
    raamatuVorm();
    $raamat = array();
    if(count($_POST) > 0){
        foreach ($_POST as $voti => $vaartus){
            if(strlen($vaartus) == 0){
                echo 'Kõik väljad peavad olema täidetud<br />';
                exit;
            }
            $raamat[$voti] = $vaartus;
        }
    }
    return $raamat;
};
//Salvestab raamatud faili
function salvestaRaamat($raamat, $fail){
    if (file_exists($fail) and is_file($fail) and is_writable($fail)){
        $failpointer = fopen($fail, 'a') or die('Probleem faili avamisega');
        foreach ($raamat as $element){
            fwrite($failpointer, $element."\n");
        }
        fwrite($failpointer, "-----\n");
        fclose($failpointer);
        echo 'Andmed on sisestatud<br />';
    }else{
        echo 'Probleem failiga '.$fail.'<br />';
    }
}

function loeAndmed($fail){
    if (file_exists($fail) and is_file($fail) and is_readable($fail)) {
        $fail = fopen($fail, 'r');
        echo '<table border="1">';
            echo '<tr>';
                echo '<th>Pealkiri</th>';
                echo '<th>Autor</th>';
                echo '<th>Trükikoda</th>';
                echo '<th>Seisund</th>';
            echo '</tr>';
            echo '<tr>';
            while (! feof($fail)){
                $rida = fgets($fail);
                if ($rida != "-----\n"){
                    echo '<td>'.$rida.'</td>';
                }else {
                    echo '</tr>';
                }
            }
            echo '</table>';
            fclose($fail);
    }
};