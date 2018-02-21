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

        return $database->showProduct($result);





    }

}

