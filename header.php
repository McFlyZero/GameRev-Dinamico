<!DOCTYPE html>
<html lang="en">
<head>
  <base href="<?php echo bloginfo("template_url")."/"; ?>" target="_blank">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>GameRev</title>
  <link rel="icon" href="img/GameRev-icon.png">
  <?php wp_head(); ?>
</head>

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

  <script src="https://kit.fontawesome.com/e34637f33b.js" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Chewy|Open+Sans" rel="stylesheet">

  <link rel="stylesheet" href="css/plugins/jquery.jdSlider.css">
  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"> -->

  <link rel="stylesheet" href="css/style.min.css">

  <!-- PLUGINS DE JS -->

  <!-- jQuery library -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <!-- jQuery con animaciones -->
  <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>

  <!-- Popper JS -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

  <script src="js/plugins/jquery.jdSlider-latest.js"></script>
  <script src="js/plugins/pagination.min.js"></script>

  <!-- Scrollorama -->
  <script src="js/plugins/jquery.superscrollorama.js"></script>
  <script src="js/plugins/TweenMax.min.js"></script>

  <!-- Scrollup -->
  <script src="js/plugins/scrollUP.js"></script>
  <script src="js/plugins/jquery.easing.js"></script>

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
  
</head>
<!-- ENCABEZADO -->
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
          <!-- Le puse 1 más de padding en top era pt-2 -->
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

       <!-- ENTRADA DEL BUCADOR -->
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