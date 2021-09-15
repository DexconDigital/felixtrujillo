<?php

$titleDocument = "Detalle Proyecto";
$inmo          = $_GET['inmo'];
$codinm        = $_GET['codinm'];
$onlyScript    = 1;
$fec           = date('YmdHis');

?>
<html>
<head>
  <title>Detalle Proyecto</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="proyectos_data/css/detalleProyecto.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
  <link rel="stylesheet" href="mapas/leaflet.css" crossorigin="" />
  <?php
  $page = 'proyectos';
  include 'layout/archivosheader.php'; ?>
</head>

<body>
  <!-- Menu -->
  <?php
  include 'layout/menu.php'; ?>
  <!-- // Fin de menu -->


  <div class="container-fluid body">
    <!-- botonoes -->
    <div class="row justify-content-center mt-4 mb-4">
      <div class="col-11 col-md-4 mb-2">
        <a class="btn btn-block btn-primary" href="./proyectosNvo.php">Ver más proyectos</a>
      </div>

      <div class="col-11 col-md-4 mb-2">
        <button class="btn btn-block btn-info btn-moreInfo">Solicitar Información</button>
      </div>
    </div>
    <!-- fin de botones -->

    <!-- tabs items -->
    <div class="tab-content" id="pills-tabContent">
      <div class="cambio2 tab-pane fade" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
        <div id="carouselExampleControls" class="carousel slide w-100 overflow-hidden pl-4 pl-md-0" data-ride="carousel">
          <div class="carousel-inner">
            <!-- Imprimir las imagenes -->

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
      <div class="cambio1 tab-pane fade show active" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
        <div id="map" class="w-100"></div>
      </div>
      <div class="video_url tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
        <iframe class="iframeVideo" width="100%" height="320" src="" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
      <div class="nomproyectoLog" id="nomproyectoLog"></div>      
    </div>
    <!-- fin de tabs items -->

    <!-- tabs -->
    <div class="col-12 tabulacion">
      <ul class="nav nav-pills mb-3 w-100 row justify-content-center mt-4" id="pills-tab" role="tablist">
        <li class="nav-item col-4 text-center">
          <a class="cambio-4 nav-link " id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true"><i class="fas fa-images mr-2"></i>Imagenes</a>
        </li>
        <li class="nav-item col-4 text-center">
          <a class="cambio-3 nav-link active" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false"><i class="fas fa-map mr-2"></i>Mapa</a>
        </li>
        <li class="nav-item col-4 text-center video_url">
          <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false"><i class="fas fa-video mr-2"></i> Video</a>
        </li>
      </ul>
    </div>

    <input type="hidden" id="urlVideo" value="0">

    <div class="caracproyecto container">
      <div class="row justify-content-center" id="caracproyecto">
        <div class="col" style="display: flex;align-items: center;margin-bottom: 5px">
          <div class="iconCarac">
            <i class="fa fa-building"></i>
          </div>
          <div class="textCarac">
            <span class="number countTorres">0</span>
            <p class="text">Torres</p>
          </div>
        </div>
        <div class="col" style="display: flex;align-items: center;margin-bottom: 5px">
          <div class="iconCarac">
            <i class="fa fa-home" aria-hidden="true"></i>
          </div>
          <div class="textCarac">
            <span class="number countUnidades">0</span>
            <p class="text">Unidades</p>
          </div>
        </div>
        <div class="col" style="display: flex;align-items: center;margin-bottom: 5px">
          <div class="iconCarac">
            <i class="fas fa-ruler-combined" aria-hidden="true"></i>
          </div>
          <div class="textCarac">
            <p class="text">Área desde: <span class="countArea">0</span>m<sup>2</sup></p>
          </div>
        </div>
        <div class="col" style="display: flex;align-items: center;margin-bottom: 5px">
          <div class="iconCarac">
            <i class="fa fa-car" aria-hidden="true"></i>
          </div>
          <div class="textCarac">
            <span class="number countParking">0</span>
            <p class="text">Parqueaderos</p>
          </div>
        </div>
        <div class="col" style="display: flex;align-items: center;margin-bottom: 5px">
          <div class="iconCarac price">
            <i class="fas fa-dollar-sign" aria-hidden="true"></i>
          </div>
          <div class="textCarac">
            <span class="number priceInmu">0</span>
            <p class="text">Precio desde</p>
          </div>
        </div>
      </div>
      <div class="col-md-12 cd-section" id="caracespeproyectos">
        <div class="container">
          <div class="titleCaracEspec col-md-11 col-md-offset-1">
            <h3>CARACTERÍSTICAS DEL PROYECTO</h3>
          </div>
          <div class="col-md-11 col-md-offset-1" id="infocaracter">
            <div class="col-md-7">
              <p class="rtejustify descrLarga">
              </p>
            </div>
            <div class="col-md-5" id="listAlre">
              <!-- <ul>
                            <li>Almacén&nbsp;Constructor: 1</li>
                            <li>Supermercados: 2</li>
                            <li>Centros&nbsp;comerciales: 2</li>
                            <li>Avenidas&nbsp;principales: 2</li>
                            <li>Parque: 1</li>
                            <li>Consecionarios: 2</li>
                        </ul> -->
            </div>
          </div>
          <!-- <div class="titleZonasComunes col-md-11 col-md-offset-1">
                    <h5>ALREDEDORES</h5>
                </div>
                <div class="col-md-11 col-md-offset-1" id="listAlre">
                    <div class="col-md-12 list">
                    </div>
                </div> -->
          <div class="titleZonasComunes col-md-11 col-md-offset-1">
            <h5 class="titleZonas">ZONAS COMUNES</h5>
          </div>
          <div class="col-md-11 col-md-offset-1" id="listZonas">
            <div class="col-md-12 list">
            </div>
          </div>
          <div class="titleZonasComunes col-md-11 col-md-offset-1">
            <h5 class="titleOtras">OTRAS</h5>
          </div>
          <div class="col-md-11 col-md-offset-1" id="listOtras">
            <div class="col-md-12 list">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="modalInfo">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="panel-heading p-4">
          <button type="button" class="close" data-dismiss="modal">
            <span aria-hidden="true">&times;</span>
            <span class="sr-only">Close</span>
          </button>
          <h4 class="modal-title" id="myModalLabel">
            Solicitar información
          </h4>
        </div>
        <div class="modal-body">
          <div class="">
            <form name="formMoreInfo" class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Nombre</label>
                  <input type="text" style="border-color:#CCCCCC;margin:0px;border-bottom: solid 1px #CCCCCC !important" data-parsley-required data-parsley-errors-messages-disabled name="nombres" class="form-control">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Apellidos</label>
                  <input type="text" style="border-color:#CCCCCC;margin:0px;border-bottom: solid 1px #CCCCCC !important" data-parsley-required data-parsley-errors-messages-disabled name="apellidos" class="form-control">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Correo</label>
                  <input type="email" data-parsley-required data-parsley-errors-messages-disabled data-parsley-type="email" name="correo" class="form-control">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Numero de contacto</label>
                  <input type="number" data-parsley-required data-parsley-errors-messages-disabled data-parsley-minlength="7" data-parsley-maxlength="10" name="telefono" class="form-control">
                </div>
              </div>
              <input type="hidden" name="codinm" id="codinmContact">
              <input type="hidden" name="cotizacion" value="1">
              <div class="col-md-12">
                <button class="btn btn-block btn-primary btn-enviarMore" type="submit">Enviar</button>
              </div>
            </form>
          </div>
          <div class="clearfix">&nbsp;</div>
          <div class="alert alert-msn contact-alert" style="display: none"></div>
        </div>
        <div class="modal-footer">
          <!-- <button type="button" class="btn btn-success">Enviar</button> -->
        </div>
      </div>
    </div>
  </div>

  <?php include 'layout/footer.php'; ?>
  <!-- fin de Footer -->


  <!-- scripts -->
  <script type="text/javascript">
    var map = "";
    var codInmu = "<?php echo $codinm; ?>";
    var inmo = "<?php echo $inmo; ?>";
  </script>

  <?php require('layout/archivosfooter.php'); ?>
  <script type="text/javascript" src="js/slider-responsive/jquery.bxslider.js"></script>
  <script type="text/javascript" src="js/tabs/responsive-tabs.js"></script>
  <script type="text/javascript" src="js/funciones/funcionesGenerales.js"></script>
  <script type="text/javascript" src="js/parsley/parsley.js"></script>
  <script src="mapas/leaflet.js" crossorigin=""></script>
  <script type="text/javascript" src="js/proyectos.js?range=' . $fec . '"></script>


  <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
</body>

</html>