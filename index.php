<html>
<head><title>Inventory</title></head>
<body>
<form method="get">
    <h1>Was suchst du?</h1>
    <input type="text" name="searchTf" id="searchTf" autofocus autocomplete="off">
    <input type="submit" name="searchBut" id="searchBut" value="Suchen">
</form>


</body>
</html>

<?php
require "Model/ConnectDB.php";
/**
 * Created by PhpStorm.
 * User: chrif
 * Date: 20.02.2018
 * Time: 12:19
 */
$connectDB = new ConnectDB();


?>