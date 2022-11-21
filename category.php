<?php
get_header();
?>

<!--=====================================
BANNER                 
======================================-->
<?php include("modules/banner-interior.php")?>

<!--=====================================
BUSCADOR PARA MÓVIL
======================================-->
<?php include("modules/buscador-movil.php")?>
<!--=====================================
MENU    
======================================-->
<?php include("modules/menu.php")?>
<!--=====================================
CONTENIDO BLOG
======================================-->



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
        <!-- ARTICULO 01 -->
        <div class="row">

          <div class="col-12 col-lg-5">

            <a href="articulos.html">
              <h5 class="d-block d-lg-none py-3">Top juegos gratuitos</h5>
            </a>
            <div class="d-block d-lg-none fecha mt-3">30.09.2022</div>

            <img src="img/articulo01.jpg" alt="Lorem ipsum dolor sit amet" class="img-fluid" width="100%">

          </div>

          <div class="col-12 col-lg-7 introArticulo">

            <a href="articulos.html">
             <h4 class="d-none d-lg-block">Top juegos gratuitos</h4>
            </a>
            <p class="my-2 my-lg-5">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quo facere eligendi impedit reprehenderit earum quia est.</p>

            <a href="articulos.html" class="float-right">Leer Más</a>

            <div class="d-none d-lg-block fecha">30.09.2022</div>
            
          </div>
        </div>
        <hr class="mb-4 mb-lg-5" style="border: 1px solid #59A8DE">

        <!-- ARTICULO 02 -->
        <div class="row">

          <div class="col-12 col-lg-5">
            <a href="articulos.html">
             <h5 class="d-block d-lg-none py-3">Lanzamiento de OW2</h5>
            </a>
            <div class="d-block d-sm-block d-lg-none fecha mt-3">30.09.2022</div>

            <img src="img/articulo02.jpg" alt="Lorem ipsum dolor sit amet" class="img-fluid" width="100%">

          </div>

          <div class="col-12 col-lg-7 introArticulo">
            <a href="articulos.html">
             <h4 class="d-none d-lg-block">Lanzamiento de OW2</h4>
            </a>
            <p class="my-2 my-lg-5">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quo facere eligendi impedit reprehenderit earum quia est.</p>

            <a href="articulos.html" class="float-right">Leer Más</a>

            <div class="d-none d-lg-block fecha">30.09.2022</div>
            
          </div>
        </div>
        <hr class="mb-4 mb-lg-5" style="border: 1px solid #59A8DE">
        <!-- PUBLICIDAD -->
        <div class="d-block d-lg-none">

          <img src="img/ad02.jpg" class="img-fluid" width="100%">

        </div>

        <!-- ARTICULO 03 -->
        <div class="row">

          <div class="col-12 col-lg-5">
            <a href="articulos.html">
              <h5 class="d-block d-lg-none py-3">¿Dónde está Xur?</h5>
            </a>
            <div class="d-block d-lg-none fecha mt-3">30.09.2022</div>

            <img src="img/articulo03.jpg" alt="Lorem ipsum dolor sit amet" class="img-fluid" width="100%">

          </div>

          <div class="col-12 col-lg-7 introArticulo">
            <a href="articulos.html">
             <h4 class="d-none d-lg-block">¿Dónde está Xur?</h4>
            </a>
            <p class="my-2 my-lg-5">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quo facere eligendi impedit reprehenderit earum quia est.</p>

            <a href="articulos.html" class="float-right">Leer Más</a>

            <div class="d-none d-lg-block fecha">30.09.2022</div>
            
          </div>
        </div>
        <hr class="mb-4 mb-lg-5" style="border: 1px solid #59A8DE">

      <!-- ARTICULO 04 -->
        <div class="row">

          <div class="col-12 col-lg-5">
            <a href="articulos.html">
              <h5 class="d-block d-lg-none py-3">Rhapsody's Remix Event</h5>
            </a>
            <div class="d-block d-sm-block d-md-block d-lg-none fecha mt-3">30.09.2022</div>

            <img src="img/articulo04.jpeg" alt="Lorem ipsum dolor sit amet" class="img-fluid" width="100%">

          </div>

          <div class="col-12 col-lg-7 introArticulo">
            <a href="articulos.html">
             <h4 class="d-none d-lg-block">Rhapsody's Remix Event</h4>
            </a>
            <p class="my-2 my-lg-5">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quo facere eligendi impedit reprehenderit earum quia est.</p>

            <a href="articulos.html" class="float-right">Leer Más</a>

            <div class="d-none d-lg-block fecha">30.09.2022</div>
            
          </div>
        </div>
        <hr class="mb-4 mb-lg-5" style="border: 1px solid #59A8DE">

        <!-- ARTICULO 05 -->
        <div class="row">

          <div class="col-12 col-lg-5">
            <a href="articulos.html">
              <h5 class="d-block d-lg-none py-3">Venta de otoño de Ubisoft</h5>
            </a>
            <div class="d-block d-lg-none fecha mt-3">29.09.2022</div>

            <img src="img/articulo05.jpg" alt="Lorem ipsum dolor sit amet" class="img-fluid" width="100%">

          </div>

          <div class="col-12 col-lg-7 introArticulo">
            <a href="articulos.html">
              <h4 class="d-none d-lg-block">Venta de otoño de Ubisoft</h4>
            </a>
            <p class="my-2 my-lg-5">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quo facere eligendi impedit reprehenderit earum quia est.</p>

            <a href="articulos.html" class="float-right">Leer Más</a>

            <div class="d-none d-lg-block fecha">30.09.2022</div>
            
          </div>
        </div>
        <hr class="mb-4 mb-lg-5" style="border: 1px solid #59A8DE">

        <div class="container d-none d-md-block">
          <ul class="pagination justify-content-center"></ul>
        </div>
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