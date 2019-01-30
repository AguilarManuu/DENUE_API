<!DOCTYPE html>
<html lang="es-MX">
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <title>DENUE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<style type="text/css">
		section {
    padding: 60px 0;
}

section .section-title {
    text-align: center;
    color: #007b5e;
    margin-bottom: 50px;
    text-transform: uppercase;
}
#footer h5{
	padding-left: 10px;
    border-left: 3px solid #eeeeee;
    padding-bottom: 6px;
    margin-bottom: 20px;
    color: black;
}
#footer a {
    color: black;
    text-decoration: none !important;
    background-color: transparent;
    -webkit-text-decoration-skip: objects;
}

@media (max-width:767px){
	#footer h5 {
    padding-left: 0;
    border-left: transparent;
    padding-bottom: 0px;
    margin-bottom: 10px;
}
}
	</style>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    		<span class="navbar-toggler-icon"></span>
  		</button>
  		<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    		<a class="navbar-brand" href="">DENUE</a>
    		<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      			<li class="nav-item active">
        			<a class="nav-link" href="">Inicio<span class="sr-only">(current)</span></a>
      			</li>
      			<li class="nav-item">
        			<a class="nav-link" href="">Establecimientos</a>
      			</li>
    		</ul>
  		</div>
	</nav>
	<div class="container">
		<br>
		<div class="card">
  			<div class="card-header">
    			<strong>PRUEBA DEL USO DE DENUE API</strong>
  			</div>
  			<div class="card-body">
  				<blockquote>
  						<h5 class="card-title">La API del DENUE</h5>
  				</blockquote>
  				<cite>
    				<p class="card-text text-justify">Según (INEGI). La API del DENUE, te permite consultar datos de identificación, ubicación, actividad económica y tamaño de más de 5 millones de establecimientos a nivel nacional, por entidad federativa y municipio. Puedes utilizar la API para crear aplicaciones que muestren la información directamente de las bases de datos del INEGI en el preciso momento en que se actualiza"</p><br>
  				</cite>
    			<a href="http://www.beta.inegi.org.mx/servicios/api_denue.html" class="btn btn-primary">Más información</a>
  			</div>
		</div>


		<br>
        <form class="form-buscar">
			<div class="form-group row">
				<label class="col-sm-1 col-form-label" for="nombre">Nombre </label>
				<div class="form-group col-sm-3" data-toggle="tooltip" title="Nombre del establecimiento como: Hoteles, Restaurantes, Estacionamientos, Etc.">
					<input class="form-control" type="text" id="nombre" value="Restaurantes" autocomplete="off" placeholder="Nombre" required="" />
				</div>
				<label class="col-sm-1 col-form-label" for="lat">Latitud: </label>
				<div class="col-sm-3">
					<input class="form-control" type="text" id="lat" aria-label="Latitud"  value="21.85717833"/>
				</div>
				<label class="col-sm-1 col-form-label" for="lon">Longitud: </label>
				<div class="col-sm-3">
					<input class="form-control" type="text" id="lon" aria-label="Longitud"  value="-102.28487238" tabindex="517" />
				</div>
			</div>
			<div class="form-group row">
				<!-- <label class="col-sm-1 col-form-label" for="mts">Metros: </label> -->
				<label for="mts" class="col-sm-1 col-form-label">Metros alrededdor</label>
				<div class="col-sm-3" data-toggle="tooltip" title="La distacia alrededor del lugar establecido, máximo 5,000 Metros, mínimo 100 Metros">
				    <select class="form-control" id="mts">
				      	<option value="50">50</option>
				      	<option value="100">100</option>
				      	<option value="500">500</option>
				      	<option value="1000">1000</option>
				      	<option value="2000">2000</option>
				      	<option value="3000">3000</option>
				      	<option value="4000">4000</option>
				      	<option value="5000">5000</option>
				    </select>
					<!-- <input class="form-control" type="number" id="mts" aria-label="Metros" value="100" min="50" max="5000" required="" />	 -->
				</div>
	            <button type="submit" class="btn btn-lg btn-primary" id="btn_obtener">VER AHORA</button>
			</div>
        </form>
        <div class="establecimientos row" id="establecimientos">
        	<!-- Aquí se imprimen los datos encontrador -->
        </div>
	</div> <!-- End Container -->



<!-- Footer -->
	<br>
	<section id="footer" class="bg-light">
		<div class="container">
			<div class="row text-center text-xs-center text-sm-left text-md-left">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<h5>Denue</h5>
					<ul class="list-unstyled quick-links">
						<li><a href=""><i class="fa fa-angle-double-right"></i>Inicio</a></li>
						<li><a href=""><i class="fa fa-angle-double-right"></i>About</a></li>
					</ul>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<h5>Links</h5>
					<ul class="list-unstyled quick-links">
						<li><a href=""><i class="fa fa-angle-double-right"></i>Inicio</a></li>
						<li><a href=""><i class="fa fa-angle-double-right"></i>About</a></li>
					</ul>
				</div>
			</div>		
		</div>
			<br>
			<cite>
				<center>Derechos reservados <a href="https://aguilarmanu.github.io/cv/" data-toggle="tooltip" title="Puedes solicitar ayuda aquí"> <strong>AguilarManu</strong></a></center>
			</cite>
	</section>
	<!-- ./Footer -->

	<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<!-- Import our script API -->
	<script type="text/javascript" src="js/apiDenue.js" ></script>

</body>
</html>