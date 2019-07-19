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
    return 'Home'; 
});


/*
//Ruta de pruebas usuarios 
  //se dejan como ejemplo de como crear otras rutas
Route::get('usuarios', 'UserController@index');

Route::get('/usuarios/{id}', 'UserController@show')
 ->where('id', '[0-9]+');

Route::get('/usuarios/nuevo', 'UserController@create');

Route::get('/saludo/{name}/{nickname?}', 'WelcomeUserController@index');
//Fin de rutas de prueba  

 //Rutas hacia la pagina de registro principal
Route::get('/registro', 'RegistroController@index');


//Ruta hacia registro pero de las materias, seria la segunda parte de los registros
//Route::post('/registro/alumnos', 'RegistroController@materias');


//ruta hacia el formulario de alumnos

//Route::get('/registro', 'RegistroController@index');
Route::get('registro', 'RegistroController@crear');

//Ruta tipo post del formulario para alumnos
Route::post('registro/alumnos', 'RegistroController@store');

//Ruta hacia la pagina de registro de maestros
Route::get('registro/maestros', 'RegistroController@maestros');

*/
//Aqui comienzan las rutas hacia el proyecto con vision final

       //Rutas hacia ellogin
Route::get('login', 'RegistroController@login');

//Ruta hacia el registro 
 Route::get('registrar', 'RegistroController@registrar');

//ruta hacia el home
Route::get('home', 'RegistroController@home');



//Ruta hacia el adminLTE de bootstrap3
//Route::get('/lte', 'InicioController@index');







