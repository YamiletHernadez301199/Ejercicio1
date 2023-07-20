@extends('layouts/plantilla')
@section('tituloPagina', 'Parametros')
@section('contenido')
    <h2 class="text-center my-4">Parametros</h2>
    <div class="p-4">
        <p class="-text-justify">Laravel se encargara de capturar el segmento de la ruta que es dinamico, lo identifica porque esta cerrado entre llave, por tanto en el URL pasamos el parametro el cual luego lo pasamos como argumento en la funcion anonima y podra ser utilizado dentro de ella.</p>
        <div class="d-flex justify-content-center align-items-center">
            <img class="img-fluid shadow border rounded" src="{{asset('img/rutas.png')}}" alt=""  width="55%">
        </div>  
    </div>
@endsection