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

<br>
<form action="{{route('actualizarzona')}}" method="POST">
    @csrf
    <input type="hidden"  name="id" value="{{$zona->id}}">
    <div class="form-group">
      <label for="exampleInputEmail1">Nombre  id:{{$zona->id}}</label>
      <input type="text" class="form-control" id="nombre" name="nombre" aria-describedby="emailHelp" placeholder="Ingrese Nombre" value="{{$zona->nombre}}" required>
      
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Descripcion</label>
     <textarea name="descripcion" id="descripcion" cols="30" rows="10" placeholder="Agregar Descripcion" class="form-control">{{$zona->descripcion}}</textarea>
    
    </div>
   
    <button type="submit" class="btn btn-primary">Guardar Cambios</button>
  </form>
@endsection
   @section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>               
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>   
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
    <script>
     $('#usuarios').DataTable();
    </script>
@endsection