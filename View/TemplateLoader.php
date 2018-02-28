<?php
/**
 * Created by PhpStorm.
 * User: chrif
 * Date: 23.02.2018
 * Time: 21:21
 */

class TemplateLoader
{


    function loadHeader()
    {
        include("templates/header.cfu");  //TODO: Later: Possibility to include Directory templates



        return file_get_contents('header.cfu');

    }

}