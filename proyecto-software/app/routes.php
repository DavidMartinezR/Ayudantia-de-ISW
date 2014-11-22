<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('/hola', function()
{
	return "Hola !";
});

Route::get('usuario/{id?}', function($id=null) 
{ 
    return  'Usuario '.$id ; 
});

Route::controller('/test','TestController');

Route::controller('/ini','InicioController');

//Route::controller('/contacto','InicioController');

Route::controller("/","HomeController");
