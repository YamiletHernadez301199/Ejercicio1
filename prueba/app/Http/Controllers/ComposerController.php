<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComposerController extends Controller
{
    //index muestra la pagina principal
    public function index()
    {
        return view('composer/index');
    }
    //create sirve o es el encargado para crear formularios o cualquier cosa
    public function create()
    {
        return view('composer/create');
    }
    public function show()
    {
        return view('composer/show');
    }
    public function agregadoImg()
    {
        return view('composer/agregadoImg');
    }
    public function envioInfo()
    {
        return view('composer/envioInfo');
    }
    public function parametros()
    {
        return view('composer/parametros');
    }
    public function js()
    {
        return view('composer/js');
    }
    public function html()
    {
        return view('composer/html');
    }
    public function css()
    {
        return view('composer/css');
    }
    //show muestra un elemnto en particular
    // public function show($nombre)
    // {
    //     return ("esta es una funcion con un parametro .$nombre");
    // }
    //es la forma de pasar tu variable con la version actuac de laravel 
    //compact('nombre')
    //['nombre'=>$nombre]es la forma en pasar variable en laravel 8

    
}
