@extends('adminlte::page')

@section('title', 'Cheques')
 
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
@endsection
@section('content')

<div class="row py-lg-2">
    <div class="col-md-6">
        <h2>Cheques</h2>
    </div>
    <div class="col-md-6">
        <a href="/cheque/create" class="btn btn-primary btn-lg float-md-right" role="button" aria-pressed="true">Generar nuevo cheque</a>
    </div>
</div>

 
    <div class="card">
        <div class="card-header"> 
    
            <table class= "table table-striped" id="usuarios"> 
                <thead>
                    <tr>
                       
                        <th>Banco</th>
                        <th>N° de cuenta</th>
                        <th>Paguese a la orden de</th>
                        <th>Cantidad</th>
                        <th>Cantidad en letras</th>
                        <th>Fecha</th>
                        
                    </tr>
                </thead>

                <tbody>

                    @foreach($cheque as $cheque)
                        <tr>
                            
                            <th>{{$cheque->banco}}</th>
                            <th>{{$chequec->ncuenta}}</th>
                            <th>{{$cheque->recibe}}</th>
                            <th>{{$cheque->cantidad}}</th>
                            <th>{{$cheque->cantidadletras}}</th>   
                            <th>{{$cheque->fecha}}</th>                                                                                                      
                            
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
     $('#usuarios').DataTable({
    language: {
        "decimal": "",
        "emptyTable": "No hay información",
        "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
        "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
        "infoFiltered": "(Filtrado de _MAX_ total entradas)",
        "infoPostFix": "",
        "thousands": ",",
        "lengthMenu": "Mostrar _MENU_ Entradas",
        "loadingRecords": "Cargando...",
        "processing": "Procesando...",
        "search": "Buscar:",
        "zeroRecords": "Sin resultados encontrados",
        "paginate": {
            "first": "Primero",
            "last": "Ultimo",
            "next": "Siguiente",
            "previous": "Anterior"
        }
    },

});
    </script>
@endsection