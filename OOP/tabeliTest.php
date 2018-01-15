<?php
/**
 * Created by PhpStorm.
 * User: Gerli
 * Date: 15/01/2018
 * Time: 12:51
 */
require_once 'tabel.php';
//kirjelduse järgi tabeli objeskt
$minuTabel = new tabel(array('a', 'b', 'c'));
// väljastame tabel test kujul
echo '<pre>';
print_r($minuTabel);
echo '</pre>';
