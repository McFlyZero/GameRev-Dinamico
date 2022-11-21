<?php
get_header();
?>

<?php include("modules/banner-index.php"); ?>			

<!--==================================
BUSCADOR PARA MOVIL
====================================-->

<?php include("modules/buscador-movil.php");?>

<!--==================================
 MENU 
====================================-->

<?php include("modules/menu.php"); ?> 

<!--==================================
CONTENIDO BLOG
====================================-->  
<div class="container-fluid bg-white contenidoInicio pb-4">
	<div class="container">
		<div class="row">

			<!-- COLUMNA IZQUIERDA -->
			<div class="col-12 col-md-8 col-lg-9 p-0 pr-lg-5">
				<h1 class="my-5 text-danger">ERROR 404</h1>
				<h3>Lo sentimos, esta página no existe.</h3>
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