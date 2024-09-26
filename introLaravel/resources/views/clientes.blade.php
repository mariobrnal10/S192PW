<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/fondo.css') }}">
    <title>Consultar Clientes</title>
    @vite(['resources/js/app.js'])
</head>
<body>
    {{-- Inicia navbar --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

      <div class="container-fluid">
        <a class="navbar-brand" href="#">Turista sin maps</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">

            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('rutaformulario') }}">Registro de Clientes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('rutaclientes') }}">Consultar Clientes</a>
            </li>

          </ul>
        </div>
      </div>
    </nav>
    {{-- Finaliza navbar --}}
    {{-- Inicia tarjetaCliente --}}
<div class="container mt-5 col-md-8">
    <div class="card text-justify font-monospace">
        <div class="card-header fs-5 text-primary">
            Mario Alejandro Bernal Barron
        </div>
        <div class="card-body">
            <h5 class="fw-bold">mariobernal10ba@gmail.com</h5>
            <h5 class="fw-medium">4411519805</h5>
            <p class="card-text fw-lighter"></p>
        </div>
        <div class="card-footer text-muted">
            <button type="submit" class="btn btn-warning btn-sm">Actualizar</button>
            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
        </div>
    </div>
</div>
{{-- Finaliza tarjetaCliente --}}

    
</body>
</html>