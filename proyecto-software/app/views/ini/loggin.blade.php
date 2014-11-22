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
			
<form class="form-horizontal" role="form">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label>
          <input type="checkbox"> Remember me
        </label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Sign in</button>
    </div>
  </div>
</form>

			<?php echo HTML::link('ini/','Volver a INICIO')?>





@stop
