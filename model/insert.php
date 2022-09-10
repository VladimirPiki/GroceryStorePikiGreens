<?php

/**
 * @author Vladimir Krstevski <vlade.piki23@hotmail.com>
 * @link 
 */

$data=json_decode(file_get_contents("php://input"));
var_dump($data);


 require_once "../lib/class_database_piljara.php";
 //           class name    __construct
 $objDB = new   DB            ();

//za koja tabela se raboti
$table_name=$data[0]->table_name;

switch ($table_name){

    case "dukani":

        //File path
        require_once "DAO/dukaniDAO.php";

        //Database connection
        $objDukani = new DukaniDAO($objDB);

        //setters POJO
        $objDukani->setAdresa($data[0]->adresa);
        $objDukani->setTelefon($data[0]->telefon);
        $objDukani->setGrad($data[0]->grad);

        //DAO
        $objDukani->insertDukani();

    break;

    case "prodazba":

        //File path
        require_once "DAO/prodazbaDAO.php";
        
        //Database connection
        $objProdazba= new ProdazbaDAO($objDB);

        //setters POJO
        //$objProdazba->setProdazbaID(5);
        $objProdazba->setProdazbaDatum('2022-08-18');
        $objProdazba->setPromet(49970);
        $objProdazba->setProdadenoKg(277,6);
        $objProdazba->setRasipanoKg(18,1);
        $objProdazba->setRabotnikID(4);

        //DAO
        $objProdazba->insertProdazba();
    break;

    case "proizvodi":
        require_once "DAO/proizvodiDAO.php";//file path
        
        //Database connection
        $objProizvodi = new ProizvodiDAO($objDB);

        //setters POJO
        $objProizvodi->setIme('Mandarini');
        $objProizvodi->setTip('ovoshje');
        $objProizvodi->setKg(200,6);
        $objProizvodi->setCena(19);
        $objProizvodi->setDatumPriem("2022-08-14 13:00:00");

        //DAO
        $objProizvodi ->insertProizvodi();
    break;

    case "rabotnik":
        require_once "DAO/rabotnikDAO.php";//file path
       
        //Database connection
        $objRabotnik= new RabotnikDAO($objDB);

        //setters POJO
        //$objRabotnik->setRabotnikID(4);
        $objRabotnik->setDatum('2022-08-16');
        $objRabotnik->setSmena(2);
        $objRabotnik->setDukaniID(5);
        $objRabotnik->setVraboteniID(4);

        //DAO
        $objRabotnik ->insertRabotnik();
    break;

    case "vraboteni":
        require_once "DAO/vraboteniDAO.php";//file path
        
        //Database connection
        $objVraboteni = new VraboteniDAO($objDB);

        //setters POJO
        $objVraboteni ->setIme('Jovana');
        $objVraboteni ->setPrezime('Mladenova');
        $objVraboteni ->setGrad('Ohrid');
        $objVraboteni ->setPlata(28500);

        //DAO
        $objVraboteni ->insertVraboteni();
    break;

    default :
    echo "Погрешно име на табела ";
    break;

}
?>