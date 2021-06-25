@extends('adminlte::page')

@section('title', 'Inicio')

@section('content_header')

<div class="container">       
    <div class="card">
        <div class="card-header">
            <h3>Name: {{$role['name']}}</h3>  
            <h4>Slug: {{$role['slug']}}</h4>
        </div>
        <div class="card-body">
            <h5 class="card-title">Permisos</h5>
            <p class="card-text">
                @if ($role->permissions->isNotEmpty())
                                                
                @foreach ($role->permissions as $permission)
                    <span class="badge badge-primary">
                        {{ $permission->name }}                                    
                    </span>
                @endforeach
            
            @endif
            </p>
        </div>
        <div class="card-footer">
            <a href="{{ url()->previous() }}" class="btn btn-primary">Atras</a>
        </div>
    </div>
</div>

@stop