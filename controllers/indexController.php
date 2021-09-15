<?php
require_once 'variables/config.php';


function inmuebles_destacados()
{
    $ch = curl_init();
    $headers =  'Authorization:' . TOKEN;
    curl_setopt($ch, CURLOPT_URL, PROTOCOLO.'://www.simi-api.com/ApiSimiweb/response/v21/inmueblesDestacados/total/6/order/desc');
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
    curl_setopt($ch, CURLOPT_USERPWD, $headers);
    $result = curl_exec($ch);
    curl_close($ch);
    $r = json_decode($result, true);

    if (is_array($r)) {
            modelo_inmueble($r);
    } else {
        echo '<h2>No tiene Inmuebles Destacados</h2>';
    }
}

function modelo_inmueble($r)
{
    for ($i = 0; $i < 3; $i++) {
        $imagen = existeImagen(($r[$i]['foto1']));
        $api = $r;
        $codigo = str_ireplace("459-", "", $api[$i]['Codigo_Inmueble']);
        echo '
        <div class="col-11 col-md-6 col-lg-4">
        <div class="card" style="">
            <div class="container-img">
                <a href="detalle-inmueble.php?co='.$codigo.'">
                    <img src="' . $imagen . '" class="card-img-top" alt="...">
                    <div class="overlay--codigo">
                        Cod: ' .$codigo. '
                    </div>
                </a>
                <div class="overlay--precio">';
                    if ($api[$i]['Gestion'] == 'Arriendo/venta') {
                        echo '$'.$api[$i]['Canon'] . ' / ' . $api[$i]['Venta'];
                    } else if ($api[$i]['Gestion'] == 'Venta') {
                        echo '$'.$api[$i]['Venta'];
                    } else {
                        echo '$'.$api[$i]['Canon'];
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
                <a href="detalle-inmueble.php?co='.$codigo.'" class="btn btn-primary">Ver Inmueble</a>
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
