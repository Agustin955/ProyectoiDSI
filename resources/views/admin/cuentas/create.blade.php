@extends('adminlte::page')

@section('css')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" integrity="sha512-mSYUmp1HYZDFaVKK//63EcZq4iFWFjxSL+Z3T/aCt4IO9Cejm03q3NKKYN6pFQzY0SBOr8h+eCIAZHPXcpZaNw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection
@section('content')

<h1>Crear nueva cuenta</h1>


 
<form method="POST" action="/cuentas" enctype="multipart/form-data">
    {{ csrf_field() }}

    <div class="form-group">
        <label for="role">Banco</label>
        <select class="role form-control" name="cuenta_banco" id="cuenta_banco">
            <option value="">Seleccione...</option>
            <option value="Bancoagrícola">Bancoagrícola</option>
            <option value="BAC">BAC</option>
            <option value="Cuscatlán">Cuscatlán</option>
            <option value="Promerica">Promerica</option>
        </select>
    </div>
    <div class="form-group">
        <label for="role">N° Cuenta</label>
        <input type="text" name="cuenta_ncuenta" class="form-control" id="cuenta_ncuenta" placeholder="N° de cuenta..." value="{{ old('cuenta_ncuenta') }}" required>
    </div>
    <div class="form-group">
        <label for="nombre">Nombre</label>
        <input type="text" name="cuenta_nombre" class="form-control" id="cuenta_nombre" placeholder="Nombre..." value="{{ old('cuenta_nombre') }}" required>
    </div>
    <div class="form-group">
        <label for="saldo">Saldo</label>
        <input type="double" name="cuenta_saldo" class="form-control" id="cuenta_saldo" placeholder="Saldo inicial..." value="{{ old('cuenta_saldo') }}" required>
    </div>
    <div class="form-group">
        <label for="role">Estado</label>
        <select class="role form-control" name="cuenta_estado" id="cuenta_estado">
            <option value="">Seleccione...</option>
            <option value="Activa">Activa</option>
            <option value="Inactiva">Inactiva</option>
        </select>
    </div>

    <div class="form-group pt-2">
        <input class="btn btn-primary" type="submit" value="Guardar">
    </div>
    
</form>    


@section('js')
<script>

    $(document).ready(function(){

    });

</script>
@endsection

@endsection