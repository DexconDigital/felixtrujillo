<?php
$titleDocument = "Proyectos";
$page = "proyectos";
$fec = date('YmdHis');
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/proyectosNvo.css?range='.$fec.'">
  <?php require('layout/archivosheader.php'); ?>
  <link rel="stylesheet" type="text/css" href="js/rangejs/jquery-ui.css">
  <title>Proyectos | <?php echo $nombre_inmobiliaria; ?> </title>
</head>

<body>

  <?php require('layout/menu.php'); ?>
  <!-- fin de menu -->
  <div class="filtrobusqueda">
    <div class="container">
      <div class="formFilter">
        <form name="formFilter" class="row">
          <input type="hidden" name="inmo" value="459">
          <div class="col-md-4">
            <div class="form-group">
              <label>Destinación</label>
              <select class="form-control" name="destinacion" id="destinacion">
                <option value="0">Cualquiera</option>
              </select>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>Ubicacion</label>
              <select class="form-control" id="ciudades" name="ciudad">
                <option value="0">Cualquiera</option>
              </select>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>Ordenar Por</label>
              <select class="form-control" name="ordenar">
                <option value="0">Cualquiera</option>
                <option value="asc">A-Z</option>
                <option value="desc">Z-A</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 d-none">
            <div>
              <p id="amount" class="amount"></p>
              <div id="slider-range"></div>
              <input type="hidden" id="amount1" name="pdesde">
              <input type="hidden" id="amount2" name="phasta">
            </div>
          </div>
          <div class="col-md-6 d-none">
            <div>
              <p id="amountA" class="amountA"></p>
              <div id="slider-rangeA"></div>
              <input type="hidden" id="amount1A" name="adesde">
              <input type="hidden" id="amount2A" name="ahasta">
            </div>
          </div>
          <div class="col-10 offset-1 form-group pt-4">
            <button type="submit" class="btn-block btn btn-light btn-submitFilter">Buscar</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <section id="container">
    <section id="main-content">
      <section class="wrapper">
        <div class="container jumbotronn" id="headJumbotron">
          <!-- <div class="col-sm-12 col-sm-offset-0 col-md-8 col-md-offset-2"> -->
          <div class="viewHead col-md-4">
            <h1><span class="countInm">0</span> Proyectos encontrados</h1>
          </div>
          <div class="viewFoot col-md-8">
            <div class="btn-group viewRigth" role="group" aria-label="...">
              <!-- <a type="button" class="btn btn-default proyectos active" href="#"><i class="fa fa-th" aria-hidden="true"></i> Proyectos</a> -->
              <!-- <a type="button" class="btn btn-default mapa" href="#"><i class="fa fa-map-o" aria-hidden="true"></i> Mapa</a> -->
            </div>
          </div>
          <!-- </div> -->
        </div>
        <div class="container clearfix row mx-auto" id="list-proyects">
        </div>
      </section>
    </section>
  </section>

  <!-- footer -->

  <?php require('layout/footer.php'); ?>
  <script>
    pagina = false;
  </script>
  <!-- importar archivos -->
  <?php require('layout/archivosfooter.php'); ?>
  <script type="text/javascript">

  </script>
  <script type="text/javascript" src="js/proyectos.js"></script>
  <script type="text/javascript" src="js/rangejs/jquery-ui.js"></script>
  <script type="text/javascript" src="js/formatnumber/jquery.number.js"></script>
  <script type="text/javascript" src="webservice/apisimi.js"></script>
</body>
<!-- menu -->

</html>