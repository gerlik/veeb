<?php
/**
 * Created by PhpStorm.
 * User: Gerli
 * Date: 08/01/2018
 * Time: 08:49
 */

$opilane = array(
    'eesnimi' => 'Mart',
    'perenimi' => 'Lepp',
    'vanus' => 16,
    'klass' => 10,
);
echo '<pre>';
print_r($opilane);
echo '</pre>';
echo '<hr />';

foreach ($opilane as $voti => $vaartus){
    echo $voti.' - '.$vaartus.'<br />';
};