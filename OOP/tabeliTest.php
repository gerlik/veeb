<?php
/**
 * Created by PhpStorm.
 * User: Gerli
 * Date: 15/01/2018
 * Time: 12:51
 */
require_once 'tabel.php';
//kirjelduse järgi tabeli objekt

$minuTabel = new tabel(array('a', 'b', 'c'));
$minuTabel = new tabel(array('a', 'b', 'c'));

// lisame tabeli readd
$minuTabel->lisaRida(array(1, 2, 3));
$minuTabel->lisaRida(array(4, 5, 6));
$minuTabel->lisaRida(array(7, 8, 9));
$minuTabel->lisaReaKirjeldusega(array('c'=>7,'a'=>8,'b'=>9));

// väljastame tabel testkujul
echo '<pre>';
print_r($minuTabel);
echo '</pre>';
$minuTabel->prindiTabel();
