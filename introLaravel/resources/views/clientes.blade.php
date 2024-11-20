
@extends('layouts.plantilla1')

@section('titulo', 'Clientes')

@section('contenido2')
    {{-- Inicia tarjetaCliente --}}
<div class="container mt-5 col-md-8">
    @foreach ($consultaClientes as $Cliente)
    <div class="card text-justify font-monospace">
        <div class="card-header fs-5 text-primary">
            {{$Cliente->nombre}}
        </div>
        <div class="card-body">
            <h5 class="fw-bold">{{$Cliente->correo}}</h5>
            <h5 class="fw-medium">{{$Cliente->telefono}}</h5>
            <p class="card-text fw-lighter"></p>
        </div>
        <div class="card-footer text-muted">
            
                
            
            <a href="{{route('rutaEdit')}}" class="btn btn-warning">{{__('Actualizar')}}</a>
            <a href="" class="btn btn-danger">{{__('Eliminar')}}</a>
        </div>
    </div>
    @endforeach
</div>
{{-- Finaliza tarjetaCliente --}}

@endsection
