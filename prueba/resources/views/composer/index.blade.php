@extends('layouts/plantilla')
@section('tituloPagina', 'composer')
@section('contenido')
    <h2 class="text-center fw-bolder my-4">Composer</h2>
    <div class="p-4">
        <p class="-text-justify">Es un manejador de paquetes para PHP que proporciona un estándar para administrar, descargar e instalar dependencias y librerías. Similar a NPM en Node.js y Bundler en Ruby</p>
        <div class="d-flex justify-content-center align-items-center">
            <img class="img-fluid shadow border rounded" src="{{asset('img/composer.jpg')}}" alt=""  width="35%">
        </div>  
        <h3>Instalación de composer</h3>
        <p class="-text-justify">Lo primero que debes realizar es abrir tu navegador y poner composer, te envia a la pagina de composer, le das clic en descargas</p>
        <div class="d-flex justify-content-center align-items-center">
            <img class="img-fluid shadow border rounded" src="{{asset('img/composerDes.png')}}" alt=""  width="35%">
        </div>
        <p class="-text-justify">selecicona la parte donde dice "Composer-Setup.exe" dando un click, se empezara tu descarga</p>
        <div class="d-flex justify-content-center align-items-center">
            <img class="img-fluid shadow border rounded" src="{{asset('img/descarga.png')}}" alt=""  width="50%">
        </div>
        <p class="-text-justify">Despues de que tengas ya tu descarga, empieza con tu instalación.</p>
        <p class="-text-justify">Para verificar que se instalo correctamente, te diriges a tu terminal y escribe composer</p>
        <div class="d-flex justify-content-center align-items-center">
            <img class="img-fluid shadow border rounded" src="{{asset('img/instalacion.png')}}" alt=""  width="50%">
        </div>
    </div>
@endsection
