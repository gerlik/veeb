<?php
/**
 * Created by PhpStorm.
 * User: Gerli
 * Date: 08/01/2018
 * Time: 14:52
 */

date_default_timezone_set('Europe/Tallinn');
echo time().'<br />';
echo mktime(14,56,00, 01, 09,2018).'<br />';
$tana = date("H:i");
echo $tana.'<br />';


