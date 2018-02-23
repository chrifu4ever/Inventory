<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory</title>
    <link rel="stylesheet" href="View/css/style.css">
</head>
<body>
<div class="headker">
    <h1>Was suchst du?</h1>
</div>
<div class="col-3 menu">
        <form method="get">


            <input type="text" name="searchTf" id="searchTf" placeholder="Hier etwas eingeben" autofocus
                   autocomplete="off">
            <input type="submit" name="searchBut" id="searchBut" value="Suchen">
        </form>
</div>




<?php

require "Controller/Controller.php";

/**
 * Created by PhpStorm.
 * User: chrif
 * Date: 20.02.2018
 * Time: 12:19
 */

$contoller = new Controller();

if (isset($_GET["searchTf"]))
{
    echo "<div class='main col-9'>".$contoller->createTable($_GET["searchTf"])."</div>";  //The generated table
    //$contoller->readTextFile();
}


?>
</body>
</html>
