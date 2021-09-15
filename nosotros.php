<!DOCTYPE html>
<html lang="es">
<?php  $page ='nosotros';?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nosotros</title>
    <?php include 'layout/archivosheader.php'; ?>
</head>

<body>
    <!-- Menu -->
    <?php include 'layout/menu.php'; ?>
    <!-- // Fin de menu -->
    <script>
        var page = "nosotros";
    </script>
    <!-- Contenido -->
    <div class="container-fluid body overflow-hidden">
        <section id="nosotros" class="nosotros separador-p pb-0">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 wow fadeInDown" data-wow-delay="1.2s">
                        <h2 class="title"><?php echo $texto_nosotros['nosotros']['titulo']; ?></h2>
                    </div>
                    <div class="col-11 col-lg-12 wow fadeInUp" data-wow-delay="1.2s">
                        <?php for ($i = 0; $i < count($texto_nosotros['nosotros']['parrafos']); $i++) {
                            echo '<p>' . $texto_nosotros['nosotros']['parrafos'][$i] . '</p>';
                        }; ?>
                    </div>
                </div>
            </div>
            <div class="container-fluid p-0">
                <div class="row">
                    <div class="col-12 wow slideInRight">
                        <div class="contenedor-imagen">
                            <img src="images/banner-quienesSomos.png" alt="" class="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="mision" class="separador mt-4">
            <div class="container">
                <div class="row  justify-content-center text-justify pr-0 pr-lg-4">
                    <div class="col-11 col-lg-6 row pr-0 pr-lg-4 wow slideInLeft">
                        <div class="col-12 col-lg-12">
                           <h2 class="title"><?php echo $texto_nosotros['nosotros']['mision']['titulo'];?></h2>
                        </div>
                        <div class="col-12 col-lg-12 p-0 pr-3 pr-lg-4">
                            <p><?php echo $texto_nosotros['nosotros']['mision']['parrafos'][0];?></p>
                        </div>
                    </div>
                    <div class="col-11 col-lg-6 row pr-0 pr-lg-4 wow slideInRight   ">
                        <div class="col-12">
                            <h2 class="title"><?php echo $texto_nosotros['nosotros']['vision']['titulo'];?></h2>
                        </div>
                        <div class="col-12 col-lg-12 p-0 pr-3 pr-lg-4">
                            <p><?php echo $texto_nosotros['nosotros']['vision']['parrafos'][0];?></p>
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