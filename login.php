<?php
    session_start();
    if ($_POST){
        if (($_POST['usuario'] =="ricardo") && ($_POST['contrasenia']=="12345")){
            
            $_SESSION['usuario'] = "ricardo";

            header("Location: index.php");

        } else{
            echo "<script> alert('Usuario o contrasenia incorrecta') </script>";
        }
        
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

  </head>
  <body>
</br>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                
            </div>
            <div class="col-md-4">
                <div class="card">
                    <br/>
                    <div class="card-header">
                        Iniciar sesión
                    </div>
                    <div class="card-body">
                    <form action="login.php" method="post">
                        usuario: <input class="form-control" type="text" name="usuario" id="">
                        <br/>
                        contraseña: <input class="form-control" type="password" name="contrasenia" id="contrasenia" id="">
                        <br/>

                        <button class="btn btn-success" type="submit">Entrar</button>

                        </form>
                    </div>
                </div>

            </div>
            <div class="col-md-4">
                
            </div>
            
        </div>

  
        
    </div>



</body>
</html>