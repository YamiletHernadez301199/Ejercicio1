@extends('layouts/plantilla')
@section('tituloPagina', 'Creación Proyecto')
@section('contenido')
    <h2 class="text-center my-4">Creación de Proyecto</h2>
    <div class="p-4">
        <p class="-text-justify">Comando para iniciar el proceso de instalación de Laravel</p>
        <div class="d-flex justify-content-center align-items-center">
            <img class="img-fluid shadow border rounded" src="{{asset('img/creacion.png')}}" alt=""  width="45%">
        </div>  
        <p class="-text-justify">Poner en marcha el proyecto Laravel con el servidor integrado en PHP 7</p>
        <div class="d-flex justify-content-center align-items-center">
            <img class="img-fluid shadow border rounded" src="{{asset('img/servidor.png')}}" alt=""  width="20%">
        </div>
        <p class="-text-justify">Al ejecutar ese comando nos aparecerá un mensaje con la ruta del servidor recién instanciado, algo como http://127.0.0.1:8000 (lo de ":8000" es el puerto, por si no has visto nunca una dirección acabada así). La salida de la consola será más o menos como la que ves en esta imagen:</p>
        <div class="d-flex justify-content-center align-items-center">
            <img class="img-fluid shadow border rounded" src="{{asset('img/direccion.png')}}" alt=""  width="40%">
        </div>
        <p class="-text-justify">Abriendo esa URL anunciada para nuestro servidor, con tu navegador preferido, deberías ver la página de bienvenida de una aplicación recién instalada con Laravel.</p>
    </div>
@endsection