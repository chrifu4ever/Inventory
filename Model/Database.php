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
            $query = "SELECT Produkt.produktName,  Zimmer.zimmerName, Schraenke.schrankName FROM Produkt
                      JOIN Schraenke ON Produkt.schrankID=Schraenke.schrankID
                      JOIN Zimmer ON Schraenke.zimmerID=Zimmer.zimmerID
                      WHERE Produkt.produktName LIKE '%$object%' OR Schraenke.schrankName LIKE '%$object%' OR Zimmer.zimmerName LIKE '%$object%'";


            $result = $conn->connect()->query($query);
            return $result;

        }
        else
        {
            echo "Bitte geben Sie etwas ins Suchfeld ein";

        }

    }


    function createNewProduct($object, $table, $schrank, $kategorie)
    {
        $this->query = "INSERT INTO Produkt(produktName, schrankID, kategorieID) VALUES ($object,$schrank,$kategorie); ";
    }

}