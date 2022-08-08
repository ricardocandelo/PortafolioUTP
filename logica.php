<?php include("conexion.php"); ?>
<?php
    

    if($_POST){
        
        $nombre = $_POST ["nombre"];
        $descripcion = $_POST ["descripcion"];
        $fecha= new DateTime();
        $archivos =$fecha->getTimestamp()."_". $_FILES['archivo']['name'];
        $archivo_temporal = $_FILES ['archivo']['tmp_name'];
        move_uploaded_file($archivo_temporal,"archivos/".$archivos);
        $objConexion = new conexion();
        $sql="INSERT INTO `proyectos` (`id`, `nombre`, `archivo`, `descripcion`) VALUES (NULL, '$nombre', '$archivos', '$descripcion');";       
        $objConexion->ejecutar($sql);
        header("location:crud.php");
        
    }
    if($_GET){
        
        //"DELETE FROM `proyectos` WHERE `proyectos`.`id` = 22"
        $id=$_GET['borrar'];
        $objConexion= new conexion();
        $archivo=$objConexion->consultar("SELECT archivo FROM `proyectos` WHERE id=".$id);
        unlink("archivos/".$archivo[0]['archivo']);
        $sql= "DELETE FROM `proyectos` WHERE `proyectos`.`id` =". $id;
        $objConexion->ejecutar($sql);
        header("location:crud.php");
        
        
    }

    $objConexion = new conexion();
    $proyectos = $objConexion->consultar("SELECT * FROM `proyectos`");

    $imagenes = $objConexion->consultar("SELECT * FROM `proyectos` WHERE`archivo` LIKe '%PNG%' OR `archivo` LIKE '%jpg%'");
    $videos = $objConexion->consultar("SELECT * FROM `proyectos` WHERE `archivo` LIKE '%avi%' OR `archivo` like '%mp4%' ");
    $documentos = $objConexion->consultar("SELECT * FROM `proyectos` WHERE `archivo` LIKE '%doc%' OR `archivo` like '%zip%' OR `archivo` like '%pdf%' ");
    
    
?>

