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
        if ($object != "")
        {
            return $this->getSQLOrder("SELECT Product.productName,  Rooms.roomName, Cupboard.cupboardName FROM Product
                      JOIN Cupboard ON Product.cupboardID=Cupboard.cupboardID
                      JOIN Rooms ON Cupboard.roomID=Rooms.roomID
                      WHERE Product.productName LIKE '%$object%' OR Cupboard.cupboardName LIKE '%$object%' OR Rooms.roomName LIKE '%$object%'");


        }
        else
        {
            echo "Bitte geben Sie etwas ins Suchfeld ein";

        }


    }


    function createNewProduct($object, $cupboard)
    {
        return $this->getSQLOrder("INSERT INTO Product(productName, cupboardID) VALUES ('$object',$cupboard)");



    }

    function allElementsInArray($a) //TODO Hier weiter: Wenn das Zimmer ausgewählt wird sollen danach alle Schränke zur Auswahl stehen um neue Produkte hinzuzufügen
    {
        switch ($a)
        {
            case 1:
                return $this->getSQLOrder("SELECT cupboardID, cupboardName FROM Cupboard");
                break;
            case 2:
                return $this->getSQLOrder("SELECT roomID, roomName FROM Rooms");
                break;
        }
    }


    function getSQLOrder($query)
    {
        $conn = new ConnectDB();
        $result = $conn->connect()->query($query);
        return $result;
    }


}