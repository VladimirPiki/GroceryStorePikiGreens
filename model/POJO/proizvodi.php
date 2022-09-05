<?php

/**
 * @author Vladimir Krstevski <vlade.piki23@hotmail.com>
 * @link 
 */

class Proizvodi 
{

    private  $proizvodi_id;

    private  $ime;

    private  $tip;

    private  $kg;

    private  $cena;

    private  $datum_priem;

    //constructors

    //getters,setters

    /**
     * @return int
     */
    public function getProizvodiID():int
    {
        // TODO implement here
        return $this->proizvodi_id;
    }

    /**
     * @param $proizvodi_id
     */
    public function setProizvodiID($proizvodi_id):void
    {
        // TODO implement here
        $this->proizvodi_id=$proizvodi_id;
    }

    /**
     * @return string
     */
    public function getIme():string
    {
        // TODO implement here
        return $this->ime;
    }

    /**
     * @param $ime
     */
    public function setIme($ime)
    {
        // TODO implement here
        $this->ime=$ime;
    }

    /**
     * @return string
     */
    public function getTip():string
    {
        // TODO implement here
        return $this->tip;
    }

    /**
     * @param $tip
     */
    public function setTip($tip):void
    {
        // TODO implement here
        $this->tip=$tip;
    }

    /**
     * @return int
     */
    public function getKg() : int
    {
        // TODO implement here
        return $this->kg;
    }

    /**
     * @param $kg
     */
    public function setKg($kg):void
    {
        // TODO implement here
        $this->kg=$kg;
    }

    /**
     * @return int
     */
    public function getCena()
    {
        // TODO implement here
        return $this->cena;
    }

    /**
     * @param $cena
     */
    public function setCena($cena):void
    {
        // TODO implement here
        $this->cena=$cena;
    }

    /**
     * @return string
     */
    public function getDatumPriem():string
    {
        // TODO implement here
        return $this->datum_priem;
    }

    /**
     * @param $datum_priem
     */
    public function setDatumPriem($datum_priem):void
    {
        // TODO implement here
        $this->datum_priem=$datum_priem;
    }

}
