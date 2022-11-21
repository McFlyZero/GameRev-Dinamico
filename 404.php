<?php

get_header();

?>

      <!--=====================================
      =                BANNER                 =
      ======================================-->
      <div class="bannerEstatico"></div>
      <!-- <div class="container-fluid p-0"> -->
        <section class="jd-slider fade-slider">
          <div class="slide-inner">
            <ul class="slide-area">
              <!-- CAMBIAR LAS IMAGENES DEL BANNER -->
              <li>
                <img src="img/banner01.jpg" alt="" class="img-fluid">
              </li>
              <li>
                <img src="img/banner02.jpg" alt="" class="img-fluid">
              </li>
              <li>
                <img src="img/banner03.jpg" alt="" class="img-fluid">
              </li>
              <li>
                <img src="img/banner04.gif" alt="" class="img-fluid">
              </li>
            </ul>
          </div>
          <div class="controller d-none">
            <a class="auto" href="#">
              <i class="fas fa-play fa-xs"></i>
              <i class="fas fa-pause fa-xs"></i>
            </a>
            <div class="indicate-area"></div>
          </div>
        </section>
      <!-- </div> -->

      <!-- BUSCADOR PARA MÓVIL -->

<div class="container d-block d-md-none py-3 pr-2">
  <div class="input-group input-group-sm">
    <input type="text" class="form-control" placeholder="Buscar">
    <div class="input-group-append">
      <span class="input-group-text"><i class="fas fa-search"></i></span>
    </div>
  </div>
</div>

<!-- MENU -->
<div class="container-fluid menu">

  <a href="#" class="btnClose">X</a>
  <ul class="nav flex-column text-center">
    <li class="nav-item">
      <a class="nav-link text-white" href="categorias.html">Noticias de hoy</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-white" href="categorias.html">Nuevos lanzamientos</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-white" href="categorias.html">Próximos lanzamientos</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-white" href="categorias.html">Lo mejor de 2022</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-white" href="categorias.html">Lo mejor de todos los tiempos</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-white" href="categorias.html">Top videojuegos gratis</a>
    </li>
  </ul>
</div>

<!--=====================================
CONTENIDO BLOG
======================================-->
<div class="container-fluid bg-white contenidoInicio pb-4">
  <div class="container">
    <div class="row">
      <!-- COLUMNA IZQUIERDA -->

    <div class="col-12 col-md-8 col-lg-9 p-0 pr-lg-5">
        <h1 class="my-5 text-danger">ERROR 404</h1>
        <h3>Lo sentimos, esta página no existe.</h3>
    </div>

    

<?php
get_sidebar();
?>

            </div>
        </div>
    </div>
</div>

<?php
get_footer();
?>