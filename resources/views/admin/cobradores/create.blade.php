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
        <input type="text" name="cobrador_nombre" class="form-control" id="cobrador_nombre" placeholder="Nombre..." value="{{ old('cobrador_nombre') }}" required>
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
        <input data-inputmask='"mask": "9999-9999"' data-mask text="text" name="cobrador_telefono" class="form-control" id="cobrador_telefono" placeholder="Telefono..." value="{{ old('cobrador_telefono') }}" required>
    </div>
    <div class="form-group">
        <label for="fecha">Fecha de Nacimiento</label>
        <input type="text" name="cobrador_fecha" class="form-control date" id="cobrador_fecha" placeholder="Fecha de Nacimiento..." value="{{ old('cobrador_fecha') }}" required>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Correo Electrónico</label>
        <input type="email" name="cobrador_correo" class="form-control" id="cobrador_correo" placeholder="Correo Electrónico..." value="{{ old('cobrador_correo') }}" required>
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