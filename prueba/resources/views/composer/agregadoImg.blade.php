@extends('layouts/plantilla')
@section('tituloPagina', 'agregadoImg')
@section('contenido')
    <h2 class="text-center my-4">Agregado de imgagenes</h2>
    <div class="p-4">
        <p class="-text-justify">Dentro de nuestra carpeta public, creamos una carpeta llamada img, Despues se agregan dentro de nuestra carpeta las imagenes que necesitamos, como se muestra en la imagen de abajo</p>
        <div class="d-flex justify-content-center align-items-center">
            <img class="img-fluid shadow border rounded" src="{{asset('img/img.png')}}" alt=""  width="15%">
        </div>
        <p class="-text-justify">Para poder utilizar la imagen basta con utilizar el "Helper asset" ejemplo</p>
        <div class="d-flex justify-content-center align-items-center">
            <img class="img-fluid shadow border rounded" src="{{asset('img/asset.png')}}" alt=""  width="65%">
        </div>
    </div>
@endsection