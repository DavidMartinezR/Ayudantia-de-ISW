@extends('layouts.master')

@section('css')
<?php echo HTML::style('css/estilos.css');?>
@stop

@section('content')
	<h1> Noticia con seo slug</h1>
	<p>
	Titulo : {{$datos->titulo}}
	</br>
	Detalle: {{$datos->contenido}}
	</p>

@stop