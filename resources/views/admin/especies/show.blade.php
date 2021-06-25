@extends('adminlte::page')

@section('title', 'Inicio')

@section('content_header')

<div class="container">       
    <div class="card">
        <div class="card-header">
            <h3>Nombre: {{$especie['nombre']}}</h3>  
            <h4>Costo: {{$especie['costo']}}</h4>
            <h4>Valor de Venta: {{$especie['valorVenta']}}</h4>
            <h4>Numero Inicial: {{$especie['numeracioInicial']}}</h4>
            <h4>Numero Final: {{$especie['numeracionFinal']}}</h4>
            <h4>Cantidad : {{$especie['cantidad']}}</h4>
        </div>
       
        <div class="card-footer">
            <a href="{{ url()->previous() }}" class="btn btn-primary">Atras</a>
        </div>
    </div>
</div>

@stop