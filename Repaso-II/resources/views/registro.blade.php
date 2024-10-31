@extends('layouts.plantilla')

@section('titulo', 'Libros')

@section('css-registro')
    <link rel="stylesheet" href="{{asset('css/registro.css')}}">
@endsection

@section('contenidoLibro')

@session('Guardado')
    <script>
        Swal.fire({
            title: "{{__('Libro Registrado')}}",
            text: "{{__('El Libro Se Acaba De Registrar En La Base De Datos')}}",
            icon: "success"
        });
    </script>    
    @endsession

<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="form-container p-4 col-md-8">
        <form class="row g-3" action="/registrarLibro" method="POST">
            @csrf
            <h1 class="text-center">{{__('Registro De Libros')}}</h1>
            <div class="col-md-6">
                <label for="inputISBN" class="form-label">{{__('ISBN')}}</label>
                <input type="txt" class="form-control" name="ISBN" value="{{old('ISBN')}}">
                <small class="fst-italic text-danger">{{$errors->first('ISBN')}}</small>
            </div>
            
            <div class="col-md-6">
                <label for="inputTitulo" class="form-label">{{__('Titulo')}}</label>
                <input type="text" class="form-control" name="Titulo" value="{{old('Titulo')}}">
                <small class="fst-italic text-danger">{{$errors->first('Titulo')}}</small>
            </div>
            
            <div class="col-md-6">
                <label for="inputAutor" class="form-label">{{__('Autor')}}</label>
                <input type="text" class="form-control" name="Autor" value="{{old('Autor')}}">
                <small class="fst-italic text-danger">{{$errors->first('Autor')}}</small>
            </div>
            
            <div class="col-md-6">
                <label for="inputPaginas" class="form-label">{{__('Paginas')}}</label>
                <input type="txt" class="form-control" name="Paginas" value="{{old('Paginas')}}">
                <small class="fst-italic text-danger">{{$errors->first('Paginas')}}</small>
            </div>
        
            <div class="col-md-6">
                <label for="inputAnio" class="form-label">{{__('Año')}}</label>
                <input type="txt" class="form-control" name="Año" value="{{old('Año')}}">
                <small class="fst-italic text-danger">{{$errors->first('Año')}}</small>
            </div>
        
            <div class="col-md-6">
                <label for="inputEditorial" class="form-label">{{__('Editorial')}}</label>
                <input type="txt" class="form-control" name="Editorial" value="{{old('Editorial')}}">
                <small class="fst-italic text-danger">{{$errors->first('Editorial')}}</small>
            </div>
        
            <div class="col-md-6">
                <label for="inputEmailEditorial" class="form-label">{{__('Correo Editorial')}}</label>
                <input type="txt" class="form-control" name="EmailEditorial" value="{{old('EmailEditorial')}}">
                <small class="fst-italic text-danger">{{$errors->first('EmailEditorial')}}</small>
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-dark w-100">{{__('Registrar')}}</button>

            </div>
        </form>
    </div>
</div>

@endsection