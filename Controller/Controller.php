<?php
/**
 * Created by PhpStorm.
 * User: chrif
 * Date: 20.02.2018
 * Time: 15:24
 */
require(__DIR__ . '/../Model/Database.php');


class Controller
{

    function createTable($result)
    {

        if ($result==null)
        {
            return "Bitte geben Sie etwas in das Suchfeld ein!";
        }
        else
        {
            $database = new Database();

            $databaseElement = $database->showProduct($result);
            $countRows=0;
            //Creates the Head of the Table
            $tableHead = "
        <table id='resultTable'>
        <tr>
            <th>Produkt</th>
            <th>Schrank</th>
            <th>Zimmer</th>
        </tr>
        ";

            $tableRows="";

            //Creates the Table Rows as long as there are DB Entries


            while($row=$databaseElement->fetch_object())
            {
                $countRows++;
                $tableRows.="<tr>
                <td>$row->produktName</td>
                <td>$row->zimmerName</td>
                <td>$row->schrankName</td></tr>
                ";
            }

            if ($countRows<1)
            {
                return "Es wurden keine mit deiner Suchanfrage - ".$result." - übereinstimmenden Dokumente gefunden.";
            }
            else
            {
                $tableEnd="</table>";
                return "Es wurden ".$countRows." Einträge gefunden<br>".$tableHead.$tableRows.$tableEnd;
            }

        }


    }

}
