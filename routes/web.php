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

Route::get('/', function () {
    return view('login'); 
});




//Aqui comienzan las rutas hacia el proyecto con vision final

       //Rutas hacia ellogin
Route::get('login', 'RegistroController@login');

//Ruta hacia el registro 
 Route::get('registrar', 'RegistroController@registrar');

//

//ruta hacia el home
Route::get('admin', 'RegistroController@admin');

//ruta que lista a los usuarios
Route::get('usuarios', 'RegistroController@users');

Route::post('usuarios/crear', 'RegistroController@store');
//Ruta hacia el adminLTE de bootstrap3
//Route::get('/lte', 'InicioController@index');







