<?php
/**
 * Created by PhpStorm.
 * User: Gerli
 * Date: 11/01/2018
 * Time: 12:17
 */

error_reporting(E_ALL);

$yhendus = mysql_connect('localhost', 'gerlikoiviktkhk',
    'UUR}QPTe}pco', 'gerlikoi_ABloeng');

if(!$yhendus){
    echo 'Probleem ühendusega';
    echo mysqli_connect_error($yhendus).'<br />';
    echo mysqli_connect_errno($yhendus).'<br />';
}else{
    echo 'On loodud ühendus<br />';
    $sql = 'INSERT INTO kasutajad(eesnimi, perenimi, synnikuupaev)'.
        'VALUES(\'Test\', \'Kasutaja\', \'1999-03-08\')';
}