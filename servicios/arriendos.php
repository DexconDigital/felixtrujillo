<!DOCTYPE html>
<html lang="es">
<?php $page = 'servicios'; 
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Servicios</title>
    <?php include './layout/archivosheader.php'; ?>
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
        <section id="servicios">
            <div class="container">
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