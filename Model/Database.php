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
        if ($object==" ")
        {
            $object="*";
        }

        if ($object != "")
        {
            $query = "SELECT Produkt.produktName,  Zimmer.zimmerName, Schraenke.schrankName FROM Produkt
                      JOIN Schraenke ON Produkt.schrankID=Schraenke.schrankID
                      JOIN Zimmer ON Schraenke.zimmerID=Zimmer.zimmerID
                      WHERE Produkt.produktName LIKE '%$object%'";


            //$query = "SELECT zimmerName FROM Zimmer WHERE zimmerID=1"; //Test
            $result = $conn->connect()->query($query);
            return $result;

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