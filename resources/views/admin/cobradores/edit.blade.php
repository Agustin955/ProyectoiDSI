@extends('adminlte::page')

@section('content')

<h2>Editar Cobrador</h2>
 
<form method="POST" action="/cobrador/{{ $cobrador->id }}" >
    
    @csrf()
    @method('PATCH')
    <div class="form-group">
        <label for="nombre">Nombre</label>
        <input type="text" name="cobrador_nombre" class="form-control" id="cobrador_nombre" placeholder="Nombre..." value="{{ $cobrador->nombre }}" required>
    </div>
    <div class="form-group">
        <label for="role">Sexo</label>
        <select class="role form-control" name="cobrador_sexo" id="cobrador_sexo" value="{{ $cobrador->sexo }}">
        @if($cobrador->sexo == "Hombre")
        <option value=""{{  $cobrador->sexo != "Hombre" ? "Hombre" : "selected"}}>{{$cobrador->sexo}}</option>
        <option value="Mujer">Mujer</option>
        @endif
        @if($cobrador->sexo == "Mujer")
        <option value=""{{  $cobrador->sexo != "Hombre" ? "Mujer" : "selected"}}>{{$cobrador->sexo}}</option>
        <option value="Hombre">Hombre</option>
        @endif
        </select>
    </div>
    <div class="form-group">
        <label for="telefono">Telefono</label>
        <input data-inputmask='"mask": "9999-9999"' data-mask text="text" name="cobrador_telefono" class="form-control" id="cobrador_telefono" placeholder="Telefono..." value="{{ $cobrador->telefono }}" required>
    </div>
    <div class="form-group">
        <label for="fecha">Fecha de Nacimiento</label>
        <input type="text" name="cobrador_fecha" class="form-control date" id="cobrador_fecha" placeholder="Fecha de Nacimiento..." value="{{ $cobrador->fecha_nacimiento }}" required>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Correo Electrónico</label>
        <input type="email" name="cobrador_correo" class="form-control" id="cobrador_correo" placeholder="Correo Electrónico..." value="{{ $cobrador->correo_electronico }}" required>
    </div>

    <div class="form-group pt-2">
        <input class="btn btn-primary" type="submit" value="Submit">
    </div>
</form>

@section('js')

    <script>

        $(document).ready(function(){
        });

    </script>

@endsection

@endsection