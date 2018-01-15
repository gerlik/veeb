<?php
/**
 * Created by PhpStorm.
 * User: Gerli
 * Date: 15/01/2018
 * Time: 08:58
 */

require_once 'Tekst.php';

//loome reaalse objekti tekst.klassi abil
$minuTekst = new Tekst('Tere maailm!');
//tesotame testvaate entud objektist
echo '<pre>';
print_r($minuTekst);
echo '</pre>';