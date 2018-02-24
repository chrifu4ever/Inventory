<?php
/**
 * Created by PhpStorm.
 * User: chrif
 * Date: 20.02.2018
 * Time: 12:20
 */

class ConnectDB
{
    public function connect()
    {

        $sql = new mysqli("127.0.0.1", "linux", "TbIzozVGbeULOSlT", "inventory");
        mysqli_set_charset($sql,"utf8");
        if ($sql->connect_errno) {
            echo "Failed to connect to MySQL: (" . $sql->connect_errno . ") " . $sql->connect_error;
        }

       return $sql;
    }
}

?>
