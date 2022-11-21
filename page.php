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
GRID DE CATEGORIAS
======================================-->
<div class="container-fluid py-2 py-md-5 bg-white grid">
  <div class="container p-0">
    <div class="d-flex">

      <div class="d-flex flex-column columna1">
        <figure class="p-2 bg-info photo1" vinculo="categorias.html">
          <p class="text-uppercase p-1 p-md-3 p-xl-4">Cyberpunk renace con Edgerunners</p>
        </figure>
        <figure class="p-2 bg-warning photo2" vinculo="categorias.html">
          <p class="text-uppercase p-1 p-md-3 p-xl-4">Lanzamiento de Soul Hackers 2</p>
        </figure>
        <figure class="d-block d-md-none p-2 bg-warning photo6" vinculo="categorias.html">
           <p class="text-uppercase p-1 p-md-3 p-xl-4">Video Juegos más populares de este año</p>
        </figure>
      </div>

      <div class="d-flex flex-column flex-fill columna2">
        <div class="d-block d-md-flex">
          
          <figure class="p-2 bg-success flex-fill photo3" vinculo="categorias.html">
             <p class="text-uppercase p-1 p-md-3 p-xl-4">Mejores remakes de la década</p>
          </figure>
          <figure class="p-2 bg-primary flex-fill photo4" vinculo="categorias.html">
             <p class="text-uppercase p-1 p-md-3 p-xl-4">Próximos lanzamientos</p>
          </figure>
          
        </div>  

        <figure class="p-2 bg-danger photo5" vinculo="categorias.html">
           <p class="text-uppercase p-1 p-md-3 p-xl-4">Nuevo DLC de la franquicia Monster Hunter</p>
        </figure>

      </div>

    </div>

  </div>
</div>
<!--=====================================
CONTENIDO BLOG
======================================-->
<div class="container-fluid bg-white contenidoInicio pb-4">
  <div class="container">
    <div class="row">
      <!-- COLUMNA IZQUIERDA -->

    <div class="col-12 col-md-8 col-lg-9 p-0 pr-lg-5">
        <h1 class="my-5 text-danger">SOBRE MI</h1>
        <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis quasi, 
        magnam consequuntur similique reiciendis, ullam iure fuga omnis vitae iusto quia, 
        accusamus deserunt incidunt cumque ipsum natus odio non ex</h3>
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