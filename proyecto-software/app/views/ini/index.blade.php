@extends ('layouts.master')

@section ('title') Hospital Veterinario Provet @stop

@section ('content')

			<!-- NAVBAR -->

 			<nav class="navbar navbar-inverse" role="navigation">
				 <div class="container-fluid">

    				<!-- Brand and toggle get grouped for better mobile display -->
    				<div class="navbar-header">
    					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
    						<span class="sr-only">Toggle navigation</span>
					        <span class="icon-bar"></span>
    					    <span class="icon-bar"></span>
  					      <span class="icon-bar"></span>
 				     	</button>

 				     	<a class="navbar-brand" href='index'>Inicio</a>
    				</div>

    				<!-- Collect the nav links, forms, and other content for toggling -->
				    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				    	<ul class="nav navbar-nav">
				    		<li class="active"><a href="loggin">Iniciar Sesión</a></li>
							<li><a href="quienessomos">Quiénes Somos</a></li>
				    		<li><a href="servicios">Servicios</a></li>
							<li><a href="contacto">Contacto</a></li>
   				      	</ul>
 					</div><!-- /.container-fluid -->
			</nav>

		</br>
		<h1>¡BIENVENIDOS!</h1>
		En Hospital Veterinario Provet ofrecemos a las mascotas de nuestros clientes servicios como:
		</br>
		</br>

<!-- CARRUSEL -->

		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
				<li data-target="#carousel-example-generic" data-slide-to="1"></li>
				<li data-target="#carousel-example-generic" data-slide-to="2"></li>
				<li data-target="#carousel-example-generic" data-slide-to="3"></li>
				<li data-target="#carousel-example-generic" data-slide-to="4"></li>
				<li data-target="#carousel-example-generic" data-slide-to="5"></li>			
			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<img src="assets/css/serviciosmedicina.jpg" alt="...">
					<div class="carousel-caption">
						Medicina.
					</div>
				</div>

				<div class="item">
					<img src="assets/css/servicioscirugia.jpg" alt="...">
					<div class="carousel-caption">
						Cirugia.
					</div>
				</div>

				<div class="item">
					<img src="assets/css/serviciosradiografia.jpg" alt="...">
					<div class="carousel-caption">
						Rayos X.
					</div>
				</div>

				<div class="item">
					<img src="assets/css/serviciosecografia.jpg" alt="...">
					<div class="carousel-caption">
						Ecografía.
					</div>
				</div>

				<div class="item">
					<img src="assets/css/serviciosvacuna.jpg" alt="...">
					<div class="carousel-caption">
						Vacunas.
					</div>
				</div>

				<div class="item">
					<img src="assets/css/serviciospeluqueria.jpg" alt="...">
					<div class="carousel-caption">
						Peluquería.
					</div>
				</div>
		</div>

			<!-- Controls -->
			<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Anterior</span>
			</a>
			<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Siguiente</span>
			</a>
			</div>
		
		</br>
		Disponemos de servicio a domicilio, además, contamos con farmacia veterinaria.
		Ofrecemos atención las 24 horas, estamos en Puente Alto.
		</br>
		</br>


<!-- DONDE ESTAMOS -->

			<div class="media">
				<a class="media-right" href="#">
					<img src="assets/css/indexdonde.jpg" alt="...">
				</a>
				<div class="media-body">
					<h4 class="media-heading"></h4>

					<dl class="dl-horizontal">
					<dt>DONDE ESTAMOS</dt>
					<dd></dd>
					</dl>
				
				
					<dl class="dl-horizontal">
					<dt>Dirección:</dt>
					<dd>Gabriela Poniente 1570, Puente Alto. REGIÓN METROPOLITANA</dd>
					</dl>
					
					<dl class="dl-horizontal">
  					<dt>E-mail:</dt>
					<dd>provet_jg@hotmail.com</dd>
					</dl>

					<dl class="dl-horizontal">
  					<dt>Teléfono:</dt>
					<dd>(02) 2518 5969</dd>
					</dl>
				</div>
			</div>
		</br>
		</br>
		</br>


@stop
