<!DOCTYPE html>
<?php require 'controllers/indexController.php';
$page = 'inicio'; ?>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php include 'layout/archivosheader.php'; ?>
    <title><?php echo $nombre_inmobiliaria; ?> </title>
        <!-- Site Name, Title, and Description to be displayed -->
    <meta property="og:site_name" content="Inmobiliaria felix Trujillo Falla">
    <meta property="og:title" content="Inmobiliaria felix Trujillo Falla">
    <meta property="og:description" content="Empresa Inmobiliaria en Colombia">

    <!-- Image to display -->
    <!-- Replace   «example.com/image01.jpg» with your own -->
    <meta property="og:image" itemprop="image" content="http://www.felixtrujillofalla.com/images/Logo.jpg">

    <!-- No need to change anything here -->
    <meta property="og:type" content="website" />
    <meta property="og:image:type" content="image/jpeg">

    <!-- Size of image. Any size up to 300. Anything above 300px will not work in WhatsApp -->
    <meta property="og:image:width" content="150">
    <meta property="og:image:height" content="150">

    <!-- Website to visit when clicked in fb or WhatsApp-->
    <meta property="og:url" content="http://www.felixtrujillofalla.com">
</head>

<body>
    <link itemprop="thumbnailUrl" href="http://www.felixtrujillofalla.com/images/Logo.jpg"> 
        <span itemprop="thumbnail" itemscope itemtype="http://schema.org/ImageObject"> 
            <link itemprop="url" href="http://www.felixtrujillofalla.com/images/Logo.jpg"> 
        </span>
    <script>var page="Inicio";</script>
    <!-- Menu -->
    <?php include 'layout/menu.php'; ?>
    <!-- // Fin de menu -->

    <!-- Contenido -->
    <div class="container-fluid body overflow-hidden">
        <!-- Slide -->
        <section id="hero" class="banner">
            <div id="slide_hero" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <?php $slide = $imagenes_slide_principal;
                        echo '
                            <div class="carousel-item active">
                                <img src="'.$slide[0]['imagen'].'" class="d-block w-100" alt="'.$slide[0]['alt'].'">
                            </div> 
                            ';
                        for($i=1; $i < count($slide); $i++){
                            echo '
                            <div class="carousel-item">
                                <img src="'.$slide[$i]['imagen'].'" class="d-block w-100" alt="'.$slide[$i]['alt'].'">
                            </div>
                            ';
                        } ?>
                </div>
                <div class="overlay">
                    <div class="container">
                        <form>
                            <div class="row">
                                <div class="col-12 col-md-6 col-lg form-group">
                                    <label for="formGroupExampleInput">Código</label>
                                    <input type="text" id="codigo_buscar" class="form-control" placeholder="Código">
                                </div>
                                <div class="col-12 col-md-6 col-lg form-group">
                                    <label for="formGroupExampleInput">Ciudad</label>
                                    <select name="" id="ciudad_buscar" class="form-control">
                                        <option value="0">Ciudad</option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-6 col-lg form-group">
                                    <label for="formGroupExampleInput">Barrio</label>
                                    <select name="" id="barrio_buscar" class="form-control">
                                        <option value="0">Barrio</option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-6 col-lg form-group">
                                    <label for="formGroupExampleInput">Tipo de Inmueble</label>
                                    <select name="" id="tipo_inmueble_buscar" class="form-control">
                                        <option value="0">Tipo de Inmueble</option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-6 col-lg form-group">
                                    <label for="formGroupExampleInput">Gestión</label>
                                    <select name="" id="tipo_gestion_buscar" class="form-control">
                                        <option value="0">Gestión</option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-6 col-lg form-group boton-buscar">
                                    <button type="button" id="buscar" class="btn btn-light btn-md btn-block">Buscar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="overlay-texto">
                    <div class="row">
                        <h1 class="wow bounceInDown" data-wow-delay="1.5s">Inmobiliaria Felix Trujillo Falla</h1>
                    </div>
                </div>
            </div>
        </section>

        <section id="destacadas" class="propiedades separador">
            <div class="row">
                <div class="col-12">
                    <h2 class="title">
                        Propiedades Destacadas <button type="button" class="btn btn-primary-outline" data-toggle="modal" data-target="#exampleModal">Leer Mas...</button>
                    </h2>
                </div>
                <div class="container">
                    <div class="row justify-content-center">
                        <?php
                        inmuebles_destacados();
                        ?>
                    </div>
                </div>
            </div>
        </section>

        <section id="aliados" class="separador-padding bg-gris wow bounceInUp" data-wow-duration="2s">
            <div class="row">
                <div class="col-12">
                    <h2 class="title">Aliados</h2>
                </div>
                <div class="col-12">
                    <div class="owl-carousel owl-theme"  id="aliados">
                        <?php
                        for ($i = 0; $i < count($logos_aliados); $i++) {
                            echo '
                                <div class="item">
                                    <img src="' . $logos_aliados[$i] . '" alt="">
                                </div>
                                ';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- Fin Contenido -->

    <!-- Footer -->
    <section class="">
        <?php include 'layout/footer.php'; ?>
    </section>
    <!-- fin de Footer -->

    <script>
        pagina = true;
    </script>
    <!-- Archivos Footer -->
    <?php include 'layout/archivosfooter.php'; ?>
    <!-- Fin archivos Footer -->
</body>

</html>