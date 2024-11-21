@extends('layouts.plantilla1')

@section('titulo', 'Clientes')

@section('contenido2')
    {{-- Mostrar mensaje de éxito --}}
    @if(session('exito'))
        <script>
            Swal.fire({
                title: "¡Buen trabajo!",
                text: "{{ session('exito') }}",
                icon: "success"
            });
        </script>
    @endif

    @if(session('exito2'))
        <script>
            Swal.fire({
                title: "¡Buen trabajo!",
                text: "{{ session('exito2') }}",
                icon: "success"
            });
        </script>
    @endif

    {{-- Inicia tarjetaCliente --}}
    <div class="container mt-5 col-md-8">
        @foreach ($consultaClientes as $Cliente)
        <div class="card text-justify font-monospace mb-3">
            <div class="card-header fs-5 text-primary">
                {{ $Cliente->nombre }}
            </div>
            <div class="card-body">
                <h5 class="fw-bold">{{ $Cliente->correo }}</h5>
                <h5 class="fw-medium">{{ $Cliente->telefono }}</h5>
            </div>
            <div class="card-footer text-muted">
                <a href="{{ route('rutaEdit', ['id' => $Cliente->id]) }}" class="btn btn-warning">{{ __('Actualizar') }}</a>
                <form id="delete-form-{{ $Cliente->id }}" action="{{ route('cliente.destroy', ['id' => $Cliente->id]) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="button" class="btn btn-danger" onclick="confirmDelete({{ $Cliente->id }}, '{{ $Cliente->nombre }}')">
                        {{ __('Eliminar') }}
                    </button>
                </form>
            </div>
        </div>
        @endforeach
    </div>
    {{-- Finaliza tarjetaCliente --}}

    
    
    <script>
        function confirmDelete(clienteId, clienteNombre) {
            alertify.confirm(
                "Confirmación de Eliminación",
                `¿Estás seguro de que deseas eliminar al cliente: ${clienteNombre}?`,
                function () {
                    document.getElementById(`delete-form-${clienteId}`).submit();
                    alertify.success('Registro eliminado');
                },
                function () {
                    alertify.error('Acción cancelada');
                }
            );
        }
    </script>
@endsection
