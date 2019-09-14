<?php 
session_start();
if (isset($_SESSION["user"])) {
 if ($_SESSION["nivel"] =="0") {
require_once'../Controllers/conexion.php';
$user = $_SESSION['user'];



  

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
                        <li><a href="javascript: void(0)" onclick='cerrar();'>Cerrar Sesión</a></li>
                     
                    </ul>
                </li>
                
            </ul>
        </div>
    </nav>

<form class="container" id="needs-validation" name="" method ="post" action="consemp.php" >

            <div class="row" >
    

                <div class="col-md-3 mb-1">
                  
                  <label for="validationCustom01">Ingrese un ID de empleado  </label>
                        <input  type="number" pattern="^[0-9]+" name="id" id="validationCustom01" class="form-control"     required> 
                            
      <div class="invalid-feedback">Campo Obligatorio</div>
    </div>

</div><!--fin row campos-->

            <div class="row" >
              <div class="col-md-6">
                  <form class="form-inline my-2 my-lg-0" action="menu.php">
      
                 <button  class="btn btn-primary" type="submit">Menu</button>
                </form>
              </div>
                <div class="col-md-6">
                   <button  class="btn btn-primary" type="submit">Siguiente</button>
                </div>
            </div><!--fin row botones-->

        </form>
    </div><!--fin container-->  


          


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