@extends('layouts.plantilla1')

@section('titulo')
    Editar
@endsection

@section('ContenidoEditar')
<div class="card font-monospace">
    <div class="card-header fs-5 text-center text-primary">
        {{ 'Editar Registro' }}
    </div>
    <div class="card-body text-justify">
        <form action="{{ route('cliente.update', $cliente->id) }}" method="POST">
            @csrf
            @method('PUT')
        
            <div class="mb-3">
                <label for="nombre" class="form-label">{{ 'Nombre' }}</label>
                <input type="text" class="form-control" name="txtnombre" value="{{ $cliente->nombre }}">
                <small class="fst-italic text-danger">{{ $errors->first('txtnombre') }}</small>
            </div>
        
            <div class="mb-3">
                <label for="apellido" class="form-label">{{ 'Apellido' }}</label>
                <input type="text" class="form-control" name="txtapellido" value="{{ $cliente->apellido }}">
                <small class="fst-italic text-danger">{{ $errors->first('txtapellido') }}</small>
            </div>
        
            <div class="mb-3">
                <label for="correo" class="form-label">{{ 'Correo' }}</label>
                <input type="email" class="form-control" name="txtcorreo" value="{{ $cliente->correo }}">
                <small class="fst-italic text-danger">{{ $errors->first('txtcorreo') }}</small>
            </div>
        
            <div class="mb-3">
                <label for="telefono" class="form-label">{{ 'Teléfono' }}</label>
                <input type="text" class="form-control" name="txttelefono" value="{{ $cliente->telefono }}">
                <small class="fst-italic text-danger">{{ $errors->first('txttelefono') }}</small>
            </div>
        
            <div class="card-footer text-muted">
                <div class="d-grid gap2 mt-2 mb-1">
                    <button type="submit" class="btn btn-success btn-sm">{{ 'Guardar Cambios' }}</button>
                </div>
            </div>
        </form>
        
    </div>
</div>
@endsection
