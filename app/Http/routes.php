<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is re ['as' => 'altaProvedor','uses'q=> uested.
|
*/

Route::get('/', function(){
	return view('index');
});

Route::get('Historial/Bajas', ['as' => 'historialPdf' ,'uses' => 'homeController@getHistorial']);

Route::get('Generar/Pdf/{id}', ['as' => 'crearPdf' ,'uses' => 'homeController@crearPdf']);

Route::get('Productos/Bajas', ['as' => 'bajaProducto' ,'uses' => 'homeController@bajaProducto']);

Route::get('Categorias/Altas','homeController@getAltaCategoria');
Route::post('Categorias/Altas', ['middleware' => 'auth', 'as' => 'Categorias/Altas', 'uses' => 'homeController@altaCategoria']);
Route::get('Categorias/Bajas','homeController@getBajaCategoria');
Route::post('Categorias/Bajas', ['middleware' => 'auth', 'as' => 'Categorias/Bajas', 'uses' => 'homeController@bajaCategoria']);


Route::get('Provedores/Altas', 'homeController@getProvedor');
Route::post('Provedores/Altas', ['middleware' => 'auth', 'as' => 'Provedores/Altas', 'uses' => 'homeController@altaProvedor']);

Route::get('Productos/Altas', 'homeController@getProducto');
Route::post('Productos/Altas', ['middleware' => 'auth', 'as' => 'Productos/Altas', 'uses' => 'homeController@altaProducto']);
Route::get('Productos/Bajas','homeController@getBajaProducto');
Route::post('Productos/Bajas', ['middleware' => 'auth', 'as' => 'Productos/Bajas', 'uses' => 'homeController@bajaProducto']);
//Route::get('Productos/Bajas/Cantidad','homeController@getBajaCantidadProducto');
Route::post('Productos/Bajas/Cantidad', ['middleware' => 'auth', 'as' => 'Productos/Bajas/Cantidad', 'uses' => 'homeController@bajaCantidadProducto']);
//Route::get('/Provedores/Altas', ['as' => 'altaProvedor','uses' => 'homeController@altaProvedor']);


Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', ['as' =>'auth/login', 'uses' => 'Auth\AuthController@postLogin']);
Route::get('auth/logout', ['as' => 'auth/logout', 'uses' => 'Auth\AuthController@getLogout']);
 
// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', ['as' => 'auth/register', 'uses' => 'Auth\AuthController@postRegister']);



Route::get('/home', function()
{
	return View::make('home');
});

