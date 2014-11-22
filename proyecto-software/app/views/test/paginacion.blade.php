@extends('layouts.master')


@section('css')
<?php echo HTML::style('css/estilos.css');?>
@stop


@section('content')
    <h1>Listado de Noticias con paginación</h1>
    <ul>
    <?php 
    foreach($datos as $dato)
    {
        ?>
        <li><?php echo $dato->titulo?> </li>
        <?php

    }
    ?>
    </ul>
    Pagina actual : <?php echo $datos->getCurrentPage();?>
    <?php echo $datos->links();?>
@stop