<style>
        #wrap-preload {
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            background: #fff;
            opacity: 1;
            visibility: visible;
            transition: opacity .5s ease, visibility .5s ease;
            z-index: 998;
        }
        #wrap-preload.close {
            opacity: 0;
            visibility: hidden;
        }

        .fixed-top {
            z-index: 300 ;
        }

        #wrap-preload>img.gif {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate3d(-50%, -50%, 0);
            z-index: 999;
        }
    </style>
    <div id="wrap-preload">
        <img src="images/preloader.gif" alt="gif" class="gif" id="gif">
    </div>
    <script>
       var loader = document.getElementById("wrap-preload");
        window.addEventListener("load", function () {
            loader.style.visibility = "hidden";
        });
    </script>

<nav class="navbar navbar-expand-xl navbar-light  bg-light fixed-top menu-transparent" id="menu">
  <a class="navbar-brand ml-lg-4 pl-lg-2 logo" href="./">
      <img src="" alt="Logo de la Empresa" class="">
  </a>
  <button class="navbar-toggler"  type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto align-items-center">
      <li class="nav-item <?php if($page == 'inicio'){echo 'active';};?>">
        <a class="nav-link" href="./">Inicio</a>
      </li>
      <li class="nav-item <?php if($page == 'nosotros'){echo 'active';};?>">
        <a class="nav-link" href="./nosotros.php">Nosotros</a>
      </li>
      <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle text-center" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Servicios
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown2" class="text-center">
          <a class="dropdown-item" href="./arriendos.php">Arriendos</a>
          <a class="dropdown-item" href="./ventas.php" >Ventas</a>
          <a class="dropdown-item" href="./avaluos.php" >Avalúos</a>
          <a class="dropdown-item" href="./reparaciones-y-remodelaciones.php" >Reparaciones y Remodelaciones</a>
        </div>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
          <a class="dropdown-item" href="https://www.simiinmobiliarias.com/base/simired/simidocs/index.php?inmo=459&tipo=2" target="_blank">Arrendatarios</a>
          <a class="dropdown-item" href="https://www.simiinmobiliarias.com/base/simired/simidocs/index.php?inmo=459&tipo=1" target="_blank">Propietarios</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="https://gateway2.tucompra.com.co/sites/felixtrujillo/" target="_blank"><img src="images/logopse.png" alt="" height="25px"> Pagos PSE</a>
        </div>
      </li>
      <li class="nav-item <?php if($page == 'inmuebles'){echo 'active';};?>">
        <a class="nav-link" href="./inmuebles.php?">Inmuebles</a>
      </li>
      <li class="nav-item <?php if($page == 'proyectos'){echo 'active';};?>">
        <a class="nav-link" href="./proyectos.php">Proyectos</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-center" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Clientes
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="https://www.simiinmobiliarias.com/base/simired/simidocs/index.php?inmo=459&tipo=2" target="_blank">Arrendatarios</a>
          <a class="dropdown-item" href="https://www.simiinmobiliarias.com/base/simired/simidocs/index.php?inmo=459&tipo=1" target="_blank">Propietarios</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="https://gateway2.tucompra.com.co/sites/felixtrujillo/" target="_blank"><img src="images/logopse.png" alt="" height="25px"> Pagos PSE</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="modal" data-target="#formularios" >Formularios</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="modal" data-target="#consigna" >Consigna Tu Inmueble</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./contacto.php">Contacto</a>
      </li>
      <li class="nav-item">
        <a href="https://gateway2.tucompra.com.co/sites/felixtrujillo/" target="_blank"><img src="images/logopse.png" alt="" width="60px "></a>
        
      </li>
    </ul>
  </div>
</nav>
<div class="espacio-menu">
</div>