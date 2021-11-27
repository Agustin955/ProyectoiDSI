@extends('adminlte::page')

@section('css')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" integrity="sha512-mSYUmp1HYZDFaVKK//63EcZq4iFWFjxSL+Z3T/aCt4IO9Cejm03q3NKKYN6pFQzY0SBOr8h+eCIAZHPXcpZaNw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection
@section('content')

<h1>Crear nuevo embargo</h1>

@if ($errors->any())
    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li> 
            @endforeach
        </ul>
    </div>
@endif
 
<form method="POST" action="/embargo" enctype="multipart/form-data">
    {{ csrf_field() }}

    <div class="form-group">
        <label for="embargo_nombre">Nombre</label>
        <input type="text" name="embargo_nombre" class="form-control @error('especie_costo') is-invalid @enderror" id="embargo_nombre" placeholder="Nombre..." value="{{ old('embargo_nombre') }}" required>
        @error('embargo_nombre')
            <span class="invalid-feedback d-block" role="alert">
                <Strong>{{$message}}</Strong>
            </span>
        @enderror
    </div>
    <div class="form-group">
        <label for="embargo_monto">Monto a descontar</label>
        <input type="text" name="embargo_monto" class="form-control @error('especie_costo') is-invalid @enderror" id="embargo_monto" placeholder="Monto..." value="{{ old('embargo_monto') }}" novalidate>
        @error('embargo_monto')
            <span class="invalid-feedback d-block" role="alert">
                <Strong>{{$message}}</Strong>
            </span>
        @enderror
    </div>
    <div class="form-group">
        <label for="embargo_referencia">Referencia</label>
        <input type="text" name="embargo_referencia" class="form-control @error('especie_costo') is-invalid @enderror" id="embargo_referencia" placeholder="Referencia..." value="{{ old('embargo_referencia') }}" novalidate>
        @error('embargo_referencia')
            <span class="invalid-feedback d-block" role="alert">
                <Strong>{{$message}}</Strong>
            </span>
        @enderror
    </div>
    <div class="form-group" >
        <label for="embargo_estado">Estado</label>
        <input type="text" disabled name="embargo_estado" class="form-control @error('especie_costo') is-invalid @enderror" id="embargo_estado"  value="Activo">
        
    </div>
    <div class="form-group pt-2">
        <input class="btn btn-primary" type="submit" value="Guardar">
    </div>
    
</form>    

@endsection

