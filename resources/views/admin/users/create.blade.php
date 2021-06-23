@extends('adminlte::page')

@section('content')

<h1>Crear nuevo usuario</h1>

<form method="POST" action="/users" enctype="multipart/form-data">
    {{ csrf_field() }}
    
    <div class="form-group">
        <label for="name">Nombre</label>
        <input type="text" name="name" class="form-control" id="name" placeholder="Name..." value="{{ old('name') }}" required>
    </div>
    <div class="form-group">
        <label for="email">Correo</label>
        <input type="email" name="email" class="form-control" id="email" placeholder="Email..." value="{{ old('email') }}">
    </div>
    <div class="form-group">
        <label for="password">Contraseña</label>
        <input type="password" name="password" class="form-control" id="password" placeholder="Password..." required minlength="8">
    </div>
    <div class="form-group">
        <label for="password_confirmation">Confirmar contraseña</label>
        <input type="password" name="password_confirmation" class="form-control" placeholder="Password..." id="password_confirmation">
    </div>
    <div class="form-group">
        <label for="role">Select Role</label>
    </div>
    
    <div id="permissions_box" >
    </div>     

    <div class="form-group pt-2">
        <input class="btn btn-primary" type="submit" value="Guardar">
    </div>
</form>    


@endsection
