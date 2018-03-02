<html>
<head>
    <title>Editor</title>
</head>
<body>
<?php include("View/templates/menu.php"); ?>
<div class="col-3 menu">
<form method="get">
    <form>
        <input type="text" name="newProductText" id="newProductText" autofocus autocomplete="off" placeholder="Ihr neues Produkt">
        <label for="selectCupboard">Schrank:</label>
        <select id="selectCupboard" name="selectCupboard">
            <?php
            include("Controller/Controller.php");
            $option = new Controller();
            $option->showElementInOption(1);
            ?>
        </select>
        <select>
            <?php $option->showElementInOption(2)?>
        </select>
    </form>
</form>
</div>
</body>
</html>

