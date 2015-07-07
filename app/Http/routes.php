<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');
Route::get('juan',function(){
	dd('sss');
});

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
$router->get('fo', [
	'uses' => 'HomeController@foo',
	'as' => 'fo',
	'middleware' => ['auth','permission'],
	'permission' => 'prueba'
]);


Route::get('usuarios', ['as' => 'users', 'uses' => 'UserController@showUsers']);
Route::get('editarUsuario/{id}', ['as' => 'editUser', 'uses' => 'UserController@editUser']);
Route::post('actualizarUsuario/{id}', ['as' => 'updateUser', 'uses' => 'UserController@updateUser']);
Route::get('eliminarUsuario/{id}', ['as' => 'deleteUser', 'uses' => 'UserController@deleteUser']);

Route::get('crearUsuario', ['as' => 'createUser', 'uses' => 'UserController@createUser']);
Route::post('crearUsuario', ['as' => 'createUser', 'uses' => 'UserController@saveUser']);


Route::get('buscarUsuario', ['as' => 'searchUser', 'uses' => 'UserController@showUsers']);