<?php
/**
 * Created by PhpStorm.
 * User: Gerli
 * Date: 15/01/2018
 * Time: 08:58
 */

require_once 'Tekst.php';
require_once 'vtekst.php';

//loome reaalse objekti tekst.klassi abil
$minuTekst = new Tekst('Tere maailm!');
//teostame testvaate entud objektist
echo '<pre>';
print_r($minuTekst);
echo '</pre>';
//väljastus, objekti sone
$minuTekst->prindiTekst();
echo '<hr />';
//loome reaalse objekti vtekst abil
$punaneTekst = new vtekst('Punane tekst', '#FF0000');
echo '<pre>';
print_r($punaneTekst);
echo '</pre>';
//väljastus, objekti sone
$punaneTekst->prindiTekst();