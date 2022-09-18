<?php

/**
 * @author Vladimir Krstevski <vlade.piki23@hotmail.com>
 * @link 
 */

require_once "POJO/vraboteni.php";

class VraboteniDAO extends Vraboteni
{
    private $table_name="vraboteni";
    private $database=null;

    public function __construct($objDB)
    {
        $this->database=$objDB;
    }

    public function insertVraboteni()
    {
        $ime=parent::getIme();
        $prezime=parent::getPrezime();
        $grad=parent::getGrad();
        $plata=parent::getPlata();
        $columns_value="'$ime','$prezime','$grad',$plata";
        $this->database ->callStoredProcedure("_insert_vraboteni",$columns_value); 
    }

    public function deleteVraboteni()
    {
        $vraboteni_id=parent::getVraboteniID();
        $pk_value=$vraboteni_id;
        $this->database ->callStoredProcedure("_delete_vraboteni",$pk_value);  
    }

    public function selectVraboteni()
    {
        return $this->database ->selectRowStoredProcedure("_select_vraboteni");
    }

    public function updateVraboteni()
    {
        $vraboteni_id=parent::getVraboteniID();
        $ime=parent::getIme();  
        $prezime=parent::getPrezime();  
        $grad=parent::getGrad();   
        $plata=parent::getPlata();
        $columns="  ime='$ime',prezime='$prezime',grad='$grad',plata=$plata";
        $condition="vraboteni_id=$vraboteni_id";        
        $this->database->updateRow($this->table_name,$columns,$condition);
    }
}
