@extends('layouts/plantilla')
@section('tituloPagina', 'composer')
@section('contenido')
    <h2 class="text-center fw-bolder my-4">Html</h2>
    <div class="p-4">
        <p class="-text-justify">Es el componente más básico de la Web. Define el significado y la estructura del contenido web. Además de HTML, generalmente se utilizan otras tecnologías para describir la apariencia/presentación de una página web (CSS) o la funcionalidad/comportamiento (JavaScript).</p>
        <div class="d-flex justify-content-center align-items-center">
            <img class="img-fluid shadow border rounded" src="{{asset('img/html.jpg')}}" alt=""  width="45%">
        </div> 
        <p class="-text-justify">"Hipertexto" hace referencia a los enlaces que conectan páginas web entre sí, ya sea dentro de un único sitio web o entre sitios web. Los enlaces son un aspecto fundamental de la Web. Al subir contenido a Internet y vincularlo a las páginas</p>
 
    </div>
@endsection
