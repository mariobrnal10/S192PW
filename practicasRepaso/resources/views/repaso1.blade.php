@extends('layouts.plantilla1')

@section('contenido1')
    <div class="container m-5">
        <form action="/convertir" method="POST">
            @csrf
            <label for="cantidad">Cantidad:</label>
            <input type="number" name="cantidad" id="cantidad" required>
        
            <label for="tipoConversion">Elige la conversión:</label>
            <select name="tipoConversion" id="tipoConversion" required>
                <option value="MBaGB">MB a GB</option>
                <option value="GBaMB">GB a MB</option>
                <option value="GBaTB">GB a TB</option>
                <option value="TBaGB">TB a GB</option>
            </select>
        
            <button type="submit">Convertir</button>
        </form>
    </div>
@endsection
