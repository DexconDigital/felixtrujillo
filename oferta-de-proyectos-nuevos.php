<!DOCTYPE html>
<html lang="es">
<?php $page = 'servicios'; 
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Oferta Proyectos Nuevos | Servicios</title>
    <?php include 'layout/archivosheader.php'; ?>
</head>

<body>
    <!-- Menu -->
    <?php include 'layout/menu.php'; ?>
    <!-- // Fin de menu -->
    <script>
        var page = "Servicios";
    </script>
    <!-- Contenido -->
    <div class="container-fluid body">
        <section id="servicios" class="mb-4">
            <div class="container">
            <div class="row justify-content-center">
                    <div class="col-12">
                        <h2 class="title"><?php echo $texto_servicios[3]['titulo']; ?></h2>
                    </div>  
                    <div class="col-12 col-lg-6 wow slideInLeft" data-wow-delay="1s">
                        <div class="container-img">
                            <img src="<?php echo $texto_servicios[3]['imagen']?>" alt="">
                        </div>
                    </div>
                    <div class="col-11 col-lg-6 slideInRight" data-wow-delay="1s">
                        <p class="pt-4 pt-lg-0"><?php echo $texto_servicios[3]['parrafos'][0]; ?></p>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- Fin Contenido -->

    <!-- Footer -->
    <?php include 'layout/footer.php';?>
    <!-- fin de Footer -->


    <!-- Archivos Footer -->
    <?php include 'layout/archivosfooter.php'; ?>
    <!-- Fin archivos Footer -->
</body>

</html>