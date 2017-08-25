<!DOCTYPE html>
<html>
<body>
<?php
include_once("perfilCollector.php");
$id =1;
$DemoCollectorObj = new perfilCollector();
foreach ($DemoCollectorObj->showDemos() as $c){
  echo "<div>";
echo "<a href='registrarperfil.php'?id=".$c->getnombre()."'>perfil</a>";
echo $c->getid() . "  && " .$c->getnombre(); 
echo "</div>"; 
}
?>
</body>
</html>
