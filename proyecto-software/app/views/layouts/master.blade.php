<!DOCTYPE html>
<html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Este es el layout')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    {{-- Bootstrap --}}
    <link rel="stylesheet" href="css/boostrap.min.css" >
    <link rel="stylesheet" href="assets/css/boostrap.min.css">
    {{ HTML::style('assets/css/bootstrap.min.css', array('media' => 'screen')) }}
    {{-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries --}}
    <!--[if lt IE 9]>
        {{ HTML::script('assets/js/html5shiv.js') }}
        {{ HTML::script('assets/js/respond.min.js') }}
    <![endif]-->
  </head>
  <body>
    {{-- Wrap all page content here --}}
    <div id="wrap">
      {{-- Begin page content --}}
      <div class="container">
        @yield('content')
      </div>
    </div>

    {{-- jQuery (necessary for Bootstrap's JavaScript plugins) --}}
    <script src="//code.jquery.com/jquery.js"></script>
    {{-- Include all compiled plugins (below), or include individual files as needed --}}
    {{ HTML::script('assets/js/bootstrap.min.js') }}
    <script type="text/javaScript" src="js/jquery.js"></script>
    <script type="text/JavaScript" src="js/boostrap.js"></script>
    </div>
  </body>
</html>
