<?php include ('PHP/coneccion.php'); ?>

<!DOCTYPE html>
<html lang="es">	
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>GAD</title>
	<meta name="description" content="Dash Board creada para llevar los conteos hostoricos de los tickes">
	<meta name="keywords" content="Dashboard_dilo">
	<meta name="Autor" content="Jose Luis Sierra Ramirez, Ingeniero Desarrollador Dashboard_dilo">
	<link href="https://fonts.googleapis.com/css?family=Berkshire+Swash|Black+Han+Sans" rel="stylesheet">
	<link rel="stylesheet" href="estilos/estilo.css">
	<script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js" integrity="sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+" crossorigin="anonymous"></script>
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/Chart.js"></script>
</head>
<body>
	<header class="menu">
		<nav>
			<ul>
				<li id="Home"><a href="index.php"><em class="fas fa-home"></em> Home</a></li>
				<li><a href="#"><em class="fas fa-database"></em> Datos</a>
				<ul>
					<li><a href="#"><em class= "fas fa-angle-right"></em> Datos 1</a> </li>
					<li><a href="#"><em class= "fas fa-angle-right"></em> Datos 2</a></li>
				</ul>
				</li>
				<li><a href="#"><em class="fas fa-table"></em> Tablas</a>
				<ul>
					<li><a href="#"><em class= "fas fa-angle-right"></em> Tabla 1</a></li>
					<li><a href="#"><em class= "fas fa-angle-right"></em> Tabla 2</a></li>
				</ul>
				</li>
				<li><a href="#"><em class="fas fa-chart-line"></em> Hostoricos</a>
				<ul>
					<li><a href="#"><em class= "fas fa-angle-right"></em> Historico 1</a></li>
					<li><a href="#"><em class= "fas fa-angle-right"></em> Historico 2</a></li>
				</ul>
				</li>
				<li><a href="formulario_insercion_alarmas.php"><em class="fas fa-file-excel"></em> Import</a></li>
				<li><a href="#"><em class="fas fa-download"></em> export</a></li>
			</ul>
		</nav>
	</header>
	<div id="body">
	<nav class="menu-vertical">
		<em><strong><a href="#" class="active"><em class="fas fa-tachometer-alt"></em> DASHBOARD</a></strong></em>
		<a href="arbol_alarmas.php"><strong><em class= "fas fa-angle-right"></em></strong> Arbol de alarmas</a>
		<a href="#"><strong><em class= "fas fa-angle-right"></em></strong> Zona Costa</a>
		<a href="#"><strong><em class= "fas fa-angle-right"></em></strong> Zona Oriente Bogota</a>
		<a href="#"><strong><em class= "fas fa-angle-right"></em></strong> Zona Oriente Costa</a>
		<a href="#"><strong><em class= "fas fa-angle-right"></em></strong> Zona Oriente Panama</a>
		<a href="#"><strong><em class= "fas fa-angle-right"></em></strong> Linea</a>
		<a href="#"><strong><em class= "fas fa-angle-right"></em></strong> Tiempos</a>		
	</nav>

	
	<section class="arbol_alarma effect">
		<header class="	title">	
			<h1 class="title-card">Historico Arbol Alarmas por Semana</h1>
				<ul class="set">	
					<li><a class="setting" href="#"><em class="fas fa-cogs"></em></a></li>
				</ul>
		</header>
			<p><canvas id="arbol_alarmas" width="350" height="160"></canvas></p>

	</section>
	<section class="arbol_alarma effect">
		<header class="	title">	
			<h1 class="title-card">Historico Arbol Alarmas por Semana</h1>
				<ul class="set">	
					<li><a class="setting" href="#"><em class="fas fa-cogs"></em></a></li>
				</ul>
		</header>
			<p><canvas id="arbol_alarmas_rango_cantidad" width="350" height="160"></canvas></p>

	</section>
	<section class="arbol_alarma effect">
		<header class="	title">	
			<h1 class="title-card">Historico Arbol Alarmas por Categoria</h1>
				<ul class="set">	
					<li><a class="setting" href="#"><em class="fas fa-cogs"></em></a></li>
				</ul>
		</header>
			<p><canvas id="arbol_alarmas_rango" width="350" height="160"></canvas></p>
			
	</section>
	<section class="arbol_alarma effect">
		<header class="	title">	
			<h1 class="title-card">Historico Tipo Arbol Alarmas por Categoria Grafico Tipo Dona</h1>
				<ul class="set">	
					<li><a class="setting" href="#"><em class="fas fa-cogs"></em></a></li>
				</ul>
		</header>
			<p><canvas id="arbol_alarmas_rango_dona" width="350" height="160"></canvas></p>
			
	</section>
	
	</div>
	
	<?php include ('PHP/graficas_alarmas.php'); ?>
	

	<footer class="footer">
		<p><small> &copy Lorem Ipsum </small></p>	
	</footer>

	
	
</body>
</html>

