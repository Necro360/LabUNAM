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
  <title>Laboratorio Arte & Tecología</title>
  <meta charset="utf-8">
    <meta name="viewport" content="width=divice-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">
    <link rel="stylesheet" href="../Resources/css/bootstrap.min.css">
    <link rel="icon" href="Resources/img/icon.png" />

    <script src="js/jquery-3.2.1.min.js"></script>
    <script type="js/bootstrap.min.js"></script>
    <script src="../Resources/js/validacionModal.js"></script>


</head>
<body>


    <nav class="navbar navbar-default">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Cambiar Navegacion</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="#" class="navbar-brand">Laboratorio de Arte & Tecnología</a>
        </div>

        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="javascript: void(0)" class="dropdown-toggle" data-toggle="dropdown">menu</a>
                     <ul class="dropdown-menu">
                      
                      
                        <li><a href="javascript: void(0)" onclick='cerrar();'>Cerrar Sesión</a></li>
                        
                     
                    </ul>
                </li>
                
            </ul>
        </div>
    </nav>




   




       
          </div>
        </div>
      </div>
    </div>
  
  <div class="container">
    <center><h2>Bienvenido <?php echo $user?> </h2></center>
    <hr>
    <hr>


     <div class="row">

      <div class="col-md-6 mb-3">
          <form action="regEmp.php">  
          <input  class="btn btn-primary btn-block" type="submit" value="Registrar Empleados">
          </form>
            </div>

             <div class="col-md-6 mb-3">
          <form action="cons.php">  
          <input  class="btn btn-primary btn-block" type="submit" value="Consultar Empleados">
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
                window.location.href = "../index.php";
            });
        }


    </script>


     
        
       

</body>
</html>

<?php

  } else {
                
                header("location: ../index.php");
            }
        } else {
            echo "No hay ningún usuario logueado";
        }
 ?> 