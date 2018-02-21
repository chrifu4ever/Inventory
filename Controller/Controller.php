<?php
/**
 * Created by PhpStorm.
 * User: chrif
 * Date: 20.02.2018
 * Time: 15:24
 */
class Controller {

    function createTable($result)
    {
        require(__DIR__.'/../Model/Database.php');

        $database = new Database();

        $database->showProduct($result);


        echo $result->zimmerName;


    }

}

