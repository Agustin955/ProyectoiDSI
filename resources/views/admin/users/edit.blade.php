@extends('adminlte::page')

@section('content')

<h2>Edit User</h2>
 
<form method="POST" action="/users/{{ $user->id }}" enctype="multipart/form-data">
    @method('PATCH')
    @csrf()
    
    <div class="form-group">
        <label for="name">Nombre</label>
        <input type="text" name="name" class="form-control" id="name" placeholder="Name..." value="{{ $user->name }}" required>
    </div>
    <div class="form-group">
        <label for="email">Correo</label>
        <input type="email" name="email" class="form-control" id="email" placeholder="Email..." value="{{ $user->email }}">
    </div>
    <div class="form-group">
        <label for="password">Contraseña</label>
        <input type="password" name="password" class="form-control" id="password" placeholder="Password..." minlength="8">
    </div>
    <div class="form-group">
        <label for="password_confirmation">Confirmar contraseña</label>
        <input type="password" name="password_confirmation" class="form-control" placeholder="Password..." id="password_confirmation">
    </div>
    
    


    <div class="form-group pt-2">
        <input class="btn btn-primary" type="submit" value="Guardar">
    </div>
</form>
@endsection
