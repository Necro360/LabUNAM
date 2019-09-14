<?php 
session_start();
if (isset($_SESSION["user"])) {
 if ($_SESSION["nivel"] =="0") {
require_once'../Controllers/conexion.php';
$user = $_SESSION['user'];

$id          = isset($_POST["id"])? $_POST['id']: null ;

$sql =mysqli_query($conexion," SELECT *  FROM  empleado WHERE id='$id' ");
$sql2 =mysqli_query($conexion," SELECT *  FROM  ingreso WHERE id='$id' ");


  

?>
<!DOCTYPE html>
<html>
<head>
	
    
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=divice-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">
    
    
    
  
     <link rel="stylesheet" href="../Resources/css/bootstrap.min.css">
    <script src="js/jquery-3.2.1.min.js"></script>
    <script type="js/bootstrap.min.js"></script>
    
</head>
<body>

 <nav class="navbar navbar-default">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Cambiar Navegacion</span>
               
         

        </div>

        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <div style="
    
    width: 100%;
    position: absolute;
    text-align: center;
    color: gray;

"><h1> Consulta Empleado </h1></div>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="javascript: void(0)" class="dropdown-toggle" data-toggle="dropdown"><?php echo $user; ?></a>
                     <ul class="dropdown-menu">
                        <li><a href="javascript: void(0)" onclick='cerrar();'>Cerrar Session</a></li>
                     
                    </ul>
                </li>
                
            </ul>
        </div>
    </nav>


<table  class="table" >
  <thead class="thead-dark">
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido Paterno</th>
      <th scope="col">Apellido Materno</th>
      <th scope="col">Fecha de Nacimiento</th>
      <th scope="col">Ingreso Anual</th>
      
    </thead>
	<?php
while ($fila = mysqli_fetch_array($sql)) 
 	  	{      
        			
echo "<tbody>";
echo "<tr>";


echo "<th>".$fila[0]."</th>";
echo "<th>".$fila[1]."</th>";
echo "<th>".$fila[2]."</th>";
echo "<th>".$fila[3]."</th>";




while ($fila2 = mysqli_fetch_array($sql2)) 
      {     

echo "<th>".$fila2[1]."</th>";
echo "<th>".$fila2[2]."</th>";

echo "</tbody>";
}

}?>



</table>

<hr>
<hr>
<div class="row">
  
                <div class="col-md-3 mb-3" >
                   <form class="container" id="needs-validation" name="ventasDiarias" method ="POST" action="cons.php" >
                   <button style="margin-left: 47%;" class="btn btn-primary" type="submit">Regresar</button>
                </div>

</form>
</div>            


   <script src="../Resources/js/jquery-1.11.2.js"></script>
    <script src="../Resources/js/bootstrap.min.js"></script>
    <script>
        function cerrar()
        {
            $.ajax({
                url:'../Controllers/usuario.php',
                type:'POST',
                data:"mensaje=mensaje&boton=cerrar"
            }).done(function(resp){
                //alert(resp);
                window.location.href = "index.php";
            });
        }
    </script>
</body>
</html>


<?php

  } else {
                
                header("location: ./");
            }
        } else {
            echo "No hay ningún usuario logueado";
        }
 ?> 