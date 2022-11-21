<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Forma nativa de html -->
  <base href="<?php echo bloginfo("template_url")."/"; ?>" target="_blank">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>GameRev</title>
  <link rel="icon" href="img/GameRev-icon.png">
  <?php wp_head(); ?>

  <!--==================================
  PRELOAD
  ====================================-->
  <div id="preload">
    
    <div id="porcentajeCarga">0%</div>

    <div id="lineaCarga">

      <div id="rellenoCarga"></div>

    </div>

    <div id="estadoCarga"></div>

  </div>
  


  <!--==================================
  CABECERA
  ====================================-->
<header class="container-fluid">
  <div class="container p-0">
    <div class="row">

      <!-- LOGO -->
      <div class="col-10 col-sm-11 col-md-8 col-lg-7 pt-1 pt-lg-2 px-xl-0">

        <a href="index.html">

          <img src="img/GameRev-icon.png" alt="logo de GameRev" class="img-fluid logotipo">

        </a>
      </div>
      <!-- REDES SOCIALES -->
      <div class="d-none d-md-block col-2 col-lg-3 redes">

          <ul class="d-flex justify-content-end pt-3 mt-1">

            <li>
              <a href="https://www.facebook.com" target="blank">
                <i class="fa-brands fa-facebook-f lead float-left rounded-circle text-white mr-1"></i>
              </a>
            </li>

            <li>
              <a href="https://www.instagram.com" target="blank">
                <i class="fa-brands fa-instagram lead float-left rounded-circle text-white mr-1"> </i>
              </a>
            </li>

            <li>
              <a href="https://www.twitter.com" target="blank">
                <i class="fa-brands fa-twitter lead float-left rounded-circle text-white mr-1">   </i>
              </a>
            </li>

            <li>
              <a href="https://www.youtube.com" target="blank">
                <i class="fa-brands fa-youtube lead float-left rounded-circle text-white mr-1"> 
                </i>
              </a>
              </li>

            <li>
              <a href="https://www.snapchat.com" target="blank">
                <i class="fa-brands fa-snapchat lead float-left rounded-circle text-white mr-1">  </i>
              </a>
            </li>

          </ul>
      </div>

      <!-- BUSCADOR Y BOTON MENÚ -->
      <div class="col-2 col-sm-1 col-md-2 col-lg-2 d-flex justify-content-end pt-2 mt-1">
        <!-- Buscador -->
        <div class="d-none d-md-block pr-4 pr-lg-5 mt-3">
          <i class="fa-solid fa-search lead" data-toggle="collapse" data-target="#buscador"></i>
        </div>

        <!-- Menu -->
        <div class="m-0 mt-sm-1 mt-md-0 mt-lg-1 pr-0 pr-sm-2 pr-lg-3 py-2">
          <i class="fa-solid fa-bars lead"></i>
        </div>

       </div>

       <!-- ENTRADA DEL BUSCADOR -->
        <div id="buscador" class="collapse col-12">
          <div class="input-group float-right w-50 pl-xl-5 pb-3">
            <input type="text" class="form-control" placeholder="Buscar">
            <div class="input-group-append">
              <span class="input-group-text">
                <i class="fa-solid fa-search"></i>
              </span>
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </header>
</head>

<body>

<!-- REDES SOCIALES PARA MÓVIL-->
      <div class="d-block d-md-none redes redesMovil p-0 bg-white w-100 pt-2">

          <ul class="d-flex justify-content-center p-0">

            <li>
              <a href="https://www.facebook.com" target="blank">
                <i class="fa-brands fa-facebook-f lead rounded-circle text-white mr-3 mr-sm-4"></i>
              </a>
            </li>

            <li>
              <a href="https://www.instagram.com" target="blank">
                <i class="fa-brands fa-instagram lead rounded-circle text-white mr-3 mr-sm-4"> </i>
              </a>
            </li>

            <li>
              <a href="https://www.twitter.com" target="blank">
                <i class="fa-brands fa-twitter lead rounded-circle text-white mr-3 mr-sm-4">   </i>
              </a>
            </li>

            <li>
              <a href="https://www.youtube.com" target="blank">
                <i class="fa-brands fa-youtube lead rounded-circle text-white mr-3 mr-sm-4"> 
                </i>
              </a>
            </li>

           <li>
              <a href="https://www.snapchat.com" target="blank">
                <i class="fa-brands fa-snapchat lead float-left rounded-circle text-white mr-3 mr-sm-2">  </i>
              </a>
            </li>

          </ul>
      </div>