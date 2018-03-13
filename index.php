<html>
<?php
require "Controller/Controller.php";
include("View/TemplateLoader.php");
$loader = new TemplateLoader();
echo $loader->loadHeader();
?>
<script src="Controller/js/scripts.js"></script>
<script src="Controller/js/ajax.js"></script>
<div class="col-3 menu">
        <form method="get">
            <input type="text" name="searchTf" id="searchTf" placeholder="Hier etwas eingeben" onkeypress="callCreateTable(this.value)" autofocus
                   autocomplete="off">
            <input type="submit" name="searchBut" id="searchBut" value="Suchen">
        </form>
</div>




<?php


$contoller = new Controller();

if (isset($_GET["searchTf"]))
{
    echo "<div class='main col-9'>".$contoller->createTable($_GET["searchTf"])."</div>";  //The generated table
    //$contoller->readTextFile();
}


?>
<div id="tableDiv"></div>

</body>
</html>
