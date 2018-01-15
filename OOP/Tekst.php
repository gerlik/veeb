<?php
/**
 * Created by PhpStorm.
 * User: IBM
 * Date: 15/01/2018
 * Time: 08:52
 */

class Tekst
{
    //klassi omadus(ed)
    //class variables
    var $sone = '';

    /**
     * Tekst constructor.
     */
    public function __construct($s)
    {
        $this->määraTekst($s);
    }
    //klassi tegevused
    //klassi meetod
    //klassi konstruktor

    //teksti määramine
    function määraTekst($s){
        $this->sone = $s;
    }
    function prindiTekst(){
        echo $this->sone.'<br />';
    }
}