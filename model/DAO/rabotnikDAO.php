<?php

/**
 * @author Vladimir Krstevski <vlade.piki23@hotmail.com>
 * @link 
 */

require_once "POJO/rabotnik.php";

class RabotnikDAO extends Rabotnik
{
    
    /**
     * Attributes class 
     * */
    private $table_name="rabotnik";

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
    public function insertRabotnik()
    {
        // TODO implement here
 
        $datum=parent::getDatum();
    
        $smena=parent::getSmena();
    
        $dukani_id=parent::getDukaniID();
    
        $vraboteni_id=parent::getVraboteniID();

        $columns_name="datum,smena,dukani_id,vraboteni_id";
        $columns_value="'$datum','$smena',$dukani_id,$vraboteni_id";

        $this->database->insertRow($this->table_name,$columns_name,$columns_value);//class database
    }

    /**
     * Methods
     */
    public function deleteRabotnik()
    {
        // TODO implement here
        $rabotnik_id=parent::getRabotnikID();

        $pk_name="rabotnik_id";
        $pk_value=$rabotnik_id;

        $this->database->deleteRow($this->table_name,$pk_name,$pk_value);//class database
    }

    /**
     * 
     */
    public function selectRabotnik()
    {
        // TODO implement here
    }

    /**
     * Methods
     */
    public function updateRabotnik()
    {
        // TODO implement here
        $rabotnik_id=parent::getRabotnikID();

        $datum=parent::getDatum();
    
        $smena=parent::getSmena();
    
        $dukani_id=parent::getDukaniID();
    
        $vraboteni_id=parent::getVraboteniID();


        $columns="datum='$datum',smena='$smena',dukani_id=$dukani_id,vraboteni_id=$vraboteni_id";
        
        $condition="rabotnik_id=$rabotnik_id";
        
        $this->database->updateRow($this->table_name,$columns,$condition);//class database
    }

}
