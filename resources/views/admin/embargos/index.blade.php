@extends('adminlte::page')

@section('title', 'Usuarios')
 
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
@endsection
@section('content')

<div class="row py-lg-2">
    <div class="col-md-6">
        <h2>Lista de embargos</h2>
    </div>
    <div class="col-md-6">
        <a href="/embargo/create" class="btn btn-primary btn-lg float-md-right" role="button" aria-pressed="true">Crear nuevo Embargo</a>
    </div>
</div>

 
    <div class="card mb-3">
        <div class="card-header">
        <i class="fas fa-table"></i>
       </div>
        <div class="card-body">
        <div class="table-responsive">
            <table class= "table table-bordered" id="usuarios" width="100%" cellspacing="0">
                <thead>
                    <tr>
                       
                        <th>Nombre</th>
                        <th>Monto a descontar</th>
                        <th>Referencia</th>
                        <th>Estado</th>
                        <th colspan="3"><center>Herramientas</center></th>
                    </tr>
                </thead>

                <tbody>

                    @foreach($embargo as $embargo)
                        <tr>
                            
                            <th>{{$embargo->nombre}}</th>
                            <th>{{$embargo->montoDescontar}}</th>
                            <th>{{$embargo->referencia}}</th>
                            <th>{{$embargo->estadoEmbargo}}</th>
                            
                            <td>
                                <a type="button" class="btn btn-success" href="/embargo/{{$embargo['id']}}"><i class="fa fa-eye"></i></a>
                            </td>
                            <td>    
                                <a  type="button" class="btn btn-warning" href="/embargo/{{$embargo['id']}}/edit"><i class="fa fa-edit"></i></a>
                            </td>
                            <!--<td>    
                                <form action="{{'embargo/'.$embargo->id}}" method="post"> 
                                    @csrf
                                    {{ method_field('DELETE') }}
                                    <button  type="submit" class="btn fas fa-trash-alt" onclick="return confirm('¿BORRAR?')"></button>
                                </form> 
                                
                            </td>-->
                        </tr>
                    @endforeach
                </tbody>  
            </table>
            <div>
        <div>
        </div>
@endsection     

@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>               
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>   
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
    <script src="../../../../js/datatableSpanish.js"></script>
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
