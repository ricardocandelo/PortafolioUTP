<?php include("cabecera.php")  ?>
    <div class="p-1 bg-light">
            <div class="container">
                <h1 class="display-3">LABORATORIOS</h1>
                <p class="lead">BIENVENIDO A LA SECCION DE LABORATORIOs </p>
                <hr class="my-2">
                <p>RICARDO CANDELO</p>
            </div>
    </div>

    <?php if( $proyectos=$objConexion->consultar("SELECT * FROM `proyectos` WHERE (`nombre` LIKE '%lab%' or `nombre`like '%trabajo%') and (`archivo` LIKE '%avi%' OR `archivo` LIKE '%mp4%')"))
    { ?>
        <h4 class="text-center">VIDEOS</h4> 
        </br>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php foreach($proyectos as $proyecto) {?>

            <div class="col">
                <div class="card">

                <video src="archivos/<?php echo $proyecto['archivo'] ?>" alt="" class="video" muted></video>
                <div class="container-video">
                    <video class="video-show" src="" alt=""  muted autoplay controls></video>
                    <i class='bx bx-x'></i>
                </div>
            

                <div class="card-body">
                    <h5 class="card-title"><?php echo $proyecto['nombre'] ?></h5>
                    <p class="card-text"><?php echo $proyecto['descripcion'] ?></p>
                </div>
                </div>
            </div>
    <?php }?></div>  </br> <?php }?>
    
    <?php if( $proyectos=$objConexion->consultar("SELECT * FROM `proyectos` WHERE (`nombre` LIKE '%lab%' or `nombre`like '%trabajo%') and (`archivo` LIKE '%jpg%' OR `archivo` LIKE '%png%')"))
        { ?>
            <h4 class="text-center">IMAGENES</h4> 
            </br>
            <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php foreach($proyectos as $proyecto) {?>

            <div class="col">
                <div class="card">
                <img src="archivos/<?php echo $proyecto['archivo'] ?>" class="card-img-top imagen" alt="...">
                <div class="container-imagen">
                    <img class="imagen-show" src="" alt="">
                    <i class='bx bx-x'></i>
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?php echo $proyecto['nombre'] ?></h5>
                    <p class="card-text"><?php echo $proyecto['descripcion'] ?></p>
                </div>
                </div>
            </div>
    <?php }?></div>  </br> <?php }?>


    <?php if( $proyectos=$objConexion->consultar("SELECT * FROM `proyectos` WHERE (`nombre` LIKE '%lab%' or `nombre`like '%trabajo%') and (`archivo` LIKE '%zip%' OR `archivo` LIKE '%doc%' or `archivo` LIKE '%ppt%' or `archivo` LIKE '%pdf%')"))
    { ?>
        <h4 class="text-center">DOCUMENTOS Y ARCHIVOS</h4> 
        </br>
        <div class="row row-cols-1 row-cols-md-3 g-4">
        <?php foreach($proyectos as $proyecto) {?>

        <div class="col">
                <div class="card">
                <a href="archivos/<?php echo $proyecto['archivo'] ?>" download="#"><?php echo $proyecto['archivo'] ?></a>                            
                <div class="card-body">
                    <h5 class="card-title"><?php echo $proyecto['nombre'] ?></h5>
                    <p class="card-text"><?php echo $proyecto['descripcion'] ?></p>
                </div>
                </div>
            </div>
        <?php }?></div>  </br> <?php }?>
    
<?php include("pie.php") ?>