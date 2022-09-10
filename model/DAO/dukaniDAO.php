<?php

/**
 * @author Vladimir Krstevski <vlade.piki23@hotmail.com>
 * @link 
 */

require_once "POJO/dukani.php";

class DukaniDAO extends Dukani
{
    /**
     * Attributes class 
     * */
    private $table_name="dukani";

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
    public function insertDukani()
    {
        // TODO implement here
        $adresa=parent::getAdresa();

        $telefon=parent::getTelefon();
        
        $grad=parent::getGrad();

        $columns_name="adresa,telefon,grad";
        $columns_value="'$adresa',$telefon,'$grad'";

        $this->database->insertRow($this->table_name,$columns_name,$columns_value);//class database
    }

    /**
     * Methods
     */
    public function deleteDukani()
    {
        // TODO implement here
        $dukani_id=parent::getDukaniID();

        $pk_name="dukani_id";
        $pk_value=$dukani_id;

        $this->database->deleteRow($this->table_name,$pk_name,$pk_value);//class database
    }

    /**
     * Methods
     */
    public function selectDukani()
    {
        // TODO implement here
        return $this->database ->selectRow($this->table_name);
    }

    /**
     * Methods
     */
    public function updateDukani()
    {
        // TODO implement here
        $dukani_id=parent::getDukaniID();
        $adresa=parent::getAdresa();
        $telefon=parent::getTelefon();
        $grad=parent::getGrad();

        $columns="adresa='$adresa',telefon=$telefon,grad='$grad'";

        $condition="dukani_id=$dukani_id";

        $this->database->updateRow($this->table_name,$columns,$condition);//class database
      
    }

}
