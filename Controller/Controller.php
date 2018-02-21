<?php
/**
 * Created by PhpStorm.
 * User: chrif
 * Date: 20.02.2018
 * Time: 15:24
 */
require(__DIR__.'/../Model/Database.php');


class Controller {

    function createTable($result)
    {
        $database = new Database();

        $hans = $database->showProduct($result);


        $string2="<table id='resultTable'>
<tr>
<th>Produkt</th>
<th>Schrank</th>
<th>Zimmer</th>
</tr>";
        //TODO: Tabelle ausgeben anhand der Eingabe

        $string = "<table id='resultTable'><tr id='captionTable'><th>Was:</th><th>Wo:</th> ";
        while ($zeile = $hans->fetch_object())
        {
            // echo $zeile->Artikelname,"<br>";



            ";
        }





    }

}

