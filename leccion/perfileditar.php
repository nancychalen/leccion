<!DOCTYPE html>
<html>
<body>
<h1>editando demos</h1>

<?php
$id=$_GET["id"];
echo "valor de id es ". $id;
include_once("perfilCollector.php");
include_once("perfil.php");
$DemoCollectorObj = new perfilCollector();
$ObjDemo = $DemoCollectorObj->showDemo($id);
?>
<h2> editar un objeto </h2>
<form action="actualizarperfil.php" method="get">
<p>
Id:<input type="text" name="id" value="<?php echo $ObjDemo->getid();?>"
redonly/>
</p>
<p>
nombre : <input type="text" name="nombre" value="<?php echo $ObjDemo->getnombre();?>" autofocus required/>
</p>
<a href="index.php">CANCELAR</a>
<input type="submit" value="guardar"/>
</form>
</body>
</html>

