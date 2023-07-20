<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //retornamos la funcion 
    public function __invoke()
    {
        //donde esta alojada mi vista
       return view('welcome');
    }
}
