<?php
session_start();
include("conexion.php");

$user = $_SESSION['user'];
//echo "$user";

/*$sql =mysqli_query($conexion," SELECT name  FROM  user where email='$user' ");

while ($fila = mysqli_fetch_array($sql)) {
  $name=$fila[0];
}
 $name;*/

 
 if (isset($_SESSION["user"])) {
 if ($_SESSION["nivel"] =="0") {
        



ini_set('date.timezone','America/Mexico_City');

                //$user = $name;        

                //$fecha          =   date("Y-m-d"); 
                $nombre          = isset($_POST["nombre"])? $_POST['nombre']: null ;
                $apellido_pat        = isset($_POST["apellido_pat"]) ? $_POST['apellido_pat']: null ;
                $apellido_mat       = isset($_POST["apellido_mat"])? $_POST['apellido_mat']: null ;
                $fecha   = isset($_POST["fecha"])? $_POST['fecha']: null ;
                $ingresos         = isset($_POST["ingreso"])? $_POST['ingreso']: null ;
                
               


                $reg1 =mysqli_query($conexion,"INSERT INTO empleado(nombre,apellido_pat,apellido_mat) values('$nombre','$apellido_pat', '$apellido_mat' )");

                $reg2 =mysqli_query($conexion,"INSERT INTO ingreso(fecha_nac,ingresos_anuales) values('$fecha','$ingresos')");

                
                

                if(!$reg1){
        echo 'Error al registrar empleados';
        mysqli_close($conexion);
        }else{


 header("location: ./");

}



  } else {
                
                header("location: ./regEmp.php");
            }
        } else {
            echo "No hay ningún usuario logueado";
        }
 ?> 