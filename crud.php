<?php include("cabecera.php"); ?>



    <br/>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Datos de archivos
                    </div>
                    <div class="card-body">
                        <form action="crud.php" method="post" enctype="multipart/form-data">

                            Nombre del proyecto: <input required class="form-control" type="text" name="nombre" id="">
                            <br/>
                            Archivo del proyecto: <input required class="form-control" type="file" name="archivo" id="" >
                            <br/>
                            Descripcion
                            <textarea required class="form-control"  name="descripcion" id="" rows="3"></textarea>
                            <br/>
                            <input class="btn btn-success" type="submit" value="Subir">
                            

                        </form>

                    </div>
                 </div>
            </div>
            <div class="col-md-6">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Archivo</th>
                            <th>Descripcion</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php if( $proyectos=$objConexion->consultar("SELECT * FROM `proyectos` WHERE `archivo` LIKE '%jpg%' or `archivo` LIKE '%png%'"))
                        { foreach($proyectos as $proyecto) {?>
                            <tr>
                                <td><?php echo $proyecto['id'] ?></td>
                                <td><?php echo $proyecto['nombre'] ?></td>
                                <td>                                 
                                    <img src="archivos/<?php echo $proyecto['archivo'] ?>" width="100" height="100" alt="" name="img" srcset="">                          
                                </td>
                                <td><?php echo $proyecto['descripcion'] ?></td>
                                <td><a name="" id="" class="btn btn-danger" href="?borrar=<?php echo $proyecto['id']?>">Eliminar</a></td>
                            </tr>

                    <?php } }?>


                    <?php if( $proyectos=$objConexion->consultar("SELECT * FROM `proyectos` WHERE `archivo` LIKE '%avi%' or `archivo` LIKE '%mp4%'"))
                        { foreach($proyectos as $proyecto) {?>
                            <tr>
                                <td><?php echo $proyecto['id'] ?></td>
                                <td><?php echo $proyecto['nombre'] ?></td>
                                <td> 
                                    <video src="archivos/<?php echo $proyecto['archivo'] ?>" width="100" height="100"></video>                              
                                </td>
                                <td><?php echo $proyecto['descripcion'] ?></td>
                                <td><a name="" id="" class="btn btn-danger" href="?borrar=<?php echo $proyecto['id']?>">Eliminar</a></td>
                            </tr>

                    <?php } }?>

                    <?php if( $proyectos=$objConexion->consultar("SELECT * FROM `proyectos` WHERE `archivo` LIKE '%zip%' or `archivo` LIKE '%doc%' or `archivo` LIKE '%ppt%' or `archivo` LIKE '%pdf%'"))
                        { foreach($proyectos as $proyecto) {?>
                            <tr>
                                <td><?php echo $proyecto['id'] ?></td>
                                <td><?php echo $proyecto['nombre'] ?></td>
                                <td>  
                                    <a href="archivos/<?php echo $proyecto['archivo'] ?>" download="#"><?php echo $proyecto['archivo'] ?></a>                            
                                </td>
                                <td><?php echo $proyecto['descripcion'] ?></td>
                                <td><a name="" id="" class="btn btn-danger" href="?borrar=<?php echo $proyecto['id']?>">Eliminar</a></td>
                            </tr>

                    <?php } }?>      
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
<?php include("pie.php"); ?>