<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeliculasController;


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



Route::get('/', [PeliculasController::class, 'index'] );
Route::get('/detalles', [PeliculasController::class, 'detalles'] );






// Route::get('/', function () {
//     return '<h1> Hola Mundo desde Laravel!</h1>';
// });

// Route::get('/mostrar-fecha', function (){
//     $titulo = "<h1> Estoy Mostrando la fecha</h1>";
//     return view('mostrarfecha', ['titulo' => $titulo ]);
// });

// Route::get('/pelicula/{title?}', function($title = "No ha seleccionado ninguna pelicula"){
//     return view('pelicula', ['title' => $title ]);
// });

// Route::get('/listado-peliculas', function(){
//     $titulo = "Listado de Peliculas";
//     return view('peliculas.lista')
//         ->with('titulo', $titulo);
// });