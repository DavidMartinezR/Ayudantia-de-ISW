@extends('layouts.master')

@section('css')
<?php echo HTML::style('css/estilos.css');?>
@stop

@section('content')
<p> Hay {{$datos}} noticias en la tabla </p>

@stop