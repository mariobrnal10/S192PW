@extends('layouts.plantilla')

@section('titulo', 'Libros')

@section('css-registro')
    <link rel="stylesheet" href="{{asset('css/registro.css')}}">
@endsection

@section('contenidoLibro')

<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="form-container p-4 col-md-8">
        <form class="row g-3">
            <h1 class="text-center">Registro De Libros</h1>
            <div class="col-md-6">
                <label for="inputISBN" class="form-label">ISBN</label>
                <input type="number" class="form-control" name="inputISBN">
            </div>
            
            <div class="col-md-6">
                <label for="inputTitulo" class="form-label">Título</label>
                <input type="text" class="form-control" name="Titulo">
            </div>
            
            <div class="col-md-6">
                <label for="inputAutor" class="form-label">Autor</label>
                <input type="text" class="form-control" name="Autor">
            </div>
            
            <div class="col-md-6">
                <label for="inputPaginas" class="form-label">Páginas</label>
                <input type="number" class="form-control" name="Paginas">
            </div>
        
            <div class="col-md-6">
                <label for="inputAnio" class="form-label">Año</label>
                <input type="date" class="form-control" name="Año">
            </div>
        
            <div class="col-md-6">
                <label for="inputEditorial" class="form-label">Editorial</label>
                <input type="text" class="form-control" name="Editorial">
            </div>
        
            <div class="col-md-6">
                <label for="inputEmailEditorial" class="form-label">Email de Editorial</label>
                <input type="email" class="form-control" name="EmailEditorial">
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-dark w-100">Enviar</button>

            </div>
        </form>
    </div>
</div>

@endsection