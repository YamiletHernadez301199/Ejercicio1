@extends('layouts/plantilla')
@section('tituloPagina', 'Creación Vistas Etc')
@section('contenido')
    <h2 class="text-center my-4">Creación vistas, Rutas y Controladores</h2>
    <div class="p-4">
        <p class="-text-justify">Las vistas generalmente se encuentran en el directorio /resources/views de la carpeta principal de nuestro proyecto. Crear una vista con Laravel es muy sencillo, simplemente necesitamos crear un archivo blade.php</p>
        <div class="d-flex justify-content-center align-items-center">
            <img class="img-fluid shadow border rounded" src="{{asset('img/vista.png')}}" alt=""  width="25%">
        </div>  
        <p class="-text-justify">Retornar una vista</p>
        <div class="d-flex justify-content-center align-items-center">
            <img class="img-fluid shadow border rounded" src="{{asset('img/retorno.png')}}" alt=""  width="25%">
        </div>
        <h3>Rutas</h3>
        <p class="-text-justify">Las rutas son una capa muy importante en Laravel, es por ello que el Framework destina un directorio en la carpeta raíz, llamado routes, para ubicar todas las rutas de la aplicación.</p>
        <div class="d-flex justify-content-center align-items-center">
            <img class="img-fluid shadow border rounded" src="{{asset('img/rutas.png')}}" alt=""  width="55%">
        </div>
        <p class="-text-justify">Se escribe la clase Route que llama al método relacionado con el verbo HTTP, en este caso, get que acepta dos parámetros: el primero es la URL que se llamará desde el navegador y el segundo es una función anónima que devuelve lo que queremos mostrar.</p>
        <h3>Controladores</h3>
        <p class="-text-justify">En Laravel sería algo así la ruta llama al controlador y este intercambia datos con el modelo o llama una vista </p>
        <p class="-text-justify">Para crear un controlador en Laravel es con el siguiente comando</p>
        <div class="d-flex justify-content-center align-items-center">
            <img class="img-fluid shadow border rounded" src="{{asset('img/controlador.png')}}" alt=""  width="45%">
        </div>
        <p class="-text-justify">Nuestro controller creado</p>
        <div class="d-flex justify-content-center align-items-center">
            <img class="img-fluid shadow border rounded" src="{{asset('img/vistaControlador.png')}}" alt=""  width="45%">
        </div>
    </div>
@endsection