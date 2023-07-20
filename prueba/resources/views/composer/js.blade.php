@extends('layouts/plantilla')
@section('tituloPagina', 'composer')
@section('contenido')
    <h2 class="text-center fw-bolder my-4">JS</h2>
    <div class="p-4">
        <p class="-text-justify">JavaScript (JS) es un lenguaje de programación ligero, interpretado, o compilado con funciones de primera clase. Si bien es más conocido como un lenguaje de scripting (secuencias de comandos) para páginas web, y es usado en muchos entornos fuera del navegador, tal como Node.js, Apache CouchDB y Adobe Acrobat JavaScript es un lenguaje de programación basada en prototipos, multiparadigma, de un solo hilo, dinámico, con soporte para programación orientada a objetos, imperativa y declarativa.</p>
        <div class="d-flex justify-content-center align-items-center">
            <img class="img-fluid shadow border rounded" src="{{asset('img/js.jpg')}}" alt=""  width="45%">
        </div>  
    </div>
@endsection
