<?php
/**
 * Created by PhpStorm.
 * User: Gerli
 * Date: 11/12/2017
 * Time: 10:17
 * Ülesanne: 6 muutujat
 */

//muutujad
$esimene = 5;
$teine = 5.0;
$kolmas = 2;
$neljas = 2.0;
$viies = '5';
$kuues ='2';
$seitsmes = true;
$kaheksas = false;

//tüübi kontroll gettype(var)
echo '$esimene = '.$esimene. ' - ' .gettype($esimene).'<br />';
echo '$teine = '.$teine. ' - ' .gettype($teine).'<br />';
echo '$kolmas = '.$kolmas. ' - ' .gettype($kolmas).'<br />';
echo '$neljas = '.$neljas. ' - ' .gettype($neljas).'<br />';
echo '$viies = '.$viies. ' - ' .gettype($viies).'<br />';
echo '$kuues = '.$kuues. ' - ' .gettype($kuues).'<br />';
echo '$seitsmes = '.$seitsmes. ' - ' .gettype($seitsmes).'<br />';
echo '$kaheksas = '.$kaheksas. ' - ' .gettype($kaheksas).'<br />';
echo '<hr>';
//funktsioon võrdlus
function vordlus($toevaartus){
    if($toevaartus == true){
        return ' - true';
    } else{
        return ' - false';
    }
}

//väljastus
echo $esimene .' == '.$teine.vordlus($esimene == $teine). '<br />';
echo $esimene .' == '.$viies.vordlus($esimene == $viies). '<br />';
echo $esimene .' === '.$viies.vordlus($esimene === $viies). '<br />';
echo '<hr>';
echo $esimene .' != '.$kolmas.vordlus($esimene != $kolmas). '<br />'; // 1 ja 3 !=
echo $esimene .' !== '.$viies.vordlus($esimene !== $viies). '<br />'; // 1 ja 5  !==
echo '<hr>';
echo $seitsmes .' == '.$kaheksas.vordlus($seitsmes == $kaheksas). '<br />';
echo $seitsmes .' != '.$kaheksas.vordlus($seitsmes != $kaheksas). '<br />';
echo '<hr>';

//matemaatilised operaatorid
//var++  var-- ++var --var
$a = 2;
$b = 5;
$c = $a++;
echo 'a = ' .$a. ' c = '.$c.'<br />';
$d = $b--;
echo 'b = ' .$b. ' d = '.$d.'<br />';
$c = ++$a;
echo 'a = ' .$a. ' c = '.$c.'<br />';
$d = --$b;
echo 'b = ' .$b. ' d = '.$d.'<br />';
echo '<hr>';

//konstant
//define()
define('AINE_NIMETUS', 'PHP ALUSED');
define('NUMBER', 1);
echo 'Aine nimetus: ' .AINE_NIMETUS. '<br />';
echo 'Number: ' .NUMBER . '<br />';
//suurenduse katsetus
//NUMBER++;  //ei toimi, konstantide väärtust ei saa muuta
