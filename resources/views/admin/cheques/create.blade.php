@extends('adminlte::page')

@section('css')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" integrity="sha512-mSYUmp1HYZDFaVKK//63EcZq4iFWFjxSL+Z3T/aCt4IO9Cejm03q3NKKYN6pFQzY0SBOr8h+eCIAZHPXcpZaNw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection
@section('content')

<h1>Generar cheque</h1>


 
<form method="POST" action="/cheques" enctype="multipart/form-data">
    {{ csrf_field() }}

    <div class="form-group">
        <label for="role">Banco</label>
        <select class="role form-control" name="cheque_banco" id="cheque_banco">
            <option value="">Seleccione...</option>
            <option value="Bancoagrícola">Bancoagrícola</option>
            <option value="BAC">BAC</option>
            <option value="Cuscatlán">Cuscatlán</option>
            <option value="Promerica">Promerica</option>
        </select>
    </div>
    <div class="form-group">
        <label for="role">N° Cuenta</label>
        <input type="text" name="cheque_ncuenta" class="form-control" id="cheque_ncuenta" placeholder="N° de cuenta..." value="{{ old('cheque_ncuenta') }}" required>
    </div>
    <div class="form-group">
        <label for="recibe">Paguese a la orden de</label>
        <input type="text" name="cheque_recibe" class="form-control" id="cheque_recibe" placeholder="Nombre completo..." value="{{ old('cheque_recibe') }}" required>
    </div>
    <div class="form-group">
        <label for="cantidad">Cantidad</label>
        <input type="double" name="cheque_cantidad" class="form-control" id="cheque_cantidad" placeholder="Cantidad..." value="{{ old('cheque_cantidad') }}" required>
    </div>
    <div class="form-group">
        <label for="cantidadletras">Cantidad en letras</label>
        <input type="text" name="cheque_cantidadletras" class="form-control" id="cheque_cantidadletras" placeholder="Cantidad en letras..." value="{{ old('cheque_cantidadletras') }}" required>
    </div>
    
    <div class="form-group">
        <label for="fecha">Fecha</label>
        <input type="text" name="cheque_fecha" class="form-control" id="cheque_fecha" placeholder="Fecha..." value="{{ old('cheque_fecha') }}" required>
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