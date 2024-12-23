@extends('layouts.plantilla1')

@section('titulo','Formulario')

@section('contenido')

          {{-- inica tarjeta de formulario --}}
          <div class="container mt-5 col-md-6">

            @if (session('exito'))
              <x-Alert tipo="success"> {{ session('exito') }} </x-Alert>
            @endif

            @session('exito')
            <x-Alert tipo="danger"> {{ $value }} </x-Alert>
            @endsession

            @session('exito')
            <script>
              Swal.fire({
                title: "Good job!",
                text: '{{ $value }}',
                icon: "success"
              });

            </script>
            @endsession



            <div class="card font-monospace">
              <div class="card-header fs-5 text-center text-primary">
                {{('Registro Clientes')}}
              </div>
              <div class="card-body text-justify">
                
                <form action="{{route('enviaCliente')}}" method="POST">

                  @csrf 

                  <div class="mb-3">
                    <label for="nombre" class="form-label">{{('Nombre')}}</label>
                    <input type="text" class="form-control" name="txtnombre" value={{ old('txtnombre') }}>
                    <small class="fst-italic text-danger" >{{ $errors->first('txtnombre') }}</small>
                  </div>

                  <div class="mb-3">
                    <label for="apellido" class="form-label">{{('Apellido')}}</label>
                    <input type="text" class="form-control" name="txtapellido" value={{ old('txtapellido') }}>
                    <small class="fst-italic text-danger" >{{ $errors->first('txtapellido') }}</small>
                  </div>

                  <div class="mb-3">
                    <label for="correo" class="form-label" >{{('Correo')}}</label>
                    <input type="text" class="form-control" name="txtcorreo" value={{ old('txtcorreo') }}>
                    <small class="fst-italic text-danger" >{{ $errors->first('txtcorreo') }}</small>
                  </div>

                  <div class="mb-3">
                    <label for="telefono" class="form-label" >{{('Telefono')}}</label>
                    <input type="text" class="form-control" name="txttelefono" value={{ old('txttelefono') }}>
                    <small class="fst-italic text-danger" >{{ $errors->first('txttelefono') }}</small>
                  </div>

                  <div class="card-footer text-muted">
                    <div class="d-grid gap2 mt-2 mb-1">
                      <button type="submit" class="btn btn-success btn-sm"> {{('Guardar Clientes')}}</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          
    @endsection
