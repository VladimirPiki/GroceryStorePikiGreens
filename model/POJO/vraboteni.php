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

    //constructors

    //getters,setters

    /**
     * @return int
     */
    public function getVraboteniID()
    {
        // TODO implement here
        return $this->vraboteni_id;
    }

    /**
     * @param $vraboteni_id
     */
    public function setVraboteniID($vraboteni_id)
    {
        // TODO implement here
        $this->vraboteni_id=$vraboteni_id;
    }

    /**
     * @return string
     */
    public function getIme()
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
    public function getPrezime()
    {
        // TODO implement here
        return $this->prezime;
    }

    /**
     * @param $prezime
     */
    public function setPrezime($prezime)
    {
        // TODO implement here
        $this->prezime=$prezime;
    }

    /**
     * @return string
     */
    public function getGrad()
    {
        // TODO implement here
        return $this->grad;
    }

    /**
     * @param $grad
     */
    public function setGrad($grad)
    {
        // TODO implement here
        $this->grad=$grad;
    }

    /**
     * @return int
     */
    public function getPlata()
    {
        // TODO implement here
        return $this->plata;
    }

    /**
     * @param $plata
     */
    public function setPlata($plata)
    {
        // TODO implement here
        $this->plata=$plata;
    }

}
