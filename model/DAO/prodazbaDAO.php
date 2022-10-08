<?php

/**
 * @author Vladimir Krstevski <vlade.piki23@hotmail.com>
 * @link https://www.linkedin.com/in/vladimir-krstevski-6182aa24b/
 */

require_once "POJO/prodazba.php";

class ProdazbaDAO extends Prodazba
{
    private $table_name="prodazba";
    private $database=null;
    
    /**
     * @param mixed $objDB
     */
    public function __construct($objDB)
    {
        $this->database=$objDB;
    }

    /**
     * @return [type]
     */
    public function insertProdazba()
    {
        $prodazba_datum=parent::getProdazbaDatum();
        $promet=parent::getPromet();
        $prodadeno_kg=parent::getProdadenoKg();
        $rasipano_kg=parent::getRasipanoKg();
        $rabotnik_id=parent::getRabotnikID();
        $columns_value="'$prodazba_datum',$promet,$prodadeno_kg,$rasipano_kg,$rabotnik_id";
        $this->database ->callStoredProcedure("_insert_prodazba",$columns_value); 
    }

    /**
     * @return [type]
     */
    public function deleteProdazba()
    {
        $prodazba_id=parent::getProdazbaID();
        $pk_value="$prodazba_id";
        $this->database ->callStoredProcedure("_delete_prodazba",$pk_value); 
    }

    /**
     * @return [type]
     */
    public function selectProdazba()
    {
        return $this->database ->selectRowStoredProcedure("_select_prodazba_nova");
    }

    /**
     * @return [type]
     */
    public function updateProdazba()
    {
        $prodazba_id=parent::getProdazbaID();
        $prodazba_datum=parent::getProdazbaDatum();
        $promet=parent::getPromet();
        $prodadeno_kg=parent::getProdadenoKg();
        $rasipano_kg=parent::getRasipanoKg();
        $rabotnik_id=parent::getRabotnikID();
        $columns="  prodazba_datum='$prodazba_datum',
        promet=$promet,
        prodadeno_kg=$prodadeno_kg,
        rasipano_kg=$rasipano_kg,
        rabotnik_id=$rabotnik_id";
        $condition="prodazba_id=$prodazba_id";
        $this->database->updateRow($this->table_name,$columns,$condition);
    }

}
