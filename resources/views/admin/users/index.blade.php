@extends('adminlte::page')

@section('title', 'Usuarios')

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
@endsection
@section('content')

<div class="row py-lg-2">
    <div class="col-md-6">
        <h2>Lista de usuarios</h2>
    </div>
    <div class="col-md-6">
        <a href="/users/create" class="btn btn-primary btn-lg float-md-right" role="button" aria-pressed="true">Crear nuevo usuario</a>
    </div>
</div>

 
    <div class="card">
        <div class="card-header">
    
            <table class= "table table-striped" id="usuarios">
                <thead>
                    <tr>
                        
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>Role</th>
                        <th>Permisos</th>
                        <th>Herramientas</th>
                    </tr>
                </thead>

                <tbody>

                    @foreach($users as $user)
                        <tr>
                            
                            <th>{{$user->name}}</th>
                            <th>{{$user->email}}</th>
                            <td>
                                @if ($user->roles->isNotEmpty())
                                    @foreach ($user->roles as $role)
                                        <span class="badge badge-secondary">
                                            {{ $role->name }}
                                        </span>
                                    @endforeach
                                @endif
        
                            </td>
                            <td>
                                @if ($user->permissions->isNotEmpty())
                                                
                                    @foreach ($user->permissions as $permission)
                                        <span class="badge badge-secondary">
                                            {{ $permission->name }}                                    
                                        </span>
                                    @endforeach
                                
                                @endif 
                            </td>
                            <td>
                                <a href="/users/{{$user['id']}}"><i class="fa fa-eye"></i></a>
                                <a href="/users/{{$user['id']}}/edit"><i class="fa fa-edit"></i></a>
                                <form action="{{'users/'.$user->id}}" method="post"> 
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
