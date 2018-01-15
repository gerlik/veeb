<?php
/**
 * Created by PhpStorm.
 * User: Gerli
 * Date: 15/01/2018
 * Time: 12:25
 */

class tabel
{
    //klassi muutujad
    var $tabeliSisu = array();
    var $pealkirjad = array();
    var $veergudearv;

    //klassi meetodid
    /**
     * tabel constructor.
     * @param array $pealkirjad
     */
    public function __construct(array $pealkirjad)
    {
        $this->pealkirjad = $pealkirjad;
        $this->veergudearv = count($pealkirjad);
    }
    function lisaRida($rida){
        if(count($rida) != $this->veergudearv){
            return false;
        }
    }

}

