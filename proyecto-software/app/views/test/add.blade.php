@extends('layouts.master')


@section('css')
<?php echo HTML::style('css/estilos.css');?>
@stop


@section('content')
<h1>Agregar Noticia</h1>
    @if(Session::has('mensaje'))
      
            <h2>{{ Session::get('mensaje') }}</h2>
       
    @endif
   
    {{ Form::open(array('url' => 'test/add','method'=>'post')) }}
        <p>
        {{Form::label('titulo', 'Nombre')}} {{Form::text('titulo')}}
        {{$errors->first("titulo")}}
        </p>
        <p>
        {{Form::label('contenido', 'Contenido')}}{{Form::textarea('contenido')}}
        {{$errors->first("contenido")}}
        </p>
        <p>
        {{Form::submit('Enviar')}}
        </p>
    {{ Form::close() }}
@stop