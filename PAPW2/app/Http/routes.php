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

Route::get('prueba', function () {
    return "hola";
});

Route::group(['middleware' => ['web']], function () {
    
Route::get('/','FrontController@index');
Route::get('login','FrontController@login');
Route::get('resena','ReviewController@index');
Route::get('vresena','VReviewController@index');
Route::get('perfil','FrontController@perfil');

Route::get('Resultados', 'ResultsController@busqueda');

Route::resource('Usuario','UserController');
Route::resource('Resena','ReviewController');
Route::resource('Comentario','ComentController');
Route::resource('VResenas','VReviewController'); 
Route::resource('Log','LogController'); 
Route::resource('Logout','LogController@logout'); 
Route::resource('Perfil','PerfilController'); 

});
