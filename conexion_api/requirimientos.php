<!-- Detalle inmueble -->
<!-- incluir esto en detalle-inmueblle.php -->
    <!-- Recoger la variable de codigo -->
    <?php $codigo = $_GET["co"]; ?>
    <!-- Convertir la variable de php a javaScript -->
    <!-- Este archivo debe ir antes de detalle_inmueble.js -->
    <?php echo "<script> var codigoInmueble ='" . $codigo . "';</script>"; ?>
<!-- fin de detalle inmueble -->

<!-- Lista de inmueble -->

<?php
    $ciudad=0;
    $barrio=0;
    $gestion=0;
    $tipo_inmueble=0;
    $alcobas =0;
    $banos=0;
    $min=0;
    $max=0;
    
if(isset($_GET["ci"]) || isset($_GET["bar"]) || isset($_GET["ge"]) || isset($_GET["in"]) 
    || isset($_GET["al"]) || isset($_GET["ban"]) || isset($_GET["min"]) || isset($_GET["max"]))
    {
        $ciudad= $_GET["ci"];
        $barrio= $_GET["bar"];
        $gestion= $_GET["ge"];
        $tipo_inmueble= $_GET["in"];
        $alcobas = $_GET["al"];
        $banos= $_GET["ban"];
        $min=$_GET["min"];
        $max=$_GET["max"];
    }
?>

<!-- pasar las variables a PHP-->

<?php
 echo '<script>var ciudad = ' . $ciudad . '</script>';
 echo '<script>var barrio = ' . $barrio . '</script>'; 
 echo '<script>var gestion = ' . $gestion . '</script>'; 
 echo '<script>var tipo_inmueble = ' . $tipo_inmueble . '</script>'; 
 echo '<script>var alcobas = ' . $alcobas . '</script>'; 
 echo '<script>var banos = ' . $banos . '</script>'; 
 echo '<script>var min = ' . $min . '</script>'; 
 echo '<script>var max = ' . $max . '</script>'; 
 ?>

<!-- fin de listar inmuebles -->

<!-- Paginador -->
<?php
if(isset($_GET["pag"])){
    $pagina = $_GET["pag"];
}else{
    $pagina=1;
}
?>
<!-- fin de paginador -->



