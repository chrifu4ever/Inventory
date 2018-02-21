<?php
/**
 * Created by PhpStorm.
 * User: chrif
 * Date: 20.02.2018
 * Time: 15:24
 */
class controller {

    function createTable($result)
    {
        require "../Model/Database.php";

        $database = new Database();

        $database->showProduct($result);
        echo "
   
    <table class='table table-striped table-bordered'><th>Produkt:</th><th>Im Schrank:</th><th>Zimmer</th> ";
        while ($zeile = $result->fetch_object()) {
            // echo $zeile->Artikelname,"<br>";
            echo "
                <tr>
                    <td>" . $zeile->Artikelname . "</td><td>".$zeile->Schrankname. "<td>" . $zeile->Zimmername."</td>";
        }

        echo "</table></form>";
    }

}

