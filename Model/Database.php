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


    function showProdukt($object)
    {
        if ($object != "")
        {
            return $this->getSQLOrder("SELECT Produkt.produktName, Produkt.produktID, Zimmer.zimmerName,  Zimmer.zimmerID, Schraenke.schrankName, Schraenke.schrankID FROM Produkt
                      JOIN Schraenke ON Produkt.schrankID=Schraenke.schrankID
                      JOIN Zimmer ON Schraenke.zimmerID=Zimmer.zimmerID
                      WHERE Produkt.produktName LIKE '%$object%' OR Schraenke.schrankName LIKE '%$object%' OR Zimmer.zimmerName LIKE '%$object%'");


        }
        else
        {
            echo "Bitte geben Sie etwas ins Suchfeld ein";

        }


    }


    function createNewProdukt($object, $Schraenke)
    {
        return $this->getSQLOrder("INSERT INTO Produkt(produktName, schrankID) VALUES ('$object',$Schraenke)");



    }


    function deleteProduktInDB($produktID)
    {
        //$a = $this->showProdukt($Produkt)->fetch_object();
        echo "DELETE FROM Produkt WHERE produktName = '$produktID'";

        return $this->getSQLOrder( "DELETE FROM Produkt WHERE produktID = '$produktID'");


    }

    function allElementsInArray($a) //TODO Hier weiter: Wenn das Zimmer ausgewählt wird sollen danach alle Schränke zur Auswahl stehen um neue Produkte hinzuzufügen
    {
        switch ($a)
        {
            case 1:
                return $this->getSQLOrder("SELECT schrankID, schrankName FROM Schraenke");
                break;
            case 2:
                return $this->getSQLOrder("SELECT zimmerID, zimmerName FROM Zimmer");
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