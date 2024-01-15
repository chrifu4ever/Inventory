<?php
class ConnectDB
{
    public function connect()
    {

        $sql = new mysqli("172.18.0.2:3306", "root", "einSehrGutesPasswort123", "inventory");

        mysqli_set_charset($sql,"utf8");
        if ($sql->connect_errno) {
            echo "Failed to connect to MySQL: (" . $sql->connect_errno . ") " . $sql->connect_error;
        }

       return $sql;
    }
}
?>
