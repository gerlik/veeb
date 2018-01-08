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