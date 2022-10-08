<?php

/**
 * @author Vladimir Krstevski <vlade.piki23@hotmail.com>
 * @link https://www.linkedin.com/in/vladimir-krstevski-6182aa24b/
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
        $objDukani->setDukaniImgPath($data[0]->dukani_img_path);
        //DAO
        $objDukani->insertDukani();

    break;

    case "prodazba":

        //File path
        require_once "DAO/prodazbaDAO.php";
        
        //Database connection
        $objProdazba= new ProdazbaDAO($objDB);

         //Format time
        $formatProdazbaDatum=date("Y-m-d",strtotime($data[0]->prodazba_datum));

        //setters POJO

        //$objProdazba->setProdazbaID(5);
        $objProdazba->setProdazbaDatum($formatProdazbaDatum);
        $objProdazba->setPromet($data[0]->promet);
        $objProdazba->setProdadenoKg($data[0]->prodadeno_kg);
        $objProdazba->setRasipanoKg($data[0]->rasipano_kg);
        $objProdazba->setRabotnikID($data[0]->rabotnik_id);

        //DAO
        $objProdazba->insertProdazba();
    break;

    case "proizvodi":
        require_once "DAO/proizvodiDAO.php";//file path
        
        //Database connection
        $objProizvodi = new ProizvodiDAO($objDB);

         //Format time
         $formatProizvodiDatumPriem=date("Y-m-d H:i:s",strtotime($data[0]->datum_priem));

        //setters POJO
        $objProizvodi->setIme($data[0]->ime);
        $objProizvodi->setTip($data[0]->tip);
        $objProizvodi->setKg($data[0]->kg);
        $objProizvodi->setCena($data[0]->cena);
        $objProizvodi->setDatumPriem($formatProizvodiDatumPriem);
        $objProizvodi->setProizvodiImgPath($data[0]->proizvodi_img_path);
        //DAO
        $objProizvodi ->insertProizvodi();
    break;

    case "rabotnik":
        require_once "DAO/rabotnikDAO.php";//file path
       
        //Database connection
        $objRabotnik= new RabotnikDAO($objDB);

         //Format time
         $formatRabotnikDatum=date("Y-m-d",strtotime($data[0]->datum));

        //setters POJO

        //$objRabotnik->setRabotnikID(4);
        $objRabotnik->setDatum($formatRabotnikDatum);
        $objRabotnik->setSmena($data[0]->smena);
        $objRabotnik->setDukaniID($data[0]->dukani_id);
        $objRabotnik->setVraboteniID($data[0]->vraboteni_id);

        //DAO
        $objRabotnik ->insertRabotnik();
    break;

    case "vraboteni":
        require_once "DAO/vraboteniDAO.php";//file path
        
        //Database connection
        $objVraboteni = new VraboteniDAO($objDB);

        //setters POJO
        $objVraboteni ->setIme($data[0]->ime);
        $objVraboteni ->setPrezime($data[0]->prezime);
        $objVraboteni ->setGrad($data[0]->grad);
        $objVraboteni ->setPlata($data[0]->plata);
        $objVraboteni ->setVraboteniImgPath($data[0]->vraboteni_img_path);
        //DAO
        $objVraboteni ->insertVraboteni();
    break;

    default :
    echo "Погрешно име на табела ";
    break;

}
?>