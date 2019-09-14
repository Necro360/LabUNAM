<?php 
session_start();
if (isset($_SESSION["user"])) {
 if ($_SESSION["nivel"] =="0") {
require_once'../Controllers/conexion.php';
$user = $_SESSION['user'];

 
 
        

  
  ?>
    <!DOCTYPE >
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=divice-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">
    <title>Registrar Empleados Nuevos </title>
    <link rel="stylesheet" href="../Resources/css/css2/bootstrap.min.css">
    <!--script src="js/jquery-3.2.1.min.js"></script-->
    <script type="../Resources/js2/bootstrap.min.js"></script>
    <script src=../Resources/js2/sweetalert2.js></script>
    <link rel="stylesheet" href="../Resources/css2/sweetalert2.css">
    <script>
            
    </script>
    <link rel="stylesheet" href="../Resources/css/css2/EstiloFormularios.css">
    <script src="../Resources/js/validador.js"></script>
</head>

<body>

    <div class="container">
            
             <nav>
               <form class="form-inline my-2 my-lg-0" action="menu.php">
      
                 <button  class="btn btn-outline-success my-2 my-sm-0 " type="submit">Menu</button>
                </form>
                    
                </div><!-- Item-->
                </div>

            
        
        </form>
        </nav>
        <form class="container" id="needs-validation" name="" method ="post" action="../Controllers/recibe_empleado.php" >

            <div class="row" >
    

                <div class="col-md-6 mb-2">
                  
                  <label for="validationCustom01">Nombre(s)  </label>
                        <input   name="nombre" id="validationCustom01" class="form-control"     required> 
                            
      <div class="invalid-feedback">Campo Obligatorio</div>
    </div>

         <div class="col-md-6 mb-2">
                  
                  <label for="validationCustom01">Apellido Paterno </label>
                        <input   name="apellido_pat" id="validationCustom01" class="form-control"     required> 
                            
      <div class="invalid-feedback">Campo Obligatorio</div>
    </div>

         <div class="col-md-6 mb-2">
                  
                  <label for="validationCustom01">Apellido Materno </label>
                        <input   name="apellido_mat" id="validationCustom01" class="form-control"     required> 
                            
      <div class="invalid-feedback">Campo Obligatorio</div>
    </div>

         <div class="col-md-6 mb-2">
                  
                  <label for="validationCustom01">Fecha de Nacimiento  </label>
                        <input type="date"   name="fecha" id="validationCustom01" class="form-control"     required> 
                            
      <div class="invalid-feedback">Campo Obligatorio</div>
    </div>



     <div class="col-md-6 mb-2">
                  
                  <label for="validationCustom01">Ingreso Anual</label>
                        <input type="number" step="0.01" min="0.01" pattern="^[0-9]+" name="ingreso" id="validationCustom01" class="form-control"     required> 
                            
      <div class="invalid-feedback">Campo Obligatorio</div>
    </div>

      

              </div><!--fin row campos-->

            <div class="row" >
                <div class="col-md-6">
                   <button  class="btn btn-primary" type="submit">Siguiente</button>
                </div>
            </div><!--fin row botones-->

        </form>
    </div><!--fin container-->  


    
               
          

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
    