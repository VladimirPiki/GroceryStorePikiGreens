<?php

/**
 * @author Vladimir Krstevski <vlade.piki23@hotmail.com>
 * @link 
 */

require_once "POJO/dukani.php";

class DukaniDAO extends Dukani
{

    private $table_name="dukani";
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
    public function insertDukani()
    {
        $adresa=parent::getAdresa();
        $telefon=parent::getTelefon();
        $grad=parent::getGrad();
        $columns_value="'$adresa',$telefon,'$grad'";
        $this->database ->callStoredProcedure("_insert_dukani",$columns_value);  
    }


    /**
     * @return [type]
     */
    public function deleteDukani()
    {
        $dukani_id=parent::getDukaniID();
        $pk_value=$dukani_id;
        $this->database ->callStoredProcedure("_delete_dukani",$pk_value);  
    }

    /**
     * @return [type]
     */
    public function selectDukani()
    {
        return $this->database ->selectRowStoredProcedure("_select_dukani");
    }

    /**
     * @return [type]
     */
    public function updateDukani()
    {
        $dukani_id=parent::getDukaniID();
        $adresa=parent::getAdresa();
        $telefon=parent::getTelefon();
        $grad=parent::getGrad();
        $columns="adresa='$adresa',telefon=$telefon,grad='$grad'";
        $condition="dukani_id=$dukani_id";
        $this->database->updateRow($this->table_name,$columns,$condition);//class database
    }

}
