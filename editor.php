<html>
<head>
    <title>Editor</title>
</head>
<body>

<div class="col-3 menu">
<form method="get">
    <form>
        <label for="newProductText">Produkt: </label>
        <input type="text" name="newProductText" id="newProductText" autofocus autocomplete="off" placeholder="Ihr neues Produkt">
        <br>
        <label for="selectRoom">Zimmer: </label>
        <select id="selectRoom" name="selectRoom">
            <?php
            include("Controller/Controller.php");
            $option = new Controller();
            $option->showElementInOption(2)?>
        </select>
        <br>
        <label for="selectCupboard">Schrank: </label>
        <select id="selectCupboard" name="selectCupboard">
            <?php

            $option->showElementInOption(1);
            ?>
        </select>
        <br>
        <input type="submit" value="Senden" name="submitProduct" id="submitProduct">

    </form>
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

if (isset($_GET["submitProduct"]))
{
    echo "EMPFANG";

    $contoller->readTextFile();

}



?>
</body>
</html>

