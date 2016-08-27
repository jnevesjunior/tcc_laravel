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

Route::get('/', function () {
    return redirect('login');
});

Route::get('/register', array('as' => 'register', 'uses' => 'Auth\AuthController@getRegister'));
Route::post('/register', array('as' => 'register', 'uses' => 'Auth\AuthController@postRegister'));
Route::get('/login', 'LoginController@getLogin');
Route::post('/login', 'LoginController@postLogin');

//Route::group(['prefix' => 'sistema', 'namespace' => 'Sistema', 'middleware' => ['auth']], function () {

    Route::get('inicio', 'InicioController@inicio');

    Route::get('identificacao', 'IdentificacaoController@identificacao');

    Route::get('fluxo', 'FluxoController@fluxo');
    Route::get('novoFluxo', 'FluxoController@novoFluxo');
    Route::get('fluxoApi', 'FluxoController@fluxoApi');

    Route::get('/home', 'HomeController@index');

//});
