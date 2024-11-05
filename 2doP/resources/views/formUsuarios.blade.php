<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>

    <h1 class="text-center text-primary mt-5 mb-4">Registro de usuarios</h1>

    @session('exito')
    <script>
        Swal.fire({
            title: "Respuesta Servidor!",
            text: "Se Guardo Usuario: Mario Bernal",
            icon: "success"
        });
    </script>    
    @endsession

    <div class="container  col-md-4">


    <form action="/enviarCliente" method="POST">
        @csrf
        <div class="mb-3">
            <label  class="form-label">Correo: </label>
            <input type="text" class="form-control" name="correo" value="{{old('correo')}}">
            <small class="fst-italic text-danger">{{$errors->first('correo')}}</small>
        </div>

        <div class="mb-3">
            <label class="form-label">Contraseña: </label>
            <input type="text" class="form-control" name="contraseña" value="{{old('contraseña')}}">
            <small class="fst-italic text-danger">{{$errors->first('contraseña')}}</small>
        </div>                

        <div class="mb-3">
            <label  class="form-label">Edad: </label>
            <input type="text" class="form-control"  name="edad" value="{{old('edad')}}">
            <small class="fst-italic text-danger">{{$errors->first('edad')}}</small>
        </div>



        <button type="" class="btn btn-danger "> Guardar Usuario</button>


</div>


</body>
</html>