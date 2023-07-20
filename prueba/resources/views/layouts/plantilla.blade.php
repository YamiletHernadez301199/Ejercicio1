<!doctype html>
<html lang="en">

<head>
  <title>@yield('tituloPagina')</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.0-beta1 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}"> 
</head>

<body>
  <div class="container-fluid">
    <div class="row">
        <div class="col g-0">
            <nav class="navbar navbar-expand-md navbar-dark bg-dark">
                <div class="container-fluid">
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('raiz') }}">
                          <span class="fas fa-solid fa-house-user"></span> Inicio
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" href="{{ route('inicio') }}">
                          <span class="fas fa-solid fa-circle-question"></span>¿Qué es COMPOSER?
                        </a>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="fas fa-solid fa-file-circle-plus"></span>
                            Creación de
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="{{ route('creacionP') }}">Creación de nuevo proyecto</a></li>
                          <li><a class="dropdown-item" href="{{ route('creacionV') }}">Creación de Vistas, Rutas y Controladores</a></li>
                        </ul>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" href="{{ route('agregado') }}"> 
                          <span class="fas fa-solid fa-images"></span> Agregado de imagenes
                        </a>           
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" href="{{ route('envio') }}"> 
                          <span class="fas fa-solid fa-square-share-nodes"></span> Envio de información mediante vistas
                        </a>           
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" href="{{ route('parametros') }}"> 
                          <span class="fas fa-solid fa-sitemap"></span> Parametros
                        </a>           
                      </li> 
                      <li class="nav-item">
                        <a class="nav-link active" href="{{ route('js') }}"> 
                          <span class="fas fa-brands fa-js"></span> Js
                        </a>           
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" href="{{ route('html') }}"> 
                          <span class="fas fa-brands fa-html5"></span> Html
                        </a>           
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" href="{{ route('css') }}"> 
                          <span class="fas fa-brands fa-css3-alt"></span> Css
                        </a>           
                      </li>
                    </ul>
                  </div>
                </div>
            </nav>
            <div class="container-md fondo mt-3">
                <div class="row">
                    <div class="col">
                        @yield('contenido')
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
    integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
    integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous">
  </script>
</body>

</html>
