<?php

/**
 * @author Vladimir Krstevski <vlade.piki23@hotmail.com>
 * @link https://www.linkedin.com/in/vladimir-krstevski-6182aa24b/
 */

require_once "POJO/vraboteni.php";

class VraboteniDAO extends Vraboteni
{
    private $table_name="vraboteni";
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
    public function insertVraboteni()
    {
        $ime=parent::getIme();
        $prezime=parent::getPrezime();
        $grad=parent::getGrad();
        $plata=parent::getPlata();
        $vraboteni_img_path=parent::getVraboteniImgPath();
        $columns_value="'$ime','$prezime','$grad',$plata,'$vraboteni_img_path'";
        $this->database ->callStoredProcedure("_insert_vraboteni",$columns_value); 
    }

    /**
     * @return [type]
     */
    public function deleteVraboteni()
    {
        $vraboteni_id=parent::getVraboteniID();
        $pk_value=$vraboteni_id;
        $this->database ->callStoredProcedure("_delete_vraboteni",$pk_value);  
    }

    /**
     * @return [type]
     */
    public function selectVraboteni()
    {
        return $this->database ->selectRowStoredProcedure("_select_vraboteni");
    }

    /**
     * @return [type]
     */
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
