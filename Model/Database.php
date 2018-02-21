<?php
/**
 * Created by PhpStorm.
 * User: chrif
 * Date: 20.02.2018
 * Time: 12:37
 */

class Database
{
    private $query;



    function createNewProduct($object, $table, $schrank, $kategorie)
    {
        $this->query="INSERT INTO Produkt(produktName, schrankID, kategorieID) VALUES ($object,$schrank,$kategorie); ";
    }

    function showProduct($object)
    {
        $result = "";
       $this->query = "SELECT * FROM Produkt WHERE produktName LIKE %$object%";
        //$showQuery = "SELECT Artikel.Artikelname, Schraenke.Schrankname, Zimmer.Zimmername FROM Artikel LEFT JOIN Schraenke on Schraenke.schrankID=Artikel.schrankID LEFT JOIN Zimmer on Zimmer.zimmerID=Schraenke.zimmerID where Artikel.Artikelname LIKE '%".$product."%'";


        $result=connectDB()->query;
        return $result;
    }


}