<?php

/**
 * @author Vladimir Krstevski <vlade.piki23@hotmail.com>
 * @link 
 */

require_once "POJO/proizvodi.php";

class ProizvodiDAO extends Proizvodi
{
    private $table_name="proizvodi";

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
    public function insertProizvodi()
    {
        $ime=parent::getIme();
        $tip=parent::getTip();
        $kg=parent::getKg();
        $cena=parent::getCena();
        $datum_priem=parent::getDatumPriem();
        $columns_value="'$ime','$tip',$kg,$cena,'$datum_priem'";
        $this->database ->callStoredProcedure("_insert_proizvodi",$columns_value); 
    }

    /**
     * @return [type]
     */
    public function deleteProizvodi()
    {
        $proizvodi_id=parent::getProizvodiID();
        $pk_value=$proizvodi_id;
        $this->database ->callStoredProcedure("_delete_proizvodi",$pk_value); 
    }

    /**
     * @return [type]
     */
    public function selectProizvodi()
    {
        return $this->database ->selectRowStoredProcedure("_select_proizvodi");
    }

    /**
     * @return [type]
     */
    public function updateProizvodi()
    {
        $proizvodi_id=parent::getProizvodiID();
        $ime=parent::getIme();
        $tip=parent::getTip();
        $kg=parent::getKg();
        $cena=parent::getCena();
        $datum_priem=parent::getDatumPriem();
        $columns="ime='$ime',tip='$tip',kg=$kg,cena=$cena,datum_priem='$datum_priem'";    
        $condition="proizvodi_id=$proizvodi_id";
        $this->database->updateRow($this->table_name,$columns,$condition);
    }

}
