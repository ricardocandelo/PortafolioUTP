<?php
    session_start();
    if(isset($_SESSION['usuario'])!="ricardo"){
        header("location: login.php");
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portafolio</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    
    <link rel="stylesheet"  href="style/videos.css "/>
    <link rel="stylesheet"  href="style/imagen.css "/>
    


</head>
<body>
    <div class="container">
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">PORTAFOLIO</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link" href="crud.php">SUBIR_ARCHIVO</a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#"  role="button" data-bs-toggle="dropdown">
                    APARTADOS
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item" href="parciales.php">PARCIALES</a></li>
                    <li><a class="dropdown-item" href="laboratorios.php">LABORATORIOS</a></li>
                    <li><a class="dropdown-item" href="trabajos.php">TRABAJOS</a></li>
                </ul>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="cerrar.php">CERRAR</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>        
    <?php include "logica.php";?>
    

        




 