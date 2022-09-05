<?php

/**
 * @author Vladimir Krstevski <vlade.piki23@hotmail.com>
 * @link 
 */

 require_once "../lib/class_database_piljara.php";
 //           class name    __construct
 $objDB = new   DB            ();

//za koja tabela se raboti
$table_name="vraboteni";

switch ($table_name){

    case "dukani":
        require_once "DAO/dukaniDAO.php";//file path 

        //Database connection
        $objDukani = new DukaniDAO($objDB);

        //setters POJO
        $objDukani->setDukaniID(10);
        $objDukani->setAdresa('s.Dobrusevo bb');
        $objDukani->setTelefon(76556664);
        $objDukani->setGrad('Bitola');

        //DAO
        $objDukani->updateDukani();

    break;

    case "prodazba":
        require_once "DAO/prodazbaDAO.php";//file path
        
        //Database connection
        $objProdazba= new ProdazbaDAO($objDB);

        //setters POJO
        $objProdazba->setProdazbaID(5);
        $objProdazba->setProdazbaDatum('2022-08-13');
        $objProdazba->setPromet(34551);
        $objProdazba->setProdadenoKg(335);
        $objProdazba->setRasipanoKg(17,7);
        $objProdazba->setRabotnikID(3);

        //DAO
        $objProdazba->updateProdazba();
    break;

    case "proizvodi":
        require_once "DAO/proizvodiDAO.php";//file path
        
        //Database connection
        $objProizvodi = new ProizvodiDAO($objDB);

        //setters POJO
        $objProizvodi->setProizvodiID(14);
        $objProizvodi->setIme('Ljubenici');
        $objProizvodi->setTip('ovoshje');
        $objProizvodi->setKg(40);
        $objProizvodi->setCena(30);
        $objProizvodi->setDatumPriem('2022-08-12 14:00:00');

        //DAO
        $objProizvodi ->updateProizvodi();
    break;

    case "rabotnik":
        require_once "DAO/rabotnikDAO.php";//file path
       
        //Database connection
        $objRabotnik= new RabotnikDAO($objDB);

        //setters POJO
        $objRabotnik->setRabotnikID(4);
        $objRabotnik->setDatum('2022-08-13');
        $objRabotnik->setSmena('2');
        $objRabotnik->setDukaniID('3');
        $objRabotnik->setVraboteniID('4');

        //DAO
        $objRabotnik ->updateRabotnik();
    break;

    case "vraboteni":
        require_once "DAO/vraboteniDAO.php";//file path
        
        //Database connection
        $objVraboteni = new VraboteniDAO($objDB);

        //setters POJO
        $objVraboteni ->setVraboteniID(8);
        $objVraboteni ->setIme('Antimon');
        $objVraboteni ->setPrezime('Krstev');
        $objVraboteni ->setGrad('Kocani');
        $objVraboteni ->setPlata(29700);

        //DAO
        $objVraboteni ->updateVraboteni();
    break;

    default :
    echo "Погрешно име на табела ";
    break;

}
?>