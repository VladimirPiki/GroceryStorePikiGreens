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
        private $dukani_img_path;
    //constructors

    //setters

    /**
     * @return
     */
    public function getDukaniID()
    {
        return $this->dukani_id;
    }

    /**
     * @param $dukani_id
     */
    public function setDukaniID($dukani_id)
    {
        $this->dukani_id=$dukani_id;
    }

    /**
     * @return 
     */
    public function getAdresa()
    {
        return $this->adresa;
    }

    /**
     * @param $adresa
     */
    public function setAdresa($adresa)
    {
        $this->adresa=$adresa;
    }

    /**
     * @return 
     */
    public function getTelefon()
    {
        return $this->telefon;
    }

    /**
     * @param $telefon
     */
    public function setTelefon($telefon)
    {
        $this->telefon=$telefon;
    }

    /**
     * @return 
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
     * @return [type]
     */
    public function getDukaniImgPath()
    {
        return $this->dukani_img_path;
    }

    /**
     * @param mixed $dukani_img_path
     * 
     * @return [type]
     */
    public function setDukaniImgPath($dukani_img_path)
    {
        $this->dukani_img_path=$dukani_img_path;
    }
}
