<?php
$conexion= new mysqli("localhost","examen","examen","examen"); //servidor, usuario de base de datos, contraseña del usuario, nombre de base de datos
 mysqli_set_charset($conexion, "utf8");
if(mysqli_connect_errno()){


  exit();

}

 ?>
