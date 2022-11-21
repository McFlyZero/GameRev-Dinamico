<?php
get_header();
?>

<!--=====================================
BANNER                 
======================================-->
<?php include("modules/banner-interior.php") ?>

<!--=====================================
BUSCADOR PARA MÓVIL
======================================-->
<?php include("modules/buscador-movil.php") ?>
<!--=====================================
MENU    
======================================-->
<?php include("modules/menu.php") ?>

<!--=====================================
CONTENIDO BLOG
======================================-->
<div class="container-fluid bg-white contenidoInicio py-2 py-md-4">
  <div class="container">

    <!-- BREADCRUMB -->
    <a href="categorias.html">
      <button class="d-block d-sm-none btn btn-info btn-sm mb-2">
        REGRESAR
      </button>

    </a>

    <ul class="breadcrumb bg-white p-0 mb-2 mb-md-4 breadArticulo">

      <li class="breadcrumb-item inicio"><a href="index.html">Inicio</a></li>
      <li class="breadcrumb-item"><a href="categorias.html">Novedades</a></li>
      <li class="breadcrumb-item active">Persona 5 llega a Xbox</li>

    </ul>



    <div class="row">
      <!-- COLUMNA IZQUIERDA -->

      <div class="col-12 col-md-8 col-lg-9 p-0 pr-lg-5">

        <!-- ARTICULO 01 -->
        <div class="container">

          <div class="d-flex">

            <div class="fechaArticulo">22.10.2022</div>

            <h3 class="tituloArticulo text-right text-muted pl-3 pt-lg-2">Persona 5 llega a Xbox</h3>

          </div>

          <img src="img/articulo10.jpg" alt="Lorem ipsum dolor sit amet" class="img-fluid my-lg-3">

          <p class="textoArticulo my-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione unde recusandae
            voluptates pariatur sapiente nostrum iusto, laudantium facilis, ab harum optio veritatis doloremque dolore
            aspernatur fuga error delectus. Nesciunt, debitis.Lorem ipsum dolor sit amet, consectetur adipisicing elit,
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>

          <!-- PUBLICIDAD -->
          <img src="img/ad09.png" class="img-fluid my-3" width="100%">

          <p class="textoArticulo my-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione unde recusandae
            voluptates pariatur sapiente nostrum iusto, laudantium facilis, ab harum optio veritatis doloremque dolore
            aspernatur fuga error delectus. Nesciunt, debitis.Lorem ipsum dolor sit amet, consectetur adipisicing elit,
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>

          <p class="textoArticulo my-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione unde recusandae
            voluptates pariatur sapiente nostrum iusto, laudantium facilis, ab harum optio veritatis doloremque dolore
            aspernatur fuga error delectus. Nesciunt, debitis.Lorem ipsum dolor sit amet, consectetur adipisicing elit,
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>

          <!-- COMPARTIR EN REDES -->
          <div class="float-right my-3 btnCompartir">

            <div class="btn-group">

              <button type="button" class="btn border-0 text-white" style="background: #1475E0">

                <span class="fab fa-facebook pr-1"></span>

                Facebook

                <span class="lead pl-1">3</span>

              </button>
              <button type="button" class="btn border-0 text-white" style="background: #00A6FF">

                <span class="fab fa-twitter pr-1"></span>

                Twitter

                <span class="lead pl-1">3</span>

              </button>
              <button type="button" class="btn border-0 text-white" style="background: #DD4D41">

                <span class="fab fa-google-plus pr-1"></span>

                Google

                <span class="lead pl-1">3</span>

              </button>

            </div>

          </div>

          <!-- AVANZAR - RETROCEDER -->
          <div class="clearfix"></div>
          <div class="d-md-flex justify-content-between my-3 d-none">

            <a href="articulos.html">Leer artículo anterior</a>

            <a href="articulos.html">Leer artículo siguiente</a>

          </div>

          <!-- DESLIZADOR DE ARTICULOS -->

          <section class="jd-slider deslizadorArticulos my-4">

            <div class="slide-inner">
              <ul class="slide-area">
                <li class="px-3">
                  <a href="articulos.html" class="text-secondary">
                    <img src="img/articulo05.jpg" alt="Lorem ipsum" class="img-fluid">
                    <h6 class="py-2">Type something here</h6>
                  </a>
                  <p class="small">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe doloribus maxime
                    consectetur consequatur et vitae placeat minima...</p>
                </li>

                <li class="px-3">
                  <a href="articulos.html" class="text-secondary">
                    <img src="img/articulo02.jpg" alt="Lorem ipsum" class="img-fluid">
                    <h6 class="py-2">Type something here</h6>
                  </a>
                  <p class="small">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe doloribus maxime
                    consectetur consequatur et vitae placeat minima...</p>
                </li>

                <li class="px-3">
                  <a href="articulos.html" class="text-secondary">
                    <img src="img/articulo03.jpg" alt="Lorem ipsum" class="img-fluid">
                    <h6 class="py-2">Type something here</h6>
                  </a>
                  <p class="small">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe doloribus maxime
                    consectetur consequatur et vitae placeat minima...</p>
                </li>

                <li class="px-3">
                  <a href="articulos.html" class="text-secondary">
                    <img src="img/articulo04.jpeg" alt="Lorem ipsum" class="img-fluid">
                    <h6 class="py-2">Type something here</h6>
                  </a>
                  <p class="small">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe doloribus maxime
                    consectetur consequatur et vitae placeat minima...</p>
                </li>

              </ul>

              <a class="prev" href="">
                <i class="fas fa-angle-left text-muted"></i>
              </a>

              <a class="next" href="">
                <i class="fas fa-angle-right text-muted"></i>
              </a>

              <div class="controller">
                <div class="indicate-area"></div>
              </div>

            </div>

          </section>

          <!-- BLOQUE DE OPINIONES -->
          <h3 style="color: #47B5FF">Opiniones</h3>

          <hr style="border: 1px solid #DFF6FF">

          <div class="row opiniones">

            <div class="col-3 col-sm4 col-lg-2 p-2">
              <img src="img/himeno.jpg" class="img-thumbnail">
            </div>

            <div class="col-9 col-sm-8 col-lg-10 p-2 text-muted">
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, autem iste expedita odio, omnis eaque,
                officia debitis itaque magni
                eos aut corrupti est. Culpa aut tempore natus, debitis odit neque.
              </p>
              <span class="small float-right">> Arturo Quihuis | 03.11.2022</span>
            </div>

            <div class="col-9 col-sm-8 col-lg-10 p-2 text-muted">
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, autem iste expedita odio, omnis eaque,
                officia debitis itaque magni
                eos aut corrupti est. Culpa aut tempore natus, debitis odit neque.
              </p>
              <span class="small float-right">> Iker Marcor | 03.11.2022</span>
            </div>

            <div class="col-3 col-sm-4 col-lg-2 p-2">
              <img src="img/guts.jpg" class="img-thumbnail">
            </div>

          </div>

          <hr style="border: 1px solid #DFF6FF">

          <!-- FOMULARIO DE OPINIONES -->
          <form>
            <label class="text-muted lead">¿Qué te pareció el artículo?</label>
            <div class="row">
              <div class="col-12 col-md-8 col-lg-9">

                <div class="input-group-lg">

                  <input type="text" class="form-control my-3" placeholder="Tu nombre">
                  <input type="email" class="form-control my-3" placeholder="Tu email">

                </div>
              </div>

              <div class="d-none d-md-block col-md-4 col-lg-3">
                <img src="img/upload.png" class="img-fluid mt-md-3 mt-xl-2">
              </div>

            </div>

            <textarea class="form-control my-3" rows="7" placeholder="Escribe aquí tu mensaje"></textarea>
            <input type="submit" class="btn btn-dark btn-lg btn-block" value="Enviar">

          </form>

          <!-- PUBLICIDAD -->
          <img src="img/ad10.png" class="img-fluid my-3 mb-4 d-block d-md-none" width="100%">

        </div>

      </div>

      <!-- COLUMNA DERECHA -->
      <?php get_sidebar(); ?>

    </div>
  </div>
</div>


<!--==================================
FOOTER
====================================-->
<?php get_footer(); ?>