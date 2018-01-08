<?php
/**
 * Created by PhpStorm.
 * User: Gerli
 * Date: 08/01/2018
 * Time: 12:56
 */

require_once 'raamat_vorm.php';

/*raamatuVorm();
$raamat = array(
    'title' => 'Valgus ja varjud',
    'author' => 'Tulihobu',
    'print' => 'Hea tegu',
    'status' => 'olemas'
);*/
$raamat = loeVormist();
salvestaRaamat($raamat, raamatud.txt);
loeAndmed('raamatud.txt');