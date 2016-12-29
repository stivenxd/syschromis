<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<link rel="stylesheet" href="css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="css/MENU.CSS" media="screen" />
<script src="js/alertify.min.js"></script>
<link rel="stylesheet" href="css/alertify.core.css" />
<link rel="stylesheet" href="css/alertify.default.css" />
<script type="text/javascript" src="js/jquery-3.1.0.min.js"></script>
</head>

<body>
<header>
	<div class="container"  style="background: #0DB37D">
		<h1>Menu Inicial </h1>
	</div>
</header>

<div class="container">
	<section class="main row"  >
	<article class=" col-xs-12 col-sm-8 col-md-9  col-lg-9">
		<p>
		<h1> Principal </h1>	
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam elit lorem, placerat nec ex eu, sodales faucibus magna. Fusce eleifend libero at metus tristique, non ullamcorper mi bibendum. Praesent orci sapien, auctor id mollis in, bibendum ac eros. Vivamus lacus orci, blandit quis tincidunt non, molestie a ligula. Nam sit amet libero facilisis, vehicula mauris sed, posuere purus. Nulla ut sodales eros. Etiam vitae bibendum orci, at auctor dolor. Pellentesque finibus quam ac massa mattis, eget tincidunt nisi pharetra. Aenean faucibus sit amet tortor id varius. Integer dictum suscipit purus ut tincidunt. Suspendisse pretium, felis eget tempor pretium, elit magna congue diam, sagittis pharetra velit nisl at purus.
		</p>
	</article>
	<aside class="col-xs-12 col-sm-8 col-md-3  col-lg-3">
		<p>
		<h2><strong> Iniciar Sesion </strong></h2>		
		  
		  <form action="Sesion/Iniciar.php" class="" method="post">		    
		  	<div class="form-group">
		  	    <label>Nombre Usuario</label>
		  		<input class="form-control" id="usuario" name="usuario" maxlength="20">
		  	</div>
		  	<div class="form-group">
		  	    <label>Password</label>
		  		<input class="form-control" id="password" name="password" maxlength="20">
		  	</div>
		  	<div class="form-group">
		  	    <button type="submit" class="btn btn-primary"> Iniciar Sesion</button>
		  	</div>
		  	
		  </form>
		  
		</p>
	</aside>	
</section>

	<div class="row">
		<div class="color1 col-xs-12 col-md-4">
			<p>
			<h3> Ejjemplo1</h3>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam elit lorem, placerat nec ex eu, sodales faucibus magna. Fusce eleifend libero at metus tristique, non ullamcorper mi bibendum. Praesent orci sapien, auctor id mollis in, bibendum ac eros. Vivamus lacus orci, blandit quis tincidunt non, molestie a ligula. Nam sit amet libero facilisis, vehicula mauris sed, posuere purus. Nulla ut sodales eros.
				
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam elit lorem, placerat nec ex eu, sodales faucibus magna. Fusce eleifend libero at metus tristique, non ullamcorper mi bibendum. Praesent orci sapien, auctor id mollis in, bibendum ac eros. Vivamus lacus orci, blandit quis tincidunt non, molestie a ligula. Nam sit amet libero facilisis, vehicula mauris sed, posuere purus. Nulla ut sodales eros.
			</p>
		</div>
		<div class=" col-xs-12 col-md-4">
			<p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam elit lorem, placerat nec ex eu, sodales faucibus magna. Fusce eleifend libero at metus tristique, non ullamcorper mi bibendum. Praesent orci sapien, auctor id mollis in, bibendum ac eros. Vivamus lacus orci, blandit quis tincidunt non, molestie a ligula. Nam sit amet libero facilisis, vehicula mauris sed, posuere purus. Nulla ut sodales eros.
			</p>
		</div>
		<div class="col-xs-12 col-md-4">
			<p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam elit lorem, placerat nec ex eu, sodales faucibus magna. Fusce eleifend libero at metus tristique, non ullamcorper mi bibendum. Praesent orci sapien, auctor id mollis in, bibendum ac eros. Vivamus lacus orci, blandit quis tincidunt non, molestie a ligula. Nam sit amet libero facilisis, vehicula mauris sed, posuere purus. Nulla ut sodales eros.
			</p>
		</div>
	</div>
</div>
	<footer>
		<div class="container" style="background: #5990CB">
			<h3>Esteban Rojas</h3>
		</div>
	</footer>

 
 
 <script src="js/bootstrap.min.js"></script>
 	<?php 
	
if (isset($_GET['noExiste']))
{	
	echo '<script type="text/javascript">
			$(document).ready(function(){
			alertify.error("Datos Ingresados son Erroneos");
			});      
			</script>';
}
if (isset($_GET['blanco']))
{	
	echo '<script type="text/javascript">
			$(document).ready(function(){
			alertify.error("Hay campos vacíos");
			});      
			</script>';
} 
	
		?>
</body>
</html>