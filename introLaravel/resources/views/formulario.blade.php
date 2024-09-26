<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    @vite(['resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('css/fondo.css') }}">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

      <div class="container-fluid">
        <a class="navbar-brand" href="#">Turista sin maps</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">

            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Registro de Clientes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('rutaclientes') }}">Consultar Clientes</a>
            </li>

          </ul>
        </div>
      </div>
    </nav>
    {{-- finalizar navbar --}}
    {{-- Inicia Tarjeta con formulario --}}
<div class="container mt-5 col-md-6">
    <div class="card font-monospace">
        <div class="card-header fs-5 text-center text-primary">
            Registro de Clientes
        </div>
        <div class="card-body text-justify">
            <form>
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre: </label>
                    <input type="text" class="form-control" id="nombre">
                </div>
                <div class="mb-3">
                    <label for="apellido" class="form-label">Apellido: </label>
                    <input type="text" class="form-control" id="apellido">
                </div>
                <div class="mb-3">
                    <label for="correo" class="form-label">Correo: </label>
                    <input type="email" class="form-control" id="correo">
                </div>
                <div class="mb-3">
                    <label for="telefono" class="form-label">Teléfono: </label>
                    <input type="number" class="form-control" id="telefono">
                </div>
                <div class="card-footer text-muted">
                    <div class="d-grid gap-2 mt-2 mb-1">
                        <button type="submit" class="btn btn-success btn-sm">Guardar Cliente</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
{{-- Finaliza Tarjeta con formulario --}}

</body>
</html>