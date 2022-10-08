<?php

/**
 * @author Vladimir Krstevski <vlade.piki23@hotmail.com>
 * @link 
 */

class Vraboteni 
{
    //class attributes
    private  $vraboteni_id;
    private  $ime;
    private  $prezime;
    private  $grad;
    private  $plata;
    private  $vraboteni_img_path;
    //constructors

    //getters,setters

    /**
     * @return int
     */
    public function getVraboteniID()
    {
        return $this->vraboteni_id;
    }

    /**
     * @param $vraboteni_id
     */
    public function setVraboteniID($vraboteni_id)
    {
        $this->vraboteni_id=$vraboteni_id;
    }

    /**
     * @return string
     */
    public function getIme()
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
    public function getPrezime()
    {
        return $this->prezime;
    }

    /**
     * @param $prezime
     */
    public function setPrezime($prezime)
    {
        $this->prezime=$prezime;
    }

    /**
     * @return string
     */
    public function getGrad()
    {
        return $this->grad;
    }

    /**
     * @param $grad
     */
    public function setGrad($grad)
    {
        $this->grad=$grad;
    }

    /**
     * @return int
     */
    public function getPlata()
    {
        return $this->plata;
    }

    /**
     * @param $plata
     */
    public function setPlata($plata)
    {
        $this->plata=$plata;
    }

    public function getVraboteniImgPath()
    {
        return $this->vraboteni_img_path;
    }

    public function setVraboteniImgPath($vraboteni_img_path)
    {
        $this->vraboteni_img_path=$vraboteni_img_path;
    }
}
