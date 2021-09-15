<!DOCTYPE html>
<?php $page = 'inmuebles';
require('controllers/inmueblesController.php') ?>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inmuebles</title>
    <?php include 'layout/archivosheader.php'; ?>
</head>

<body>
    <!-- Menu -->
    <?php include 'layout/menu.php'; ?>
    <!-- // Fin de menu -->
    <script>
        var page = "inmuebles";
    </script>
    <!-- Contenido -->
    <div class="container-fluid body">
        <section id="buscador" class="separador-p">
            <div class="">
                <div class="container">
                    <form>
                        <div class="row justify-content-center">
                            <div class="col-11 col-md-6 col-lg form-group">
                                <label for="formGroupExampleInput">Código</label>
                                <input type="number" id="codigo_buscar" class="form-control" placeholder="Código">
                            </div>
                            <div class="col-11 col-md-6 col-lg form-group">
                                <label for="formGroupExampleInput">Ciudad</label>
                                <select name="" id="ciudad_buscar" class="form-control">
                                    <option value="0">Ciudad</option>
                                </select>
                            </div>
                            <div class="col-11 col-md-6 col-lg form-group">
                                <label for="formGroupExampleInput">Barrio</label>
                                <select name="" id="barrio_buscar" class="form-control">
                                    <option value="0">Barrio</option>
                                </select>
                            </div>
                            <div class="col-11 col-md-6 col-lg form-group">
                                <label for="formGroupExampleInput">Tipo de Inmueble</label>
                                <select name="" id="tipo_inmueble_buscar" class="form-control">
                                    <option value="0">Tipo de Inmueble</option>
                                </select>
                            </div>
                            <div class="col-11 col-md-6 col-lg form-group">
                                <label for="formGroupExampleInput">Gestión</label>
                                <select name="" id="tipo_gestion_buscar" class="form-control">
                                    <option value="0">Gestión</option>
                                </select>
                            </div>
                            <div class="col-11 col-md-6 col-lg form-group boton-buscar">
                                <button type="button" id="buscar" class="btn btn-light btn-md btn-block">Buscar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>

        <section id="inmuebles" class="propiedades bg-gris">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <h2 class="title">Lista de Inmuebles</h2>
                    </div>
                    <div class="col-12 row justify-content-center">
                        <?php
                        if (is_array($r)) {
                            modelo_inmueble($r);
                        } else {
                            echo '<h2>No se encuentran Inmuebles</h2>';
                        } ?>
                    </div>
                    <div class="col-12 text-center">
                        <?php if (is_array($r)) : ?>
                            <ul class="pagination mt-4 align-items-end justify-content-center">
                                <?php if ($paginator->getPrevUrl()) : ?>
                                    <li class="page-item"><a href="<?php echo $paginator->getPrevUrl(); ?>" class="page-link">&laquo; Atras</a></li>
                                <?php endif; ?>
                                <?php foreach ($paginator->getPages() as $page) : ?>
                                    <?php if ($page['url']) : ?>
                                        <li <?php echo $page['isCurrent'] ? 'class="page-item active"' : ''; ?>>
                                            <a href="<?php echo $page['url']; ?>" class="page-link"><?php echo $page['num']; ?></a>
                                        </li>
                                    <?php else : ?>
                                        <li class="page-item disabled"><span><?php echo $page['num']; ?></span></li>
                                    <?php endif; ?>
                                <?php endforeach; ?>

                                <?php if ($paginator->getNextUrl()) : ?>
                                    <li class="page-item"><a href="<?php echo $paginator->getNextUrl(); ?>" class="page-link">Siguiente &raquo;</a></li>
                                <?php endif; ?>
                            </ul>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- Fin Contenido -->

    <!-- Footer -->
    <?php include 'layout/footer.php'; ?>
    <!-- fin de Footer -->
    
    <?php echo '<script>var url = "' . $url_pagina . '"; </script>'; ?>
    <?php echo '<script>var pagina = ' . $pag . '; </script>'; ?>
    <?php echo '<script>var totalpagina = ' . $r['datosGrales']['totalPagina'] . '; </script>'; ?>
    <?php echo '<script>var totalInmuebles = ' . $r['datosGrales']['totalInmuebles'] . '; </script>'; ?>
    <script>
        var pagina = false;
    </script>
    <!-- Archivos Footer -->
    <?php include 'layout/archivosfooter.php'; ?>
    <!-- Fin archivos Footer -->
    <script src="conexion_api/listarInmuebles.js"></script>
</body>

</html>