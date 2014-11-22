@extends('layouts.master')

@section('css')
<?php echo HTML::style('css/estilos.css');?>
@stop

@section('content')
	<p>
	Titulo : {{$datos->titulo}}
	</br>
	Detalle: {{$datos->contenido}}
	</p>

@stop