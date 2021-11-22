@extends('adminlte::page')

@section('title', 'Inicio')

@section('content_header')

<div class="container">       
    <div class="card">
        <div class="card-header">
            <h3>Nombre: {{$cobrador['nombre']}}</h3>
            <h4>Sexo: {{$cobrador['sexo']}}</h4>
            <h4>Telefono: {{$cobrador['telefono']}}</h4>
            <h4>Fecha de Nacimiento: {{$cobrador['fecha_nacimiento']}}</h4>
            <h4>Correo Electrónico: {{$cobrador['correo_electronico']}}</h4> 
            <h4>DUI: {{$cobrador['dui']}}</h4> 
            <h4>NIT: {{$cobrador['nit']}}</h4> 
        </div>
        
       
        <div class="card-footer">
            <a href="{{ url()->previous() }}" class="btn btn-primary">Atras</a>
        </div>
    </div>
</div>

@stop