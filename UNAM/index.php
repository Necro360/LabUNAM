<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
   	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Laboratorio de Arte & Tecnología </title>

    <link rel="stylesheet" href="Resources/css/bootstrap.min.css">
     

</head>
 
<body>
    <!--Barra de Navegacion-->
    <nav class="navbar navbar-default">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Cambiar Navegacion</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="#" class="navbar-brand">Laboratorio de Arte & Tecnología </a>
        </div>

       
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">Iniciar Sesion</div>
                    <div class="panel-body"> 
                        
                        
        <form method="POST" action="Controllers/conect.php">
             <div class="form-group">
                                <label for="email">Email:</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                    <input type="email" class="form-control" name="email" required placeholder="Example@gmail.com">
                                </div>
                            </div>

              <div class="form-group">
                                <label for="password">Password</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                                    <input type="password" class="form-control" name="password" placeholder="Password" required="required">
                                </div>
                            </div>  

                            <center><button type="submit" name="Login" value="Entrar" class="btn btn-primary" ><span class="glyphicon glyphicon-home"></span> Entrar </button></center>
            
            
        </form>
        
  

                        </div>                     
            
        </div>
        

    </div>
        
    </body>
</html>


