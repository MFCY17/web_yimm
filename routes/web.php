<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('index');
});*/

Route::get('/', [
'uses' => 'TestController@index'
]);
Route::get('/Contactos', function () {
    return view('Contactos');
});
Route::get('/Servicios', function () {
    return view('service');
});
Route::get('/Eventos', function () {
    return view('event');
});



