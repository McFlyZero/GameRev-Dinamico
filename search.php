<?php 
get_header();
?>

<!--==================================
BANNER
====================================-->
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
				
				<h1 class="my-5 text-danger">Sobre Mí</h1>
				<h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem quis, minima non blanditiis ea placeat doloribus tempora eveniet molestias. Deserunt illum, suscipit in corrupti magnam harum nobis reprehenderit, nulla modi illo minima perferendis, asperiores placeat ipsam laudantium? Odio ratione repudiandae voluptas, rem quasi asperiores, quo impedit nihil reprehenderit modi vitae.</h3>

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