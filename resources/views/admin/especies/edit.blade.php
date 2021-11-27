@extends('adminlte::page')

@section('content')

<h2>Editar Especie</h2>
 
<form method="POST" action="/especie/{{ $especie->id }}" >
    
    @csrf()
    @method('PATCH')
    <div class="form-group">
        <label for="nombre">Nombre</label>
        <input type="text" name="especie_nombre" class="form-control" id="especie_nombre" placeholder="Nombre..." value="{{ $especie->nombre }}" required>
    </div>
    <div class="form-group">
        <label for="costo">Costo</label>
        <input type="text" name="especie_costo" class="form-control  @error('especie_costo') is-invalid @enderror" id="especie_costo" placeholder="Costo..." value="{{ $especie->costo }}"required>
        @error('especie_costo')
            <span class="invalid-feedback d-block" role="alert">
                <Strong>{{$message}}</Strong>
            </span>
        @enderror
    </div>
    <div class="form-group">
        <label for="valorVenta">Valor de venta</label>
        <input type="text" name="especie_valorVenta" class="form-control  @error('especie_costo') is-invalid @enderror" id="especie_valorVenta" placeholder="Valor..." value="{{ $especie->valorVenta }}"required>
        @error('especie_valorVenta')
            <span class="invalid-feedback d-block" role="alert">
                <Strong>{{$message}}</Strong>
            </span>
        @enderror
    </div>
    <div class="form-group">
        <label for="numeracionInicial">Numeración inicial</label>
        <input type="text" name="especie_numeracionInicial" class="form-control  @error('especie_costo') is-invalid @enderror" id="especie_numeracionInicial" placeholder="Numeración inicial..." value="{{ $especie->numeracionInicial }}"required>
        @error('especie_numeracionInicial')
            <span class="invalid-feedback d-block" role="alert">
                <Strong>{{$message}}</Strong>
            </span>
        @enderror
    </div>
    <div class="form-group">
        <label for="numeracionFinal">Numeración final</label>
        <input type="text" name="especie_numeracionFinal" class="form-control  @error('especie_costo') is-invalid @enderror" id="especie_numeracionFinal" placeholder="Numeración final..." value="{{ $especie->numeracionFinal }}"required>
        @error('especie_numeracionFinal')
            <span class="invalid-feedback d-block" role="alert">
                <Strong>{{$message}}</Strong>
            </span>
        @enderror
    </div>
    <div class="form-group">
        <label for="cantidad">Cantidad</label>
        <input type="text" name="especie_cantidad" class="form-control  @error('especie_costo') is-invalid @enderror" id="especie_cantidad" placeholder="Cantidad..." value="{{ $especie->cantidad }}"required>
        @error('especie_cantidad')
            <span class="invalid-feedback d-block" role="alert">
                <Strong>{{$message}}</Strong>
            </span>
        @enderror
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