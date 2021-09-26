@extends('adminlte::page')

@section('title', 'Zonas')
 
@section('css')

  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
   
    <script src="https://kit.fontawesome.com/cd14c88d1c.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
@endsection
@section('content')
<br>
<div class="col-md-6">
    <a type="button" class="btn btn-primary" href="{{route('zonas.create')}}"> Crear <i class="fas fa-plus"></i> </a> 
</div>
<br>
 
    <div class="card">
        <div class="card-header">
    
            <table class= "table table-striped" id="usuarios">
                <thead>
                    
                       
                        <th>Nombre</th>
                        <th>Descripcion</th>
                        {{--MP16001 <th>Agregar Ticket</th> --}}
                        <th>Ver Detalle</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                       
                   
                </thead>

                <tbody>

                    @foreach($zonas as $item)
                        <tr>
                            
                            <td>{{$item->nombre}}</td>
                            <td>{{$item->descripcion}}</td>
                            {{-- <td>
                                <a type="button" class="btn btn-primary" href="{{route('zonas.show',$item->id)}}">  <i class="fas fa-ticket-alt"></i> </a> 
                            </td> --}}
                            <td>
                                <a type="button" class="btn btn-success" href="{{route('zonas.show',$item->id)}}">  <i class="fas fa-eye"></i> </a> 
                            </td>
                            <td>
                                <a type="button" class="btn btn-warning" href="{{route('zonas.edit',$item->id)}}">  <i class="fas fa-edit"></i> </a> 
                            </td>
                            <td>
                                <a type="button" class="btn btn-danger" href="{{route('eliminar_zona',$item->id)}}">  <i class="fas fa-trash"></i> </a> 
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