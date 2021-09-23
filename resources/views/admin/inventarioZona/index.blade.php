@extends('adminlte::page')

@section('title', 'Inventario por zonas')
 
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
@endsection
@section('content')

<div class="row py-lg-2">
    <div class="col-md-6">
        <h2>Inventario de especies por zona</h2>
    </div>
</div>

 
    <div class="card">
        <div class="card-header">
    
            <table class= "table table-striped" id="inventarioZona">
                <thead>
                    <tr>
                       
                        <th>Zona</th>
                        <th>Nombre de Especie</th>
                        <th>Cantidad</th>
                    </tr>
                </thead>

                <tbody>

                    @foreach($inventarioZonas as $inventarioZona)
                        <tr>
                            
                            <th>{{$inventarioZona->zona}}</th>
                            <th>{{$inventarioZona->nombreEspecie}}</th>
                            <th>{{$inventarioZona->cantidad}}</th>             
                                
                            
                        </tr>
                    @endforeach
                </tbody>  
            </table>
        </div>
@endsection     

@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>               
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>   
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
    <script>
     $('#inventarioZona').DataTable();
    </script>
@endsection