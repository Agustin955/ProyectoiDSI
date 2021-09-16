@extends('adminlte::page')

@section('title', 'Inicio')

@section('content_header')

<div class="container">       
    <div class="card">
        <div class="card-header">
            <h3>Nombre: {{$embargo['nombre']}}</h3>
            <h4>Monto a descontar: {{$embargo['montoDescontar']}}</h4>
            <h4>referencia: {{$embargo['referencia']}}</h4>
            <h4>Estado: {{$embargo['estadoEmbargo']}}</h4>
        </div>
        
       
        <div class="card-footer">
            <a href="{{ url()->previous() }}" class="btn btn-primary">Atras</a>
        </div>
    </div>
</div>

@stop