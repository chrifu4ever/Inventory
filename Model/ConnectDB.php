<?php
/**
 * Created by PhpStorm.
 * User: chrif
 * Date: 20.02.2018
 * Time: 12:20
 */

class ConnectDB
{
    public function __construct()
    {
        mysqli_connect("127.0.0.1", "linux", "L5xChriRo", "inventory");
        if (mysqli_connect_error())
        {
            echo "Keine Verbindung vorhanden";
        } else
        {
            echo "Verbindung erfolgreich aufgebaut";
        }
    }
}

?>
