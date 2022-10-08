<?php

/**
 * @author Vladimir Krstevski <vlade.piki23@hotmail.com>
 * @link https://www.linkedin.com/in/vladimir-krstevski-6182aa24b/
 */

 require_once "../lib/class_database_piljara.php";
 //           class name    __construct
 $objDB = new   DB            ();

// ime na tabela
$table_name=$_GET['table_name'];
$data=[];

switch ($table_name){

    case "dukani":
        require_once "DAO/dukaniDAO.php";//file path 

        //Database connection
        $objDukani = new DukaniDAO($objDB);

        //DAO
        $rezultat=$objDukani->selectDukani();

        //var_dump($rezultat);

        foreach($rezultat as $row){
            $data[]=array(
                "dukani_id" => $row["dukani_id"],
                "adresa" => $row["adresa"],
                "telefon" => $row["telefon"],
                "grad" => $row["grad"],
                "dukani_img_path" => $row["dukani_img_path"]
            );
            }
    break;

    case "prodazba":
        require_once "DAO/prodazbaDAO.php";//file path
        
        //Database connection
        $objProdazba= new ProdazbaDAO($objDB);
        
        //DAO
        $rezultat=$objProdazba->selectProdazba();

                //var_dump($rezultat);

                foreach($rezultat as $row ){
                    $data[]=array(
                    "prodazba_id" => $row["prodazba_id"],
                    "prodazba_datum" => $row["prodazba_datum"],
                    "promet" => $row["promet"],
                    "prodadeno_kg" => $row["prodadeno_kg"],
                    "rasipano_kg" => $row["rasipano_kg"],
                    "rabotnik_id" => $row["rabotnik_id"],
                    "datum" => $row["datum"],
                    "smena" => $row["smena"],
                    "dukani_id" => $row["dukani_id"],
                    "grad" => $row["grad"],
                    "vraboteni_id" => $row["vraboteni_id"],
                    "ime" => $row["ime"],
                    "prezime" => $row["prezime"],
                    "grad" => $row["grad"],
                    "plata" => $row["plata"]
                );
                }
    break;

    case "proizvodi":
        require_once "DAO/proizvodiDAO.php";//file path
        
        //Database connection
        $objProizvodi = new ProizvodiDAO($objDB);

        //DAO
        $rezultat=$objProizvodi ->selectProizvodi();

        //var_dump($rezultat);

        foreach($rezultat as $row ){
            $data[]=array(
            "proizvodi_id" => $row["proizvodi_id"],
            "ime" => $row["ime"],
            "tip" => $row["tip"],
            "kg" => $row["kg"],
            "cena" => $row["cena"],
            "datum_priem" => $row["datum_priem"],
            "proizvodi_img_path" => $row["proizvodi_img_path"]
        );
        }
    break;

    case "rabotnik":
        require_once "DAO/rabotnikDAO.php";//file path
       
        //Database connection
        $objRabotnik= new RabotnikDAO($objDB);


        //DAO
        $rezultat=$objRabotnik ->selectRabotnik();
       // var_dump($rezultat);

        foreach($rezultat as $row ){
            $data[]=array(
            "rabotnik_id" => $row["rabotnik_id"],
            "datum" => $row["datum"],
            "smena" => $row["smena"],
            "dukani_id" => $row["dukani_id"],
            "adresa" => $row["adresa"],
            "telefon" => $row["telefon"],
            "grad" => $row["grad"],
            "vraboteni_id" => $row["vraboteni_id"],
            "ime" => $row["ime"],
            "prezime" => $row["prezime"],
            "grad" => $row["grad"],
            "plata" => $row["plata"]
        );
        }
    break;

    case "vraboteni":
        require_once "DAO/vraboteniDAO.php";//file path
        
        //Database connection
        $objVraboteni = new VraboteniDAO($objDB);

        //DAO
        $rezultat=$objVraboteni ->selectVraboteni();
        //var_dump($rezultat);

        foreach($rezultat as $row ){
            $data[]=array(
            "vraboteni_id" => $row["vraboteni_id"],
            "ime" => $row["ime"],
            "prezime" => $row["prezime"],
            "grad" => $row["grad"],
            "plata" => $row["plata"],
            "vraboteni_img_path" => $row["vraboteni_img_path"]
        );
        }
    break;

    default :
    echo "Погрешно име на табела ";
    break;

}
echo json_encode($data);
?>