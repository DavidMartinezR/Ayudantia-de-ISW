@extends ('layouts.master')

@section ('title') Hospital Veterinario Provet @stop

@section ('content')


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

			<div class="media">
				<a class="media-left" href="#">
					<img src="indexquienes.jpg" alt="...">
				</a>
				<div class="media-body">
					<h4 class="media-heading">Quiénes somos</h4>
					Somos Hospital Veterinario Provet, una sólida y reconocida empresa con más de 15 años de experiencia en el rubro. Nos diferenciamos de las otras entidades por el prestigioso equipo médico con el que contamos y la excelencia en el servicio que ofrecemos.
Brindamos los mejores y más completos servicios para sus mascotas, lo cual nos caracteriza y nos convierte en su mejor elección. Nuestro negocio es atendido personalmente por el propio dueño, siendo de esta manera, una empresa de trato familiar.
Estamos en Puente Alto. Contáctenos, estaremos encantados de atenderlo.
  				</div>
			</div>

			<div class="media">
				<a class="media-left media-middle" href="#">
					<img src="indexquienes.jpg" alt="...">
				</a>
				<div class="media-body">
					<h4 class="media-heading">Quiénes Somos</h4>
					Somos Hospital Veterinario Provet, una sólida y reconocida empresa con más de 15 años de experiencia en el rubro. Nos diferenciamos de las otras entidades por el prestigioso equipo médico con el que contamos y la excelencia en el servicio que ofrecemos.
Brindamos los mejores y más completos servicios para sus mascotas, lo cual nos caracteriza y nos convierte en su mejor elección. Nuestro negocio es atendido personalmente por el propio dueño, siendo de esta manera, una empresa de trato familiar.
Estamos en Puente Alto. Contáctenos, estaremos encantados de atenderlo.
				</div>
			</div>

</br>

			<ul class="media-list">
				<li class="media">
					<a class="media-left" href="#">
						<img src="indexquienes.jpg" alt="...">
					</a>
					<div class="media-body">
						<h4 class="media-heading">Quiénes Somos</h4>
						Somos Hospital Veterinario Provet, una sólida y reconocida empresa con más de 15 años de experiencia en el rubro. Nos diferenciamos de las otras entidades por el prestigioso equipo médico con el que contamos y la excelencia en el servicio que ofrecemos.
Brindamos los mejores y más completos servicios para sus mascotas, lo cual nos caracteriza y nos convierte en su mejor elección. Nuestro negocio es atendido personalmente por el propio dueño, siendo de esta manera, una empresa de trato familiar.
Estamos en Puente Alto. Contáctenos, estaremos encantados de atenderlo.
					</div>
				</li>
			</ul>

</br>
</br>

FALTA QUE SE VEA LA IMAGEN
</br>
</br>

		<?php echo HTML::link('ini/','Volver a INICIO')?>




@stop
