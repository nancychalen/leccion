<!DOCTYPE html>
<html>

<meta charset="utf-8" />
<title>formulario guardar</title>
</head>
<body>
<form action="finalizarperfil.php" method="post">
<p>
nombre:<input type="text" name="nombre" autofocus required/>
tipo:<input type="text" name="tipo" autofocus required/>
fechanacimiento:<input type="text" name="fechanacimiento" autofocus required/>
</p>
<input type="submit" value="Guardae objeto demo" />
</form>
</body>






}else{
?>
<form action="login.php" method= "post">
  USUARIO:<br>
  <input type="text" name="nombre" >
  <br>
  CONTRASEÑA:<br>
  <input type="text" name="clave">
  <br><br>
  <input type="submit" value="ingresar">
</form> 
<?php } ?>
</body>
</html>
