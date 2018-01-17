<?php
/**
 * Created by PhpStorm.
 * User: Gerli
 * Date: 17/01/2018
 * Time: 09:38
 */
require_once 'tabel.php';
class htmlTabel extends tabel
{
    var $taustaVarv = '';

    public function __construct(array $pealkirjad, $taustaVarv)
    {
        parent::__construct($pealkirjad);
        $this->setTaustaVarv($taustaVarv);
    }
    /**
     * htmlTabel constructor.
     * @param string $taustaVarv
     */
    public function setTaustaVarv($taustaVarv)
    {
        $this->taustaVarv = $taustaVarv;
    }

    function prindiTabel(){
        echo '<table border="1">';
        echo '<tr>';
        foreach ($this->pealkirjad as $pealkiri) {
            echo '<th bgcolor="'.$this->taustaVarv.'">'.$pealkiri.'</th>';
        }
        echo '</tr>';
        foreach ($this->tabeliSisu as $reaNumber => $reaAndemd) {
            echo '<tr>';
            foreach ($reaAndemd as $reaElement){
                echo '<th bgcolor="'.$this->taustaVarv.'">'.$pealkiri.'</th>';
            }
            echo '</tr>';
        }
        echo '</table>';
    }
}