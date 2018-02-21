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
            $query = "SELECT zimmerName FROM Zimmer WHERE zimmerID=1";
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