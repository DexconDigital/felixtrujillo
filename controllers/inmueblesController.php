<?php
require 'vendor/autoload.php';
use JasonGrimes\Paginator;

require_once 'variables/config.php';
$url_pagina = $_SERVER["REQUEST_URI"];
$ciudad = 0;
$barrio = 0;
$gestion =  0;
$inmueble = 0;
$pag = 1;

if (isset($_GET['pag'])) {
    $pag = $_GET['pag'];
}

if (isset($_GET['ci'])) {
    $ciudad = $_GET['ci'];
    $barrio = $_GET['bar'];
    $gestion = $_GET['ge'];
    $inmueble = $_GET['in'];
}

$ch = curl_init();
$headers =  'Authorization:' . TOKEN;
curl_setopt($ch, CURLOPT_URL, PROTOCOLO.'://www.simi-api.com/ApiSimiweb/response/v2.1.3/filtroInmueble/limite/' . $pag . '/total/12/departamento/0/ciudad/' . $ciudad . '/zona/0/barrio/' . $barrio . '/tipoInm/' . $inmueble . '/tipOper/' . $gestion . '/areamin/0/areamax/0/valmin/0/valmax/0/campo/0/order/desc/banios/0/alcobas/0/garajes/0/sede/0/usuario/0');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_USERPWD, $headers);
$result = curl_exec($ch);
curl_close($ch);
$r = json_decode($result, true);

// Paginador
$valor_reemplazar = '&pag='.$pag.'';
$url_pagina = str_ireplace($valor_reemplazar, '', $url_pagina);
$totalItems = $r['datosGrales']['totalInmuebles'];
$itemsPerPage = 12;
$currentPage = $pag;
$urlPattern = $url_pagina.'&pag=(:num)';

$paginator = new Paginator($totalItems, $itemsPerPage, $currentPage, $urlPattern);

function modelo_inmueble($r)
{
    $r = $r['Inmuebles'];
    for ($i = 0; $i < count($r); $i++) {
        $imagen = existeImagen(($r[$i]['foto1']));
        $api = $r;
        $codigo = str_ireplace("459-", "", $api[$i]['Codigo_Inmueble']);
        echo '
        <div class="col-11 col-md-6 col-lg-4 wow fadeIn">
        <div class="card" style="">
            <div class="container-img">
            <a href="detalle-inmueble.php?co=' . $codigo . '">
            <img src="' . $imagen . '" class="card-img-top" alt="...">
            <div class="overlay--codigo">
                Cod: ' . $codigo . '
            </div>
        </a>
                <div class="overlay--precio">';
        if ($api[$i]['Gestion'] == 'Arriendo/venta') {
            echo '$' . $api[$i]['Canon'] . ' / ' . $api[$i]['Venta'];
        } else if ($api[$i]['Gestion'] == 'Venta') {
            echo '$' . $api[$i]['Venta'];
        } else {
            echo '$' . $api[$i]['Canon'];
        }
        echo '</div>
                <div class="overlay--gestion">
                    ' . $api[$i]['Gestion'] . '
                </div>
            </div>
            <div class="card-body pb-2 text-center">
                <h5 class="mb-1">' . $api[$i]['Tipo_Inmueble'] . '</h5>
                <p class="text-muted mb-1"><small>
                    ' . $api[$i]['Barrio'] . ', ' . $api[$i]['Ciudad'] . '
                </small></p>
                <a href="detalle-inmueble.php?co=' . $codigo . '" class="btn btn-primary">Ver Inmueble</a>
            </div>
            <div class="card-footer p-0 text-muted">
                <div class="container-fluid">
                    <ul class="row mb-0 pl-0 text-center">
                        <li class="col-4"> <i class="fas fa-ruler-combined mr-1"></i>' . $api[$i]['AreaConstruida'] . 'm<sup>2<sup></li>
                        <li class="col-4 borde"><i class="fas fa-bed mr-1"></i>' . $api[$i]['Alcobas'] . '</li>
                        <li class="col-4 borde"><i class="fas fa-bath mr-1"></i>' . $api[$i]['banios'] . '</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
        ';
    }
}

function existeImagen($r)
{
    if ($r == "") {
        $r = "images/no_image.png";
    }
    return $r;
}
