<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeliculasController extends Controller
{
    public function index(){
        $titulo = "Listado de mis peliculas";

        return view('peliculas.index', ['titulo' => $titulo]);
    }

    public function detalles(){
        return view('peliculas.detalles');
    }
}
