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

        //DAO
        $objDukani->selectDukani();

    break;

    case "prodazba":
        require_once "DAO/prodazbaDAO.php";//file path
        
        //Database connection
        $objProdazba= new ProdazbaDAO($objDB);
        
        //DAO
        $objProdazba->selectProdazba();
    break;

    case "proizvodi":
        require_once "DAO/proizvodiDAO.php";//file path
        
        //Database connection
        $objProizvodi = new ProizvodiDAO($objDB);

        //DAO
        $objProizvodi ->selectProizvodi();
    break;

    case "rabotnik":
        require_once "DAO/rabotnikDAO.php";//file path
       
        //Database connection
        $objRabotnik= new RabotnikDAO($objDB);

        //DAO
        $objRabotnik ->selectRabotnik();
    break;

    case "vraboteni":
        require_once "DAO/vraboteniaDAO.php";//file path
        
        //Database connection
        $objVraboteni = new VraboteniDAO($objDB);

        //DAO
        $objVraboteni ->selectVraboteni();
    break;

    default :
    echo "Погрешно име на табела ";
    break;

}
?>