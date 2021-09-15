<?php
    require_once 'variables/config.php';

    $codigo = 0;

    if(isset($_GET['co'])){
        $codigo = $_GET['co'];
    }

    $ch = curl_init();
    $headers =  'Authorization:' . TOKEN;
    curl_setopt($ch, CURLOPT_URL, PROTOCOLO.'://www.simi-api.com/ApiSimiweb/response/v2/inmueble/codInmueble/'.$codigo.'');
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
    curl_setopt($ch, CURLOPT_USERPWD, $headers);
    $result = curl_exec($ch);
    curl_close($ch);
    $r = json_decode($result, true);
    $r['ValorVenta'] = number_format($r['ValorVenta']);
    $r['ValorCanon'] = number_format($r['ValorCanon']);
    // $r['Administracion'] = number_format($r['Administracion']);

?>