<html>
<?php
include("Controller/Controller.php");
include("View/TemplateLoader.php");

$loader = new TemplateLoader();

echo $loader->loadHeader();


?>
<head>
    <title>Editor</title>
</head>
<body>

<div class="col-3 menu">
<form method="get">

        <label for="newProductText">Produkt: </label>
        <input type="text" name="newProductText" id="newProductText" autofocus autocomplete="off" placeholder="Ihr neues Produkt">
        <br>
        <label for="selectRoom">Zimmer: </label>
        <select id="selectRoom" name="selectRoom">
            <?php


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
</div>


<?php

$contoller = new Controller();
if (isset($_GET["submitProduct"]))
{
    $product = $_GET["newProductText"];
    $room =  $_GET["selectRoom"];
    $cupboard = $_GET["selectCupboard"];

    echo $contoller->insertProductInDB($product,$cupboard,$room);

}



?>
</body>
</html>

