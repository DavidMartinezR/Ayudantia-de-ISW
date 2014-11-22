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

		</br>
		
		<h3> CONTACTANOS</h3>		

		</br>

		<form class="form-horizontal" role="form">
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Nombre</label>
				<div class="col-sm-10">
					<input type="email" class="form-control" id="inputEmail3" placeholder="Nombre">
    			</div>
  			</div>

  			<div class="form-group">
  				<label for="inputApellido" class="col-sm-2 control-label">Apellido</label>
  				<div class="col-sm-10">
  					<input type="password" class="form-control" id="inputPassword3" placeholder="Apellido">
  				</div>
  			</div>

  			<div class="form-group">
  				<label for="inputEmail" class="col-sm-2 control-label">Email</label>
  				<div class="col-sm-10">
  					<input type="password" class="form-control" id="inputPassword3" placeholder="Email">
  				</div>
  			</div>

  			<div class="form-group">
  				<label for="inputMensaje" class="col-sm-2 control-label">Mensaje</label>
  				<div class="col-sm-10">
  					<input type="password" class="form-control" id="inputPassword3" placeholder="Mensaje">
  				</div>
  			</div>

  			<div class="form-group">
  				<div class="col-sm-offset-2 col-sm-10">
  					<button type="submit" class="btn btn-default">Enviar</button>
  			</div>
  			</div>
  		</form>

  	</br>
  	</br>
	</br>
	</br>

<div id="formulario">
   <form role="form" action="php/contacto.php" method="POST" id="contacto" title="Nombre">
   <label for="nombre">Nombre</label>
   <input name="nombre" type="text" required="required" id="nombre" placeholder="nombre" tabindex="1" title="Nombre">
   <br>
   <label for="email">Email</label>
   <input name="email" type="email" required="required" id="email" placeholder="email" tabindex="2" title="Email">
   <br>
   <label for="telefono">Teléfono</label>
   <input name="telefono" type="text" id="telefono" placeholder="telefono" tabindex="3" title="Telefono">
   <br>
   <label for="ciudad">Ciudad</label>
   <input name="ciudad" type="text" id="ciudad" placeholder="ciudad" tabindex="4" title="ciudad">
   <br>
   <label for="pais">País</label>
   <input name="pais" type="pais" id="pais" placeholder="pais" tabindex="5" title="pais">
   <br>
   <label for="Mensaje">Mensaje</label>
   <textarea name="mensaje" rows="4" id="mensaje" placeholder="mensaje" tabindex="6"></textarea>
   <br>
   <input type="submit" name="enviar" tabindex="7" value="Enviar"><input type="reset" tabindex="8" value="Borrar">
   <input type="hidden" name="estado" value="1">
   </form>
  </div>



@stop
