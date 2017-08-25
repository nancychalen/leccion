<!DOCTYPE html>
<html>
<body>
<h1>GUARDANDO Datos</h1>
<?php
$valor=$_POST["nombre"];
$valo2=$_POST["tipo"];
$valo3=$_POST["fechanacimiento"];
echo "hola usuario nuevo  ". $valor;
include_once("perfilCollector.php");
$DemoCollectorObj = new perfilCollector();
$DemoCollectorObj->createDemo($valor,$valo2,$valor3);
echo "en buena hora te has suscrito "?>
<div><a href='index.php'> volver incirio</a></div>
</div>
</body>
</html>
