<?php

/**
 * @author Vladimir Krstevski <vlade.piki23@hotmail.com>
 * @link 
 */

require_once "POJO/prodazba.php";

class ProdazbaDAO extends Prodazba
{
    /**
     * Attributes class 
     * */
    private $table_name="prodazba";

    private $database=null;
    
    
    /**
     * Constructor Database 
     */
    public function __construct($objDB)
    {
        $this->database=$objDB;
    }
    
    /**
     * Methods
     */
    public function insertProdazba()
    {
        // TODO implement here
        $prodazba_id=parent::getProdazbaID();
        $prodazba_datum=parent::getProdazbaDatum();
        $promet=parent::getPromet();
        $prodadeno_kg=parent::getProdadenoKg();
        $rasipano_kg=parent::getRasipanoKg();
        $rabotnik_id=parent::getRabotnikID();

        $columns_name="prodazba_datum,promet,prodadeno_kg,rasipano_kg,rabotnik_id";
        $columns_value="'$prodazba_datum',$promet,$prodadeno_kg,$rasipano_kg,$rabotnik_id";

        $this->database->insertRow($this->table_name,$columns_name,$columns_value);//class database
    }

    /**
     * Methods
     */
    public function deleteProdazba()
    {
        // TODO implement here
        $prodazba_id=parent::getProdazbaID();

        $pk_name="prodazba_id";
        $pk_value="$prodazba_id";

        $this->database->deleteRow($this->table_name,$pk_name,$pk_value);//class database
    }

    /**
     * Methods
     */
    public function selectProdazba()
    {
        // TODO implement here
    }

    /**
     * Methods
     */
    public function updateProdazba()
    {
        // TODO implement here
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
        
        $this->database->updateRow($this->table_name,$columns,$condition);//class database

    }

}
