@extends('adminlte::page')

@section('title', 'Usuarios')
 
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
@endsection
@section('content')

<div class="row py-lg-2">
    <div class="col-md-6">
        <h2>Lista de especies</h2>
    </div>
    <div class="col-md-6">
        <a href="/especie/create" class="btn btn-primary btn-lg float-md-right" role="button" aria-pressed="true">Crear nueva Especie</a>
    </div>
</div>

 
    <div class="card">
        <div class="card-header">
    
            <table class= "table table-striped" id="usuarios">
                <thead>
                    <tr>
                       
                        <th>Nombre</th>
                        <th>Costo</th>
                        <th>Valor de Venta</th>
                        <th>Numero Inicial</th>
                        <th>Numero Final</th>
                        <th>Cantidad</th>
                        <th>Herramientas</th>
                    </tr>
                </thead>

                <tbody>

                    @foreach($especie as $especie)
                        <tr>
                            
                            <th>{{$especie->nombre}}</th>
                            <th>{{$especie->costo}}</th>
                            <th>{{$especie->valorVenta}}</th>
                            <th>{{$especie->numeracionInicial}}</th>
                            <th>{{$especie->numeracionFinal}}</th>
                            <th>{{$especie->cantidad}}</th>
                            

                            
                            <td>
                                <a href="/especie/{{$especie['id']}}"><i class="fa fa-eye"></i></a>
                                <a href="/especie/{{$especie['id']}}/edit"><i class="fa fa-edit"></i></a>
                                <form action="{{'especie/'.$especie->id}}" method="post"> 
                                    @csrf
                                    {{ method_field('DELETE') }}
                                    <button  type="submit" class="btn fas fa-trash-alt" onclick="return confirm('¿BORRAR?')"></button>
                                </form> 
                                
                            </td>
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
     $('#usuarios').DataTable();
    </script>
@endsection
