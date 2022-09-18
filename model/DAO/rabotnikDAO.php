<?php

/**
 * @author Vladimir Krstevski <vlade.piki23@hotmail.com>
 * @link 
 */

require_once "POJO/rabotnik.php";

class RabotnikDAO extends Rabotnik
{
    private $table_name="rabotnik";
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
    public function insertRabotnik()
    {
        $datum=parent::getDatum();
        $smena=parent::getSmena();
        $dukani_id=parent::getDukaniID();
        $vraboteni_id=parent::getVraboteniID();
        $columns_value="'$datum','$smena',$dukani_id,$vraboteni_id";
        $this->database ->callStoredProcedure("_insert_rabotnik",$columns_value); 
    }

    /**
     * @return [type]
     */
    public function deleteRabotnik()
    {
        $rabotnik_id=parent::getRabotnikID();
        $pk_value=$rabotnik_id;
        $this->database ->callStoredProcedure("_delete_rabotnik",$pk_value); 
    }

    /**
     * @return [type]
     */
    public function selectRabotnik()
    {
        return $this->database ->selectRowStoredProcedure("_select_rabotnik");
    }

    /**
     * @return [type]
     */
    public function updateRabotnik()
    {
        $rabotnik_id=parent::getRabotnikID();
        $datum=parent::getDatum();
        $smena=parent::getSmena();
        $dukani_id=parent::getDukaniID();
        $vraboteni_id=parent::getVraboteniID();
        $columns="datum='$datum',smena='$smena',dukani_id=$dukani_id,vraboteni_id=$vraboteni_id";   
        $condition="rabotnik_id=$rabotnik_id";
        $this->database->updateRow($this->table_name,$columns,$condition);
    }
}
