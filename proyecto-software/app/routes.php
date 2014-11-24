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

Route::get('/quienessomos',array('uses' => 'InicioController@getQuienessomos'));
Route::controller('/index','InicioController');

route::get ('contacto', array ('uses' => 'InicioController@getContacto'));
route::get ('loggin', array ('uses' => 'InicioController@getLoggin'));
route::get ('servicios', array ('uses' => 'InicioController@getServicios'));

Route::controller("/","HomeController");
