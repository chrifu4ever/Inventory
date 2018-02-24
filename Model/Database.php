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



    function showProduct($object)
    {


        //require "ConnectDB.php";
        $conn = new ConnectDB();
        $result="";

        if ($object != "")
        {
            /*
            $query = "SELECT Produkt.produktName,  Zimmer.zimmerName, Schraenke.schrankName FROM Produkt
                      JOIN Schraenke ON Produkt.schrankID=Schraenke.schrankID
                      JOIN Zimmer ON Schraenke.zimmerID=Zimmer.zimmerID
                      WHERE Produkt.produktName LIKE '%$object%' OR Schraenke.schrankName LIKE '%$object%' OR Zimmer.zimmerName LIKE '%$object%'";

            */

            $query = "SELECT Product.productName,  Rooms.roomName, Cupboard.cupboardName FROM Product
                      JOIN Cupboard ON Product.cupboardID=Cupboard.cupboardID
                      JOIN Rooms ON Cupboard.roomID=Rooms.roomID
                      WHERE Product.productName LIKE '%$object%' OR Cupboard.cupboardName LIKE '%$object%' OR Rooms.roomName LIKE '%$object%'";

            $result = $conn->connect()->query($query);


        }
        else
        {
            echo "Bitte geben Sie etwas ins Suchfeld ein";

        }
        return $result;

    }




    function createNewProduct($object, $schrank, $kategorie)
    {
        $conn = new ConnectDB();

        $query= "INSERT INTO Product(productName, cupboardID, categoryID) VALUES ('$object',$schrank,$kategorie); ";
        $conn->connect()->query($query);
        echo $query;
    }


}