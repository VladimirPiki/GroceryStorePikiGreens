<?php

/**
 * @author Vladimir Krstevski <vlade.piki23@hotmail.com>
 * @link 
 */

class Dukani 
{
    //class attributes
        private  $dukani_id;

        private  $adresa;

        private $telefon;
        
        private $grad;

    //constructors

    //setters

    /**
     * @return
     */
    public function getDukaniID()
    {
        // TODO implement here
        return $this->dukani_id;
    }

    /**
     * @param $dukani_id
     */
    public function setDukaniID($dukani_id)
    {
        // TODO implement here
        $this->dukani_id=$dukani_id;
    }

    /**
     * @return 
     */
    public function getAdresa()
    {
        // TODO implement here
        return $this->adresa;
    }

    /**
     * @param $adresa
     */
    public function setAdresa($adresa)
    {
        // TODO implement here
        $this->adresa=$adresa;
    }

    /**
     * @return 
     */
    public function getTelefon()
    {
        // TODO implement here
        return $this->telefon;
    }

    /**
     * @param $telefon
     */
    public function setTelefon($telefon)
    {
        // TODO implement here
        $this->telefon=$telefon;
    }

    /**
     * @return 
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

}
