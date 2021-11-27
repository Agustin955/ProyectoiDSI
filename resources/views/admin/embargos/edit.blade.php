@extends('adminlte::page')

@section('content')

<h2>Editar Embargo</h2>
 
<form method="POST" action="/embargo/{{ $embargo->id }}" >
    
    @csrf()
    @method('PATCH')
    <div class="form-group">
        <label for="embargo_nombre">Nombre</label>
        <input type="text" name="embargo_nombre" class="form-control @error('especie_costo') is-invalid @enderror" id="embargo_nombre" placeholder="Nombre..." value="{{ $embargo->nombre }}" required>
        @error('embargo_nombre')
            <span class="invalid-feedback d-block" role="alert">
                <Strong>{{$message}}</Strong>
            </span>
        @enderror
    </div>
    <div class="form-group">
        <label for="embargo_monto">Monto a descontar</label>
        <input  text="text" name="embargo_monto" class="form-control @error('especie_costo') is-invalid @enderror" id="embargo_monto" placeholder="Monto..." value="{{ $embargo->montoDescontar }}" required>
        @error('embargo_monto')
            <span class="invalid-feedback d-block" role="alert">
                <Strong>{{$message}}</Strong>
            </span>
        @enderror
    </div>
    <div class="form-group">
        <label for="embargo_referencia">Referencia</label>
        <input type="text" name="embargo_referencia" class="form-control @error('especie_costo') is-invalid @enderror" id="embargo_referencia" placeholder="Referencia..." value="{{ $embargo->referencia }}" required>
        @error('embargo_referencia')
            <span class="invalid-feedback d-block" role="alert">
                <Strong>{{$message}}</Strong>
            </span>
        @enderror
    </div>
    <div class="form-group">
        <label for="embargo_estado">Estado</label>
        <select class="role form-control" name="embargo_estado" id="embargo_estado" value="{{ $embargo->estadoEmbargo }}">
        @if($embargo->estadoEmbargo == "Activo")
        <option value="Activo"{{  $embargo->estadoEmbargo != "Activo" ? "Activo" : "selected"}}>{{$embargo->estadoEmbargo}}</option>
        <option value="Inactivo">Inactivo</option>
        @endif
        @if($embargo->estadoEmbargo == "Inactivo")
        <option value="Inactivo"{{  $embargo->estadoEmbargo != "Activo" ? "Inactivo" : "selected"}}>{{$embargo->estadoEmbargo}}</option>
        <option value="Activo">Activo</option>
        @endif
        </select>
    </div>

    <div class="form-group pt-2">
        <input class="btn btn-primary" type="submit" value="Guardar">
    </div>
</form>


@endsection