<div class="container-fluid menu">

 	<a class="btnClose">X</a>

	<?php

	wp_nav_menu(array(
			"theme_location" => "header_menu",
			"container" => "div",
			"container_class" => "menu-content",
			"items_wrap" => '<ul class="nav flex-column text-center">%3%s</ul>',
			"menu_class" => "nav-item"
		));

	?>
<!-- </div> -->
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
	</ul> -->
</div>