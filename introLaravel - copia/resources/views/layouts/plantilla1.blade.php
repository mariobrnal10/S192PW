<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/js/app.js']) 
    <title>@yield('titulo')</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>

       <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="{{ route('rutainicio') }}">Turista sin MAPS</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">

            <li class="nav-item active">
              <a class="nav-link {{ request()->routeIs('rutaformulario')?'text-warning':'' }}" href="{{ route('rutaformulario') }}">{{__('Registro de Clientes')}} <span class="sr-only"></span></a>
            </li>

            <li class="nav-item">
              <a class="nav-link {{ request()->routeIs('rutaclientes')?'text-success':'' }}" href="{{ route('rutaclientes') }}">{{__('Consultar clientes')}}</a>
            </li>
          </ul>
        </nav>

       @yield('contenido')
       @yield('contenido2')
</body>
</html>