<?php

/**
 * @author Vladimir Krstevski <vlade.piki23@hotmail.com>
 * @link 
 */

require_once "POJO/vraboteni.php";

class VraboteniDAO extends Vraboteni
{
    /**
     * Attributes class 
     * */
    private $table_name="vraboteni";

    /**
     * Attributes class database connection
     * */
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
    public function insertVraboteni()
    {
        // TODO implement here

        $ime=parent::getIme();
    
        $prezime=parent::getPrezime();
    
        $grad=parent::getGrad();
    
        $plata=parent::getPlata();

        
        $columns_name="ime,prezime,grad,plata";
        $columns_value="'$ime','$prezime','$grad',$plata";

        $this->database->insertRow($this->table_name,$columns_name,$columns_value);//class database
    }

    /**
     * Methods
     */
    public function deleteVraboteni()
    {
        // TODO implement here
        $vraboteni_id=parent::getVraboteniID();

        $pk_name="vraboteni_id";
        $pk_value=$vraboteni_id;

        $this->database->deleteRow($this->table_name,$pk_name,$pk_value);//class database
    }

    /**
     * Methods
     */
    public function selectVraboteni()
    {
        // TODO implement here
        return $this->database ->selectRow($this->table_name);
    }

    /**
     * Methods
     */
    public function updateVraboteni()
    {
        // TODO implement here
        $vraboteni_id=parent::getVraboteniID();

        $ime=parent::getIme();
    
        $prezime=parent::getPrezime();
    
        $grad=parent::getGrad();
    
        $plata=parent::getPlata();

        $columns="  ime='$ime',prezime='$prezime',grad='$grad',plata=$plata";

        $condition="vraboteni_id=$vraboteni_id";
        
        $this->database->updateRow($this->table_name,$columns,$condition);//class database

    }
    

}
