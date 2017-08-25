<?php
include_once('perfil.php');
include_once('Collector.php');
class perfilCollector extends Collector
{
  function showDemos() {
    $rows = self::$db->getRows("SELECT * FROM persona ");        
    echo "linea 1";
    $arrayDemo= array();        
    foreach ($rows as $c){
      $aux = new perfil($c{'nombre'},$c{'tipo'},$c{'fechanacimiento'},$c{'id'});
      array_push($arrayDemo, $aux);
    }
    return $arrayDemo;        
  }

function createDemo($nombre,$tipo,$fechanacimiento) {
$insertrow = self::$db->insertRow("INSERT INTO public.persona (nombre) values (?)", array ("{$nombre}"));
$insertrow = self::$db->insertRow("INSERT INTO public.persona (tipo) values (?)", array ("{$tipo}"));
$insertrow = self::$db->insertRow("INSERT INTO public.persona (fechanacimiento) values (?)", array ("{$fechanacimiento}"));
}
function update($id,$nombre,$tipo,$fechanacimiento) {
$row = self::$db->updateRow("UPDATE public.persona SET nombre = ? where iddemo= ?" ,array("{$nombre}",$id));
$row = self::$db->updateRow("UPDATE public.persona SET tipo = ? where iddemo= ?" ,array("{$tipo}",$id));
$row = self::$db->updateRow("UPDATE public.persona SET fechanacimiento = ? where iddemo= ?" ,array("{$fechanacimiento}",$id));
}

function showDemo($id) {
$row = self::$db->getRows("SELECT * FROM persona  where id= ?" ,array("{$id}")); 
$ObjDemo =new perfil($row[0]{'id'},$row[0]{'nombre'},$row[0]{'tipo'},$row[0]{'fechanacimiento'});       
    echo "linea 1";
    return $ObjDemo;        
  }

function delete($id) {
$row = self::$db->deleteRow("DELETE FROM demo where id =? " ,array("{$id}"));
}
}
?>

