@extends('adminlte::page')

@section('content')

<h1>Crear nueva especie</h1>
 
<form method="POST" action="/especie" enctype="multipart/form-data">
    {{ csrf_field() }}
    
    <div class="form-group">
        <label for="nombre">Nombre</label>
        <input type="text" name="especie_nombre" class="form-control" id="especie_nombre" placeholder="Nombre..." value="{{ old('especie_nombre') }}" required>
    </div>
    <div class="form-group">
        <label for="costo">Costo</label>
        <input type="text" name="especie_costo" class="form-control" id="especie_costo" placeholder="Costo..." value="{{ old('especie_costo') }}" required>
    </div>
    <div class="form-group">
        <label for="valorVenta">Valor de venta</label>
        <input type="text" name="especie_valorVenta" class="form-control" id="especie_valorVenta" placeholder="Valor de Venta..." value="{{ old('especie_valorVenta') }}" required>
    </div>
    <div class="form-group">
        <label for="NumeracionInicial">Numeración inicial</label>
        <input type="text" name="especie_numeracionInicial" class="form-control" id="especie_numeracionInicial" placeholder="Numeración inicial..." value="{{ old('especie_numeracionInicial') }}" required>
    </div>
    <div class="form-group">
        <label for="NumeracionFinal">Numeración final</label>
        <input type="text" name="especie_numeracionFinal" class="form-control" id="especie_numeracionFinal" placeholder="Numeracion Final..." value="{{ old('especie_numeracionFinal') }}" required>
    </div>
    <div class="form-group">
        <label for="cantidad">Cantidad</label>
        <input type="text" name="especie_cantidad" class="form-control" id="especie_cantidad" placeholder="Cantidad..." value="{{ old('especie_cantidad') }}" required>
    </div>
       

    <div class="form-group pt-2">
        <input class="btn btn-primary" type="submit" value="Guardar">
    </div>
</form>    

@section('js')

    <script>

        $(document).ready(function(){

        });

    </script>

@endsection



@endsection