@extends('adminlte::page')

@section('css')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" integrity="sha512-mSYUmp1HYZDFaVKK//63EcZq4iFWFjxSL+Z3T/aCt4IO9Cejm03q3NKKYN6pFQzY0SBOr8h+eCIAZHPXcpZaNw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection
@section('content')

<h1>Crear nuevo cobrador</h1>

@if ($errors->any())
    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li> 
            @endforeach
        </ul>
    </div>
@endif
 
<form method="POST" action="/cobrador" enctype="multipart/form-data">
    {{ csrf_field() }}

    <div class="form-group">
        <label for="nombre">Nombre</label>
        <input type="text" name="cobrador_nombre" class="form-control @error('especie_costo') is-invalid @enderror" id="cobrador_nombre" placeholder="Nombre..." value="{{ old('cobrador_nombre') }}" required>
        @error('cobrador_nombre')
            <span class="invalid-feedback d-block" role="alert">
                <Strong>{{$message}}</Strong>
            </span>
        @enderror
    </div>
    <div class="form-group">
        <label for="role">Sexo</label>
        <select class="role form-control" name="cobrador_sexo" id="cobrador_sexo">
            <option value="">Seleccione...</option>
            <option value="Hombre">Hombre</option>
            <option value="Mujer">Mujer</option>
        </select>
    </div>
    <div class="form-group">
        <label for="telefono">Telefono</label>
        <input data-inputmask='"mask": "9999-9999"' data-mask text="text" name="cobrador_telefono" class="form-control @error('especie_costo') is-invalid @enderror" id="cobrador_telefono" placeholder="Telefono..." value="{{ old('cobrador_telefono') }}" required>
        @error('cobrador_telefono')
            <span class="invalid-feedback d-block" role="alert">
                <Strong>{{$message}}</Strong>
            </span>
        @enderror
    </div>
    <div class="form-group">
        <label for="fecha">Fecha de Nacimiento</label>
        <input type="text" name="cobrador_fecha" class="form-control date @error('especie_costo') is-invalid @enderror" id="cobrador_fecha" placeholder="Fecha de Nacimiento..." value="{{ old('cobrador_fecha') }}" required>
        @error('cobrador_fecha')
            <span class="invalid-feedback d-block" role="alert">
                <Strong>{{$message}}</Strong>
            </span>
        @enderror
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Correo Electrónico</label>
        <input type="email" name="cobrador_correo" class="form-control @error('especie_costo') is-invalid @enderror" id="cobrador_correo" placeholder="Correo Electrónico..." value="{{ old('cobrador_correo') }}" required>
        @error('cobrador_correo')
            <span class="invalid-feedback d-block" role="alert">
                <Strong>{{$message}}</Strong>
            </span>
        @enderror
    </div>
    <div class="form-group">
        <label for="dui">DUI</label>
        <input data-inputmask='"mask": "99999999-9"' data-mask text="text" name="cobrador_dui" class="form-control @error('especie_costo') is-invalid @enderror" id="cobrador_dui" placeholder="DUI..." value="{{ old('cobrador_dui') }}" required>
        @error('cobrador_dui')
            <span class="invalid-feedback d-block" role="alert">
                <Strong>{{$message}}</Strong>
            </span>
        @enderror
    </div>
    <div class="form-group">
        <label for="nit">NIT</label>
        <input data-inputmask='"mask": "9999-999999-999-9"' data-mask text="text" name="cobrador_nit" class="form-control @error('especie_costo') is-invalid @enderror" id="cobrador_nit" placeholder="NIT..." value="{{ old('cobrador_nit') }}" required>
        @error('cobrador_nit')
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
    <script src="/js/admin/jquery.inputmask.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js" integrity="sha512-T/tUfKSV1bihCnd+MxKD0Hm1uBBroVYBOYSk1knyvQ9VyZJpc/ALb4P0r6ubwVPSGB2GvjeoMAJJImBG12TiaQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
    //mask
    $('[data-mask]').inputmask()

    $('.date').datepicker({  
    format: "dd/mm/yyyy",
    language: "es",
    autoclose: true
     });  
    </script>
@endsection

@endsection