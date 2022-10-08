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
    private $proizvodi_img_path;
    //constructors

    //getters,setters

    /**
     * @return int
     */
    public function getProizvodiID():int
    {
        return $this->proizvodi_id;
    }

    /**
     * @param $proizvodi_id
     */
    public function setProizvodiID($proizvodi_id):void
    {
        $this->proizvodi_id=$proizvodi_id;
    }

    /**
     * @return string
     */
    public function getIme():string
    {
        return $this->ime;
    }

    /**
     * @param $ime
     */
    public function setIme($ime)
    {
        $this->ime=$ime;
    }

    /**
     * @return string
     */
    public function getTip():string
    {
        return $this->tip;
    }

    /**
     * @param $tip
     */
    public function setTip($tip):void
    {
        $this->tip=$tip;
    }

    /**
     * @return int
     */
    public function getKg() : int
    {
        return $this->kg;
    }

    /**
     * @param $kg
     */
    public function setKg($kg):void
    {
        $this->kg=$kg;
    }

    /**
     * @return int
     */
    public function getCena()
    {
        return $this->cena;
    }

    /**
     * @param $cena
     */
    public function setCena($cena):void
    {
        $this->cena=$cena;
    }

    /**
     * @return string
     */
    public function getDatumPriem():string
    {
        return $this->datum_priem;
    }

    /**
     * @param $datum_priem
     */
    public function setDatumPriem($datum_priem):void
    {
        $this->datum_priem=$datum_priem;
    }

    public function getProizvodiImgPath():string
    {
        return $this->proizvodi_img_path;
    }

    public function setProizvodiImgPath($proizvodi_img_path)
    {
        $this->proizvodi_img_path=$proizvodi_img_path;
    }
}
