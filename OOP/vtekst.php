<?php
/**
 * Created by PhpStorm.
 * User: Gerli
 * Date: 17/01/2018
 * Time: 08:43
 */
require_once 'Tekst.php'; //klassi laiendamine
class vtekst extends Tekst
{
    //klassi omadused
    var $varv = '';

    /**
     * vtekst constructor.
     * @param string $varv
     */
    public function __construct($s = '', $v = '')
    {
        parent::määraTekst($s); //Tekst klassist kutsutud määraTekst
        $this->maaraVarv($v); //käsitsi loodud setter
    }

    function maaraVarv($v){
        $this->varv= $v;
    }

    function prindiTekst()
    {
        if ($this->varv == ''){
            parent::prindiTekst(); //
        }else{
            echo '<font color="'.$this->varv.'">'.$this->sone.'</font><br />';
        }
    }
}