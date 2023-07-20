@extends('layouts/plantilla')

@section('tituloPagina', 'Inicio')

@section('contenido')
  <div class="row">
    <div class="col">
      <div class="shadow-lg p-3 mb-5 bg-body rounded mt-4">
        <div class="card">
          <div class="card-body border border-dark shadow ">
            <div class="row">
              <div class="col-sm-12">
                <div class="d-flex align-items-center justify-content-center my-2">
                  <h1 class="text-bold">Laravel 8</h1>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div class="d-flex align-items-center justify-content-center my-3">
                  <img class="figure-img img-fluid rounded shadow mb-4 bg-body border border-2 border-light" src="{{ asset('img/laravel.jpg') }}" alt="" width="35%">
                </div>
                <p class="text-center fs-4 text-bolder" style="font-family: 'Nunito', sans-serif;">
                  Es un framework de código abierto para desarrollar app y servicios web
                </p>
              </div>
            </div>
          </div>
        </div>
      </div> 
    </div>
  </div>  
@endsection