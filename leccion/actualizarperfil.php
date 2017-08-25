
<!DOCTYPE html>
<html>
<body>
<h1>actualizando</h1>
<?php

$id=$_GET["id"];
$nombre=$_GET["nombre"];
$tipo=$_GET["tipo"];
$fechanacimiento=$_GET["fechanacimiento"];




echo "valor de id es ". $id;
echo "nombre actualizado es ". $nombre;
echo "tipo actualizado es ". $tipo;
echo "fecha actualizado es ". $fechanacimiento;
include_once("perfilCollector.php");
$DemoCollectorObj = new perfilCollector();
$DemoCollectorObj->update($nombre,$tipo,$fechanacimiento);
echo "id :" .$iddemo." actualizado a :". $nombre."</br>";
?>
<div><a href="index.php">volver al inicio</a></div>
</div>
</body>
</html>
