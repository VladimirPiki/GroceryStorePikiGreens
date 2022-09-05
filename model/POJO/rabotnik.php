<?php

/**
 * @author Vladimir Krstevski <vlade.piki23@hotmail.com>
 * @link 
 */

class Rabotnik
{
    //class attributes

    private  $rabotnik_id;

    private  $datum;

    private  $smena;

    private  $dukani_id;

    private  $vraboteni_id;

    //constructors

    //getters,setters

    /**
     * @return int
     */
    public function getRabotnikID():int
    {
        // TODO implement here
        return $this->rabotnik_id;
    }

    /**
     * @param $rabotnik_id
     */
    public function setRabotnikID($rabotnik_id):void
    {
        // TODO implement here
        $this->rabotnik_id=$rabotnik_id;
    }

    /**
     * @return string
     */
    public function getDatum():string
    {
        // TODO implement here
        return $this->datum;
    }

    /**
     * @param $datum
     */
    public function setDatum($datum)
    {
        // TODO implement here
        $this->datum=$datum;
    }

    /**
     * @return string
     */
    public function getSmena():string
    {
        // TODO implement here
        return $this->smena;
    }

    /**
     * @param $smena
     */
    public function setSmena($smena):void
    {
        // TODO implement here
        $this->smena=$smena;
    }

    /**
     * @return int
     */
    public function getDukaniID()
    {
        // TODO implement here
        return $this->dukani_id;
    }

    /**
     * @param $dukani_id
     */
    public function setDukaniID($dukani_id):void
    {
        // TODO implement here
        $this->dukani_id=$dukani_id;
    }

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

}
