<?php

/**
 * @author Vladimir Krstevski <vlade.piki23@hotmail.com>
 * @link 
 */

require_once "../lib/class_database_piljara.php";
//           class name    __construct
$objDB = new   DB            ();

//za koja tabela se raboti
$table_name="dukani";

switch ($table_name){

    case "dukani":
        require_once "DAO/dukaniDAO.php";//file path 

        //Database connection
        $objDukani = new DukaniDAO($objDB);

        //setters POJO
        $objDukani->setDukaniID(10);

        //DAO
        $objDukani->deleteDukani();

    break;

    case "prodazba":
        require_once "DAO/prodazbaDAO.php";//file path
        
        //Database connection
        $objProdazba= new ProdazbaDAO($objDB);

        //setters POJO
        $objProdazba->setProdazbaID(10);

        //DAO
        $objProdazba->deleteProdazba();
    break;

    case "proizvodi":
        require_once "DAO/proizvodiDAO.php";//file path
        
        //Database connection
        $objProizvodi = new ProizvodiDAO($objDB);

        //setters POJO
        $objProizvodi ->setProizvodiID(15);

        //DAO
        $objProizvodi -> deleteProizvodi();
    break;

    case "rabotnik":
        require_once "DAO/rabotnikDAO.php";//file path
       
        //Database connection
        $objRabotnik= new RabotnikDAO($objDB);

        //setters POJO
        $objRabotnik ->setRabotnikID(11);

        //DAO
        $objRabotnik ->deleteRabotnik();
    break;

    case "vraboteni":
        require_once "DAO/vraboteniDAO.php";//file path
        
        //Database connection
        $objVraboteni = new VraboteniDAO($objDB);

        //setters POJO
        $objVraboteni ->setVraboteniID(9);

        //DAO
        $objVraboteni ->deleteVraboteni();
    break;

    default :
    echo "Погрешно име на табела ";
    break;

}
?>