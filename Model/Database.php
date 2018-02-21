<?php
/**
 * Created by PhpStorm.
 * User: chrif
 * Date: 20.02.2018
 * Time: 12:37
 */

require 'ConnectDB.php';


class Database
{
    private $query;


    function showProduct($object)
    {


        //require "ConnectDB.php";
        $conn = new ConnectDB();
        if ($object != "")
        {


            $hans = "SELECT zimmerName FROM Zimmer WHERE zimmerID=1"; //Test
            $result = $conn->connect()->query($hans);


            $string = "
                <table id='resultTable'><tr id='captionTable'><th>Was:</th><th>Wo:</th> ";
            while ($zeile = $result->fetch_object())
            {
                // echo $zeile->Artikelname,"<br>";
                echo "<tr><td>" . $zeile->zimmerName . "</td></tr>


            ";

                return $string;
            }
        }
        else
        {

            return "Keine Eingabe vorhanden";
        }

    }


    function createNewProduct($object, $table, $schrank, $kategorie)
    {
        $this->query = "INSERT INTO Produkt(produktName, schrankID, kategorieID) VALUES ($object,$schrank,$kategorie); ";
    }

}