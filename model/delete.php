<?php

/**
 * @author Vladimir Krstevski <vlade.piki23@hotmail.com>
 * @link https://www.linkedin.com/in/vladimir-krstevski-6182aa24b/
 */

//
$data = json_decode(file_get_contents("php://input"));
var_dump($data);

require_once "../lib/class_database_piljara.php";
//           class name    __construct
$objDB = new   DB            ();

//za koja tabela se raboti

$table_name=$data[0]->table_name;
$pk_value=$data[0]->pk_value;

switch ($table_name){

    case "dukani":
        require_once "DAO/dukaniDAO.php";//file path 

        //Database connection
        $objDukani = new DukaniDAO($objDB);

        //setters POJO
        $objDukani->setDukaniID($data[0]->pk_value);

        //DAO
        $objDukani->deleteDukani();

    break;

    case "prodazba":
        require_once "DAO/prodazbaDAO.php";//file path
        
        //Database connection
        $objProdazba= new ProdazbaDAO($objDB);

        //setters POJO
        $objProdazba->setProdazbaID($data[0]->pk_value);

        //DAO
        $objProdazba->deleteProdazba();
    break;

    case "proizvodi":
        require_once "DAO/proizvodiDAO.php";//file path
        
        //Database connection
        $objProizvodi = new ProizvodiDAO($objDB);

        //setters POJO
        $objProizvodi ->setProizvodiID($data[0]->pk_value);

        //DAO
        $objProizvodi -> deleteProizvodi();
    break;

    case "rabotnik":
        require_once "DAO/rabotnikDAO.php";//file path
       
        //Database connection
        $objRabotnik= new RabotnikDAO($objDB);

        //setters POJO
        $objRabotnik ->setRabotnikID($data[0]->pk_value);

        //DAO
        $objRabotnik ->deleteRabotnik();
    break;

    case "vraboteni":
        require_once "DAO/vraboteniDAO.php";//file path
        
        //Database connection
        $objVraboteni = new VraboteniDAO($objDB);

        //setters POJO
        $objVraboteni ->setVraboteniID($data[0]->pk_value);

        //DAO
        $objVraboteni ->deleteVraboteni();
    break;

    default :
    echo "Погрешно име на табела ";
    break;

}
?>