@extends('layouts/plantilla')
@section('tituloPagina', 'composer')
@section('contenido')
    <h2 class="text-center fw-bolder my-4">Css</h2>
    <div class="p-4">
        <p class="-text-justify">Hojas de Estilo en Cascada (del inglés Cascading Style Sheets) o CSS es el lenguaje de estilos utilizado para describir la presentación de documentos HTML o XML (en-US) (incluyendo varios languages basados en XML como SVG, MathML o XHTML). CSS describe como debe ser renderizado el elemento estructurado en la pantalla, en papel, en el habla o en otros medios.</p>
        <div class="d-flex justify-content-center align-items-center">
            <img class="img-fluid shadow border rounded" src="{{asset('img/css.png')}}" alt=""  width="25%">
        </div> 
        <p class="-text-justify">CSS es uno de los lenguajes base de la Open Web y posee una especificación estandarizada por parte del W3C. </p>
 
    </div>
@endsection
