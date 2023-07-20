@extends('layouts/plantilla')
@section('tituloPagina', 'Envio Informacion')
@section('contenido')
    <h2 class="text-center my-4">Envio de información mediante vistas</h2>
    <div class="p-4">
        <p class="-text-justify">En el archivo routes web.php vamos a crear un par de rutas</p>
        <div class="d-flex justify-content-center align-items-center">
            <img class="img-fluid shadow border rounded" src="{{asset('img/envio.png')}}" alt=""  width="55%">
        </div>
        <p class="-text-justify">En la parte de nuestro controlador tenemos nuestro metodo para envio de información</p>
        <div class="d-flex justify-content-center align-items-center">
            <img class="img-fluid shadow border rounded" src="{{asset('img/info.png')}}" alt=""  width="35%">
        </div>
    </div>
@endsection