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
echo '<hr />';

$opilased = array(
    array(
        'eesnimi' => 'Mart',
        'perenimi' => 'Lepp',
        'vanus' => 16,
        'klass' => 10,
    ),
    array(
        'eesnimi' => 'Kadi',
        'perenimi' => 'Vaher',
        'vanus' => 15,
        'klass' => 9,
    ),
    array(
        'eesnimi' => 'Risto',
        'perenimi' => 'Tamm',
        'vanus' => 16,
        'klass' => 10,
    ),
);
echo '<pre>';
print_r($opilased);
echo '</pre>';
echo '<hr />';

foreach ($opilased as $opilane){
    foreach ($opilane as $voti => $vaartus){
        echo $voti.' - '.$vaartus.'<br />';
    }
    echo '--------'.'<br />';
};
echo '<hr />';

//sorts Kadi Mart Risto
sort($opilased);
foreach ($opilased as $opilane){
    foreach ($opilane as $voti => $vaartus){
        echo $voti.' - '.$vaartus.'<br />';
    }
    echo '--------'.'<br />';
};
echo '<hr />';

//asort_tähestikujäjrekorras, arsort_vastupidi
echo 'asort:'.'<br />';
foreach ($opilased as $opilane){
    asort($opilane);
    foreach ($opilane as $voti => $vaartus){
        echo $voti.' - '.$vaartus.'<br />';
    }
    echo '--------'.'<br />';
};
echo '<hr />';

//ksort
echo 'ksort:'.'<br />';
foreach ($opilased as $opilane){
    ksort($opilane);
    foreach ($opilane as $voti => $vaartus){
        echo $voti.' - '.$vaartus.'<br />';
    }
    echo '--------'.'<br />';
};
echo '<hr />';

/*
 * Defineeri raamatud kirjeldav massiiv kujul:
 * array(
 *      array(
 *          'title' => 'raamat',
 *          'author' => 'autor',
 *          'print' => 'trükikoda',
 *          'status' => 'seisund]'
 *      )
 * );
 * Loo funktsioon, mille parameetrina on raamatute
 * massiiv ja seisund, funktsioon tagastab massiivi,
 * kus on raamatud vastava seisundiga (seisund tähendab,
 * kas raamat on välja antud või mitte).
 *
 * Loo funktsioon, mis võtab parameetrina massiivi, ja
 * väljastab tulemused tabeli kujul. Tabeli pealkirjaks
 * on massiivi võtmed
 * */
echo '<hr />';
$raamatud =  array(
       array(
           'title' => 'Kõndimise Filosoofia',
           'author' => 'Frederic Gros',
           'print' => 'TLÜ Kirjastus',
           'status' => 'olemas'
      ),
    array(
        'title' => 'Võttes aega lihtsalt olemiseks',
        'author' => 'Helen Exley',
        'print' => 'Pegasus',
        'status' => 'välja laenutatud'
    ),
    array(
        'title' => 'Jaime Oliver. 5 koostisoas',
        'author' => 'Jaime Oliver',
        'print' => 'Pegasus',
        'status' => 'olemas'
    ),
    array(
        'title' => 'Valgus ja varjud',
        'author' => 'Tulihobu',
        'print' => 'Hea tegu',
        'status' => 'olemas'
    ),
    array(
        'title' => 'Sooda. 1001 võimalust',
        'author' => 'Alex Lefief-Delcourt',
        'print' => 'Koolibri',
        'status' => 'välja laenutatud'
    ),
);
function otsi($raamatud, $seisund){
    $leitud = array();
    foreach ($raamatud as $raamat){
        foreach ($raamat as $kirjeldus => $vaartus){
            if ($kirjeldus =='status' and $vaartus == $seisund){
                $leitud[] = $raamat;
            }
        }
    }
    return $leitud;
};
otsi($raamatud, 'olemas');
echo '<hr />';

function pealkiri($raamat){
    $pealkiri = array_keys($raamat);
    echo '<tr>';
    foreach ($pealkiri as $element){
        echo '<th>'.$element.'</th>';
    }
    echo '</tr>';
}
function tabeldaja($raamatud){
    $pealkiri = 0;
    echo '<table border="1">';
    foreach ($raamatud as $raamat){
        echo '<tr>';
        if ($pealkiri == 0){
            pealkiri($raamat);
            $pealkiri = 1;
        }
        foreach ($raamat as $info){
            echo '<td>'.$info.'</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
};
tabeldaja($raamatud);
echo '<hr />';

tabeldaja(otsi($raamatud, 'olemas'));
