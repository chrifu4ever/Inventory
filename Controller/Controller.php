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
        $database = new Database();

        $databaseElement = $database->showProduct($result);

        //String mit mehreren Zeilen
        $tableHead = "
        <table id='resultTable'>
        <tr>
            <th>Produkt</th>
            <th>Schrank</th>
            <th>Zimmer</th>
        </tr>
        ";

        $tableRows="";
        while($row=$databaseElement->fetch_object())
        {
            $tableRows.="<tr>
            <td>$row->produktName</td>
            <td>$row->zimmerName</td>
            <td>$row->schrankName</td></tr>
            </table>";
        }
        return $tableHead.$tableRows;

    }

}
