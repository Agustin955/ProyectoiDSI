@extends('adminlte::page')

@section('content')
<> 
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Nombre: {{$user->name}}</h3>
            <h4>Correo: {{$user->email}}</h4>
        </div>
        <div class="card-body">
            <h5 class="card-title">Rol</h5>
            <p class="card-text">
                ...
            </p>
            <h5 class="card-title">Permisos</h5>
            <p class="card-text">
                ...
            </p>
        </div>
        <div class="card-footer">
            <a href="{{url()->previous()}}" class="btn btn-primary">Atrás</a>
        </div>
    </div>
</div>

@endsection


            


