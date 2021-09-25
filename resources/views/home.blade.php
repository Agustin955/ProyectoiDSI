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
            <p class="normal">BIENVENIDO Al SISTEMA DE TESORERIA</p>
        </div>
    </div>
    <p class="normal">Alcaldia de Soyapango </p>

    <p class="centrado">
        <img src="imagenes/alcaldia.jpg" width="600px" height="600px"/>
    </p>
  
  
@stop

@section('css')
    <style>p.normal {font-size: 60px;text-align: center;}
    p.centrado {
  text-align: center;
  
}</style>
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

@endif