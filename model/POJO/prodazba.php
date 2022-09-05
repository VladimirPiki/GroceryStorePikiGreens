<?php

/**
 * @author Vladimir Krstevski <vlade.piki23@hotmail.com>
 * @link 
 */

class Prodazba{

    // Nadolu se Class attributes
    /**
     * Class attributes
     */
    private $prodazba_id;
    /**
     * Class attributes
     */
    private $prodazba_datum;

    /**
     * Class attributes
     */
    private $promet;

    /**
     * Class attributes
     */
    private $prodadeno_kg;

    /**
     * Class attributes
     */
    private $rasipano_kg;

    /**
     * Class attributes
     */
    private $rabotnik_id;

    //Constructors

    //Setters ovie nadolu

    /**
     * @param  $prodazba_id
     */
    public function setProdazbaID($prodazba_id)
    {
        // TODO implement here
        $this->prodazba_id=$prodazba_id;
    }

    /**
     * @param  $prodazba_datum
     */
    public function setProdazbaDatum($prodazba_datum)
    {
        // TODO implement here
        $this->prodazba_datum=$prodazba_datum;
    }

    /**
     * @param  $promet
     */
    public function setPromet($promet)
    {
        // TODO implement here
        $this->promet=$promet;
    }

    /**
     * @param  $prodadeno_kg
     */
    public function setProdadenoKg($prodadeno_kg)
    {
        // TODO implement here
        $this->prodadeno_kg=$prodadeno_kg;
    }

    /**
     * @param  $rasipano_kg
     */
    public function setRasipanoKg($rasipano_kg)
    {
        // TODO implement here
        $this->rasipano_kg=$rasipano_kg;
    }

    /**
     * @param  $rabotnik_id
     */
    public function setRabotnikID($rabotnik_id)
    {
        // TODO implement here
        $this->rabotnik_id=$rabotnik_id;
    }

    //Ovie nadolu se Getters

    /**
    * @return
    */
    public function getProdazbaID()
    {
        // TODO implement here
        return $this->prodazba_id;
    }

    /**
    * @return
    */
    public function getProdazbaDatum()
    {
        // TODO implement here
        return $this->prodazba_datum;
    }
    /**
    * @return
    */
    public function getPromet()
    {
        // TODO implement here
        return $this->promet;
    }
    /**
    * @return
    */
    public function getProdadenoKg()
    {
        // TODO implement here
        return $this->prodadeno_kg;
    }
    /**
    * @return
    */
    public function getRasipanoKg()
    {
        // TODO implement here
        return $this->rasipano_kg;
    }
    /**
    * @return
    */
    public function getRabotnikID()
    {
        // TODO implement here
        return $this->rabotnik_id;
    }
}
?>