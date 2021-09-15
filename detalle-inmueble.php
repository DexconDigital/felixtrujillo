<!DOCTYPE html>
<?php
require('controllers/detalle-inmuebleController.php');
$page = 'inmuebles';
?>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalle Inmueble</title>
    <?php include 'layout/archivosheader.php'; ?>
    <link rel="stylesheet" href="css/carousel.inmuebles.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="mapas/leaflet.css" crossorigin="" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?php echo 'http://' . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]; ?>" />
    <meta property="og:title" content="<?php echo $r['Tipo_Inmueble'] . ' en ' . $r['Gestion']; ?>" />
    <meta property="og:description" content="Inmueble ubicado en: <?php echo $r['barrio'] . ', ' . $r['ciudad'] . ', ' . $r['depto']; ?> " />
    <meta property="og:image" itemprop="image" content="<?php echo $r['fotos'][0]['foto']; ?>" />
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:width" content="300">
    <meta property="og:image:height" content="300">
    <style>
        #map {
            height: 300px;
            z-index: 20;
        }

        .leaflet-control {
            z-index: 200;
        }

        .leaflet-control {
            z-index: 20;
        }
    </style>
</head>

<body>
    <link itemprop="thumbnailUrl" href="<?php echo $r['fotos'][0]['foto']; ?>">
    <span itemprop="thumbnail" itemscope itemtype="http://schema.org/ImageObject">
        <link itemprop="url" href="<?php echo $r['fotos'][0]['foto']; ?>">
    </span>
    <!-- Menu -->
    <?php include 'layout/menu.php'; ?>
    <!-- // Fin de menu -->
    <script>
        var page = "contacto";
    </script>
    <!-- Contenido -->
    <div class="container-fluid body">
        <section id="detalle">
            <div class="container">
                <div class="row">
                    <div class="col-12 order-0">
                        <h2 class="title">
                            <?php echo $r['Tipo_Inmueble'] . ' en ' . $r['Gestion']; ?>
                            <br>
                            <small class="text-muted">
                                <i class="fas fa-map-marker-alt mr-2"></i><?php echo  $r['barrio'] . ', ' . $r['ciudad']; ?>
                            </small>
                        </h2>
                    </div>

                    <!-- Columna izquierda -->
                    <div class="col-12 col-lg-7 order-1">
                        <div class="row p-0">
                            <!-- carousel -->
                            <div class="col-12 p-0">
                                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                    <div class="full-propertys-img">
                                        <a data-fancybox="gallery" href="<?php $h = count($r['fotos']) - 1;
                                                                            echo $r['fotos'][$h]['foto']; ?>" class="">
                                            <i class="fas fa-expand mr-2"></i><?php echo count($r['fotos']); ?> fotos
                                        </a>
                                    </div>
                                    <div class="carousel-inner">
                                        <?php
                                        if (!isset($r['fotos']) || count($r['fotos']) == 0) {
                                            echo 'div class="carousel-item ">
                                                    <img src="images/no_image.png" class="" alt="...">
                                                    </div>
                                                ';
                                        } else {
                                            echo '<div class="carousel-item active">
                                                        <a data-fancybox="gallery" href="' . $r['fotos'][0]['foto'] . '" class="">
                                                            <img src="' . $r['fotos'][0]['foto'] . '" class="" alt="...">
                                                        <a>
                                                    </div>
                                                    ';
                                            for ($i = 1; $i < count($r['fotos']); $i++) {
                                                echo '<div class="carousel-item">
                                                     <a data-fancybox="gallery" href="' . $r['fotos'][$i]['foto'] . '" class="">
                                                        <img src="' . $r['fotos'][$i]['foto'] . '" class="" alt="...">
                                                    <a>
                                                    </div>
                                                    ';
                                            }
                                        }; ?>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                            <!-- atributos de la propiedad -->
                            <div class="col-12 p-0">
                                <div class="card pb-0 mb-0">
                                    <div class="card-body pl-md-0 pb-0">
                                        <h5 class="card-title">Atributos de la propiedad, Código <?php echo $r['codinm']; ?></h5>
                                        <ul class="row mb-0">
                                            <li class="col-4">Área Construida: <?php echo $r['AreaConstruida']; ?>
                                                m<sup>2</sup></li>
                                            </li>
                                            <li class="col-12 col-md-4">Área Privada: <?php echo $r['AreaLote']; ?> m<sup>2</sup></li>
                                            <li class="col-12 col-md-4">Alcobas: <?php echo $r['alcobas']; ?></li>
                                            <li class="col-12 col-md-4">Baños: <?php echo $r['banos']; ?></li>
                                            <li class="col-12 col-md-4">Garaje: <?php echo $r['garaje']; ?></li>
                                            <li class="col-12 col-md-4">Estrato: <?php echo $r['Estrato']; ?></li>
                                            <?php if ($r['Gestion'] == 'Arriendo/venta') {
                                                echo '<li class="col-12 col-md-4">Valor: $' . $r['ValorCanon'] . ' / ' . $r['ValorVenta'] . '</li>';
                                            } else if ($r['Gestion'] == 'Arriendo') {
                                                echo '<li class="col-12 col-md-4">Valor: $' . $r['ValorCanon'] . '</li>';
                                            } else {
                                                echo '<li class="col-12 col-md-4">Valor: $' . $r['ValorVenta'] . '</li>';
                                            } ?>
                                            <li class="col-12 col-md-4">Administración: $ <?php echo $r['Administracion']; ?></li>
                                            <li class="col-12 col-md-4">Antiguedad del Inmueble en años:
                                                <?php echo $r['EdadInmueble']; ?></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- descripcion de la propiedad  -->
                            <div class="col-12 pl-0">
                                <div class="card mb-0">
                                    <div class="card-body pt-0 pl-md-0">
                                        <h5 class="card-title">Descripción</h5>
                                        <p class="card-text"><?php echo $r['descripcionlarga']; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- columna derecha -->
                    <div class="col-12 col-lg-5 order-3 order-lg-2">
                        <div class="row p-0">
                            <!-- formulario -->
                            <div class="col-12 p-0 order-2 order-lg-0">
                                <div class="card mt-0 mb-0">
                                    <div class="card-body pr-0 pb-0">
                                        <h5 class="title">
                                            Contactános si te interesa este inmueble
                                        </h5>
                                        <form action="email/enviarCorreoasesor.php" method="POST" class="row">
                                            <div class="col-12 col-lg-6 row p-md-0 m-md-0">
                                                <input type="hidden" class="form-control" name="codigo" value="<?php echo $r['codinm']; ?>" required>
                                                <div class="col-12 form-group">
                                                    <input type="text" class="form-control" placeholder="Nombre" name="name" required>
                                                </div>
                                                <div class="col-12 form-group">
                                                    <input type="text" class="form-control" placeholder="Correo Electrónico" name="email" required>
                                                </div>
                                                <div class="col-12 form-group">
                                                    <input type="text" class="form-control" placeholder="Teléfono" name="telefono" required>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-6 form-group">
                                                <textarea id="" rows="5" placeholder="Mensaje" class="form-control" name="message" required></textarea>
                                            </div>
                                            <div class="ml-md-3 col-12 form-group form-check">
                                                <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                                                <label class="form-check-label" for="exampleCheck1"><small> Confirmo que he
                                                        leído, entendido y acepto la política de tratamiento de datos</small>
                                                    personales</label>
                                            </div>
                                            <div class="col-12 form-group">
                                                <button type="submit" class="btn btn-primary">Enviar Mensaje</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- redes sociales  -->
                            <div class="col-12 redes-sociales pl-1 mt-4 mt-md-0 order-1">
                                <div class="card mt-0">
                                    <div class="card-body p-0">
                                        <ul class="row align-items-center mb-0 pl-0">
                                            <li class="col-6 col-md-auto ml-auto m-top">Compartir por: </li>
                                            <li class="col-2 col-md-auto m-top"><a href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.felixtrujillofalla.com%2Fdetalle-inmueble.php%3Fco%3D<?php echo $codigo; ?>" target="_blank"><i class="fab fa-facebook-square"></i></a></li>
                                            <li class="col-2 col-md-auto m-top"><a href="<?php echo 'https://twitter.com/intent/tweet?url=http%3A%2F%2Fwww.felixtrujillofalla.com%2Fdetalle-inmueble.php%3Fco%3D' . $codigo . '&text=' . $r['Tipo_Inmueble'] . '%20en%20' . $r['Gestion'] . '%20en%20' . $r['ciudad'] . '-' . $r['depto'] ?>" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                            <li class="col-2 col-md-auto m-top"><a href="<?php echo 'https://wa.me/?text=%20https://' . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]; ?>" target="_blank"><i class="fab fa-whatsapp"></i></a></li>
                                            <li class="col-sm-12 col-md-auto d-flex justify-content-center pb-4 pb-md-0"><a class="btn btn-primary" href="https://simicrm.app/mcomercialweb/fichas_tecnicas/fichatec3.php?reg=459-<?php echo $codigo ?>" target="_blank">Imprimir Ficha</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- mapa  -->
                            <div class="col-12 order-0 order-lg-2">
                                <div class="card">
                                    <div class="card-body p-0 pt-4">
                                        <h5 class="card-title">Mapa</h5>
                                        <div id="map" class="w-100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Características -->
                    <div class="col-12 pl-md-0 order-2 order-lg-3">
                        <div class="row">
                            <!-- caracteristicas internas -->
                            <div class="col-12 col-md-4">
                                <div class="card pl-md-0 pt-md-0">
                                    <div class="card-body pl-0">
                                        <h5 class="card-title">Características Internas</h5>
                                        <?php
                                        if (count($r['caracteristicasInternas']) > 0) {
                                            echo '
                                            <ul">';
                                            for ($i = 0; $i < count($r['caracteristicasInternas']); $i++) {
                                                $caracteristicas = ltrim($r['caracteristicasInternas'][$i]['Descripcion']);
                                                echo '<li>' . $caracteristicas . '</li>';
                                            }
                                            echo  '</ul>';
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>

                            <!-- caracteristicas externas -->
                            <div class="col-12 col-md-4">
                                <div class="card pt-0">
                                    <div class="card-body pl-0">
                                        <h5 class="card-title">Características Externas</h5>
                                        <?php
                                        if (count($r['caracteristicasExternas']) > 0) {
                                            echo '
                                                    <ul">';
                                            for ($i = 0; $i < count($r['caracteristicasExternas']); $i++) {
                                                $caracteristicas = ltrim($r['caracteristicasExternas'][$i]['Descripcion']);
                                                echo '<li>' . $caracteristicas . '</li>';
                                            }
                                            echo  '</ul>';
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>

                            <!-- caracteristicas Alrededores -->
                            <div class="col-12 col-md-4">
                                <div class="card pt-0">
                                    <div class="card-body pl-0">
                                        <h5 class="card-title">Características Alrededores</h5>
                                        <?php
                                        if (count($r['caracteristicasAlrededores']) > 0) {
                                            echo '
                                                <ul">';
                                            for ($i = 0; $i < count($r['caracteristicasAlrededores']); $i++) {
                                                $caracteristicas = ltrim($r['caracteristicasAlrededores'][$i]['Descripcion']);
                                                echo '<li>' . $caracteristicas . '</li>';
                                            }
                                            echo  '</ul>';
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <?php if ($r['video'] != "") {
                        echo '
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">Video</h5>
                                            <div class="row">
                                                <div class="col-12 col-md-4">
                                                    <iframe src="' . $r['video'] . '" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>';
                    } ?>
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
    <script src="mapas/leaflet.js" crossorigin=""></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script>
        var map = L.map('map').setView([<?php echo $r['latitud']; ?>, <?php echo $r['longitud'] ?>], 14);

        L.tileLayer('https://api.maptiler.com/maps/streets/256/{z}/{x}/{y}.png?key=1rAGHv3KcO1nrS6S9cgI', {
            attribution: '<a href="https://www.maptiler.com/copyright/" target="_blank">© MapTiler</a> <a href="https://www.openstreetmap.org/copyright" target="_blank">© OpenStreetMap contributors</a>'
        }).addTo(map);

        L.marker([<?php echo $r['latitud']; ?>, <?php echo $r['longitud'] ?>]).addTo(map)
            .bindPopup('<img src="<?php echo $r['fotos'][0]['foto'] ?>"])" alt="" width="55px" height="auto"><br>Ubicación')
            .openPopup();
    </script>
</body>

</html>