<?php
ini_set("session.cookie_lifetime","10000"); // Tiempo Vida Session
session_start();

if (isset($_SESSION['NAME']))
{	   
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<link rel="stylesheet" href="../css/bootstrap.min.css"/>
<!--<link rel="stylesheet" type="text/css" href="../css/MENU.CSS" media="screen" />!-->
<link rel="stylesheet" type="text/css" href="../css/menu1.CSS" media="screen" />
<script src="../js/alertify.min.js"></script>
<link rel="stylesheet" href="../css/alertify.core.css" />
<link rel="stylesheet" href="../css/alertify.default.css" />
<script type="text/javascript" src="../js/jquery-3.1.0.min.js"></script>
<style>
</style>
</head>

<body>


	<div class="example3" style="position: z-index="9999"">
  <nav class="navbar navbar-inverse navbar-static-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar3">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="Principal.php"><img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcSfrp1S_Og8P56cDavBs5xGntXF-Sa2BA9A9w_lEbIaGFjXuSSklQ" alt="Dispute Bills">
        </a>
      </div>
      <div id="navbar3" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
          <li class="active"><a href="#">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Contact</a></li>
          <li class="dropdown">
            <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li class="divider"></li>
              <li class="dropdown-header">Nav header</li>
              <li><a href="#">Separated link</a></li>
              <li><a href="#">One more separated link</a></li>
              
            </ul>
          </li>
          <li ><a href="../Clientes/Clientes.php">Clientes</a></li>
          <li ><a href="../Sistema/Sistema.php">Sistema</a></li>
          <li class="titulo naranja"><a href="../Perfil/perfil.php">Perfil</a></li>
          <li class="titulo rojo"><a href="../Sesion/Cerrar.php">Cerrar Session</a></li>
          
        </ul>
      </div>
      <!--/.nav-collapse -->
    </div>
    <!--/.container-fluid -->
  </nav>
</div>

<div class="container">
	<section class="main row"  >
	<article class=" col-xs-12 col-sm-8 col-md-9  col-lg-9">
		<p>
		<h1> Mi Perfil </h1>	
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam elit lorem, placerat nec ex eu, sodales faucibus magna. Fusce eleifend libero at metus tristique, non ullamcorper mi bibendum. Praesent orci sapien, auctor id mollis in, bibendum ac eros. Vivamus lacus orci, blandit quis tincidunt non, molestie a ligula. Nam sit amet libero facilisis, vehicula mauris sed, posuere purus. Nulla ut sodales eros. Etiam vitae bibendum orci, at auctor dolor. Pellentesque finibus quam ac massa mattis, eget tincidunt nisi pharetra. Aenean faucibus sit amet tortor id varius. Integer dictum suscipit purus ut tincidunt. Suspendisse pretium, felis eget tempor pretium, elit magna congue diam, sagittis pharetra velit nisl at purus.
		</p>
	</article>
	<aside class="col-xs-12 col-sm-8 col-md-3  col-lg-3">
		<p>
		<h2><strong> Datos de Perfil </strong></h2>		
		  <div class="form-group">
		  	    <label>Nombre:</label>
		  		<label><?php echo $_SESSION['NAME'] ?></label>
		  </div>
		  <div class="form-group">
		  	    <label>ID:</label>
		  		<label><?php echo $_SESSION['ID'] ?></label>
		  </div>
		  <div class="form-group">
		  	    <label>ID CARD:</label>
		  		<label><?php echo $_SESSION['CARD'] ?></label>
		  </div>
		  <div class="form-group">
		  	    <label>Cargo:</label>
		  		<label><?php ?></label>
		  </div>		 		  
		  
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
			<h3>Esteban Rojas. Todos los Derechos Reservados ®. 2016</h3>
		</div>
	</footer>

 

 <script src="../js/bootstrap.min.js"></script>
</body>
</html>

<?php
}
else
{
$dirección = "../Index.php"; //obtenemos la pagina en la que nos encontramos
header ("refresh:2; url=$dirección"); //refrescamos cada 10 seg.	

?>

<center><h1><font color="red">Usted debe Iniciar Sesion </font> <h1></center><br />
<center><h3>Redirigiendo en 2 seg ....</h3></center><br />
<center><img src="../image/cargando.gif"> </center>


<?php
}
?>