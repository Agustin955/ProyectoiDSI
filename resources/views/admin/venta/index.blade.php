@extends('adminlte::page')

@section('title', 'Ventas')

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
@endsection

@section('content_header')
<div class="row py-lg-2">
    <div class="col-md-6">
        <h2>Lista de Ventas</h2>
    </div>
    <div class="col-md-6">
        <a href="/venta/create" class="btn btn-primary btn-lg float-md-right" role="button" aria-pressed="true">Crear Nueva Venta</a>
        
    </div>
</div>

<div class="card mb-3">
    <div class="card-header">
       
    <div class="card-body">
        <div class="table-responsive">
        <table class="table table-striped" id="dataTable" >
            <thead>
            <tr>
                
                <th>Nombre Venta</th>
                <th>Especie</th>
                <th>Zona</th>
                <th>Cantidad</th>
                <th>total</th>
                <th>fecha</th>
                
                
            </tr>
            </thead>
            
            <tbody>
                @foreach ($ventas as $venta)
                    <tr>
                        
                        <td>{{ $venta['name'] }}</td>
                        <td>{{ $venta->especie->nombre }}</td>
                        <td>{{ $venta->zona->nombre }}</td>
                        <td>{{ $venta['cantidad'] }}</td>
                        <td>$ {{ $venta['total'] }}</td>
                        <th>{{$venta->created_at->format('d-m-Y')}}</th>
                        
                     
                   
                    </tr>
                @endforeach
            </tbody>
        </table>
        </div>
    </div>
</div>
</div>



@endsection

@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>               
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>   
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
    <script>
     $('#dataTable').DataTable();
    </script>
@endsection