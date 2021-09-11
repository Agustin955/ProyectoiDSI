@if (auth()->user()->estado==0)
    <h4>  "BIENVENIDO No esta registrado" </h4>
@else
    

@extends('adminlte::page')

@section('title', 'Inicio')



@section('content_header')




@stop

@section('content')
    <div class="content">
        <div class="title m-b-md">
            BIENVENIDO Al SISTEMA DE TESORERIA
        </div>
    </div>
    <p>Alcaldia de Soyapango </p>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

@endif