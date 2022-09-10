<?php

/**
 * @author Vladimir Krstevski <vlade.piki23@hotmail.com>
 * @link 
 */

require_once "POJO/proizvodi.php";

class ProizvodiDAO extends Proizvodi
{
    /**
     * Attributes class 
     * */
    private $table_name="proizvodi";

    private $database=null;


    /**
     * Database constructor
     */
    public function __construct($objDB)
    {
        $this->database=$objDB;
    }

    /**
     * Methods
     */
    public function insertProizvodi()
    {
        // TODO implement heres
        $ime=parent::getIme();
        $tip=parent::getTip();
        $kg=parent::getKg();
        $cena=parent::getCena();
        $datum_priem=parent::getDatumPriem();

        $columns_name="ime,tip,kg,cena,datum_priem";
        $columns_value="'$ime','$tip',$kg,$cena,'$datum_priem'";

        $this->database->insertRow($this->table_name,$columns_name,$columns_value);//class database

    }

    /**
     * Methods
     */
    public function deleteProizvodi()
    {
        // TODO implement here
        $proizvodi_id=parent::getProizvodiID();

        $pk_name="proizvodi_id";
        $pk_value=$proizvodi_id;

        $this->database->deleteRow($this->table_name,$pk_name,$pk_value);//class database
    }

    /**
     * Methods
     */
    public function selectProizvodi()
    {
        // TODO implement here
        return $this->database ->selectRow($this->table_name);
    }

    /**
     * Methods
     */
    public function updateProizvodi()
    {
        // TODO implement here
        $proizvodi_id=parent::getProizvodiID();
        $ime=parent::getIme();
        $tip=parent::getTip();
        $kg=parent::getKg();
        $cena=parent::getCena();
        $datum_priem=parent::getDatumPriem();

        $columns="ime='$ime',tip='$tip',kg=$kg,cena=$cena,datum_priem='$datum_priem'";
        
        $condition="proizvodi_id=$proizvodi_id";
        
        $this->database->updateRow($this->table_name,$columns,$condition);//class database
    }

}
