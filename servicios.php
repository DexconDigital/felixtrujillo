<!DOCTYPE html>
<html lang="es">
<?php $page = 'servicios'; ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Servicios</title>
    <?php include 'layout/archivosheader.php'; ?>
</head>

<body>
    <!-- Menu -->
    <?php include 'layout/menu.php'; ?>
    <!-- // Fin de menu -->
    <script>var page="Servicios";</script>
    <!-- Contenido -->
    <div class="container-fluid body">
        <section id="servicios" class="mb-4">
            <div class="container">
                <!-- Arriendos -->
                <div class="row">
                    <div class="col-12">
                        <h2 class="title"><?php echo $texto_servicios[0]['titulo']; ?></h2>
                    </div>
                    <div class="col-6">
                        <p><?php echo $texto_servicios[0]['parrafos'][0]; ?></p>
                        <ul>
                            <?php for ($i = 0; $i < count($texto_servicios[0]['lista']); $i++) {
                                echo '<li>' . $texto_servicios[0]['lista'][$i] . '</li>';
                            } ?>
                        </ul>
                    </div>
                    <div class="col-6">
                        <div class="container-img">
                            <img src="<?php echo $texto_servicios[0]['imagen'] ?>" alt="">
                        </div>
                    </div>
                </div>
                <!-- Ventas -->
                <div class="row">
                    <div class="col-12">
                        <h2 class="title"><?php echo $texto_servicios[1]['titulo']; ?></h2>
                    </div>
                    <div class="col-6">
                        <div class="container-img">
                            <img src="<?php echo $texto_servicios[1]['imagen'] ?>" alt="">
                        </div>
                    </div>
                    <div class="col-6">
                        <p><?php echo $texto_servicios[1]['parrafos'][0]; ?></p>
                        <ul>
                            <?php for ($i = 0; $i < count($texto_servicios[1]['lista']); $i++) {
                                echo '<li>' . $texto_servicios[1]['lista'][$i] . '</li>';
                            } ?>
                        </ul>
                    </div>
                </div>
                <!-- Avaluos -->
                <div class="row">
                    <div class="col-12">
                        <h2 class="title"><?php echo $texto_servicios[2]['titulo']; ?></h2>
                    </div>
                    <div class="col-6">
                        <p><?php echo $texto_servicios[2]['parrafos'][0]; ?></p>
                    </div>
                    <div class="col-6">
                        <div class="container-img">
                            <img src="<?php echo $texto_servicios[2]['imagen'] ?>" alt="">
                        </div>
                    </div>
                </div>
                <!-- Nuevos proyectos -->
                <div class="row">
                    <div class="col-12">
                        <h2 class="title"><?php echo $texto_servicios[3]['titulo']; ?></h2>
                    </div>
                    <div class="col-6">
                        <div class="container-img">
                            <img src="<?php echo $texto_servicios[3]['imagen']?>" alt="">
                        </div>
                    </div>
                    <div class="col-6">
                        <p><?php echo $texto_servicios[3]['parrafos'][0]; ?></p>
                    </div>
                    
                </div>
                <!-- Reparaciones y remodelaciones -->
                <div class="row">
                    <div class="col-12">
                        <h2 class="title"><?php echo $texto_servicios[4]['titulo']; ?></h2>
                    </div>
                    <div class="col-6">
                        <p><?php echo $texto_servicios[4]['parrafos'][0]; ?></p>
                    </div> 
                    <div class="col-6">
                        <div class="container-img">    
                            <img src="<?php echo $texto_servicios[4]['imagen'] ?>" alt="">
                        </div>
                    </div>
                     
                </div>
            </div>
        </section>
    </div>
    <!-- Fin Contenido -->

    <!-- Footer -->
    <?php include 'layout/footer.php'; ?>
    <!-- fin de Footer -->


    <!-- Archivos Footer -->
    <?php include 'layout/archivosfooter.php'; ?>
    <!-- Fin archivos Footer -->
</body>

</html>