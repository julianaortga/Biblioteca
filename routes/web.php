<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

/*    Route::get('prueba', function() {
    return "hola desde web.php";
});
*/

 /*   Route::get('nombre/{nombre}', function($nombre){
    return "Yo quiero : ".$nombre;
});
*/

/*    Route::get('controlador','PruebaController@index');
*/ 

 // rutas del inicio 
	Route::resource('/','InicioController@index');
	Route::resource('/búsqueda','InicioController@buscarLibroAutor');
	Route::resource('/ingresarAdmin','InicioController@ingresarAdmin');
	Route::resource('/admin','AdminController@admin');

	//rutas del admin
	Route::resource('/admin/registrar','AdminController');

	//rutas del autor
    Route::resource('/autor','AutorController');

    //rutas del libro
    Route::resource('/libro','LibroController');

    Route::resource('/autorLibro','AutorLibroController@create');

    //Route::get('libro.autores/{cod_l}', ['alias'=>'libro.autores', 'uses'=>'AutorLibroController@getAutores']);
   	Route::get('libro.addAutor/{cod_l}' , ['uses'=>'LibroController@addAutor','as'=>'libro.addAutor']);
   	
 
    //rutas de la sede
    Route::resource('/sede','SedeController');

    //rutas del ejemplar
	Route::resource('/ejemplar','EjemplarController');


	Route::resource('actorlibro','ActorLibroController');
	Route::resource('persona','PersonaController');
	Route::resource('prestamo','PrestamoController');
	
	Route::resource('estudiante','EstudianteController');
	Route::resource('administrativo','AdministrativoController');
	Route::resource('profesor','ProfesorController');

	//Route::get('/', function () {
    //return view('welcome');