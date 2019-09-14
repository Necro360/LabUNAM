<?php
session_start();
require_once ('conexion.php');

$salt ='?N$E"D"T$¿\/';

//if (isset($_POST['login'])) {


$correo = $_POST['email'];
$code = $_POST['password'];

$pass=MD5(sha1($salt . $code));



$sql =mysqli_query($conexion,"SELECT name, code FROM user where email='$correo' and code ='$pass'");
 while ($fila = mysqli_fetch_array($sql)) {

 	$user = $fila[0];
 	$password = $fila[1];
 
 }

if ((isset($user) && isset($password)==true) ){

	$_SESSION["user"] = $user;

	echo $_SESSION["user"];

		
 		$sql2=mysqli_query($conexion, "SELECT category FROM user where name='$user' and code ='$password'");
 		while ($fila = mysqli_fetch_array($sql2)) 
 			{
 				$category=$fila[0];
 			}

 			$_SESSION["nivel"] = $category;

 			echo $_SESSION["nivel"];

 			if ($category=="0") 
 				{
                //echo "ok";

                    header("Location: ../Views/menu.php");
                    
                } else {
                	
                
                    header("Location: ../Views/panel.php");
                }

 	

	

	


}else{

    header("Location: ../index.php");




}


 	
 			
 






?>