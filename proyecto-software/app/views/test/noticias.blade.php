@extends('layouts.master')

@section('css')
<?php echo HTML::style('css/estilos.css');?>
@stop

@section('content')
    <h1>Listado de Noticias</h1>
    <ul>
    @foreach($datos as $dato)
        <li> <?php echo HTML::link("test/seo/".$dato->seo_slug,$dato->titulo)?></li>
    @endforeach
   </ul>
@stop