@extends('adminlte::page')

@section('title', 'Inicio')

@section('content_header')

<h1>Crear Venta</h1>





<form method="POST" action="/venta">
    {{ csrf_field() }}
    
    <div class="form-group">
        <label for="venta_name">Nombre Venta</label>
        <input type="text" name="venta_name" class="form-control" id="venta_name" placeholder="Nombre venta..." value="{{ old('venta_name') }}"novalidate >
        @error('venta_name')
            <span class="invalid-feedback d-block" role="alert">
                <Strong>{{$message}}</Strong>
            </span>
        @enderror
    </div>
    <div class="form-group">
        <label for="especie">Seleccione Especie</label>
        <select class="form-control" name="especie" id="especie">
            <option value="">Seleccione Especie...</option>
            @foreach ($especies as $especie)
            <option value="{{ $especie->id }}_{{ $especie->cantidad }}_{{ $especie->valorVenta }}" {{old('especie')== $especie->id ? 'selected' : '' }}>{{$especie->nombre}}</option>
            
            @endforeach
        </select>
        @error('especie')
            <span class="invalid-feedback d-block" role="alert">
                <Strong>{{$message}}</Strong>
            </span>
        @enderror
    </div>
    <div class="form-group" >
        <label for="stock">Stock</label>
        <input type="number" disabled name="stock"  class="form-control" id="stock" placeholder="Stock..." value="{{ old('stock') }}" novalidate>
        
    </div>
    <div class="form-group" >
        <label for="precio">Precio</label>
        <input type="number" disabled name="precio"  class="form-control" id="precio" placeholder="precio..."value="{{ old('precio') }}" novalidate>
        
    </div>
    <div class="form-group" >
        <label for="cantidad">Cantidad</label>
        <input type="text"  name="cantidad" class="form-control" id="cantidad" placeholder="Cantidad..." novalidate>
        @error('cantidad')
            <span class="invalid-feedback d-block" role="alert">
                <Strong>{{$message}}</Strong>
            </span>
        @enderror
    </div> 
    <div class="form-group">
        <label for="total">Total</label>
        <input type="text"  name="total" tag="total" class="form-control" id="total" placeholder="Total..." novalidate>
        @error('total')
        <span class="invalid-feedback d-block" role="alert">
            <Strong>{{$message}}</Strong>
        </span>
    @enderror
    </div> 
    


    <div class="form-group pt-2">
        <input class="btn btn-primary" type="submit" value="Submit">
    </div>
</form>

@section('css')
    <link rel="stylesheet" href="/css/admin/bootstrap-tagsinput.css">
@endsection

@section('js')

   <script>
        $("#especie").change(mostrarValores);
        $("#cantidad").change(calcular);

        function mostrarValores(){

            datos=document.getElementById('especie').value.split('_');
            $("#precio").val(datos[2])
            $("#stock").val(datos[1]);
        }

        function calcular(){

            datos=document.getElementById('especie').value.split('_');

            idespecies=datos[0];
            cantidad=$("#cantidad").val();
            stock=$("#stock").val();
            precio=$("#precio").val();

            

            if(cantidad < stock ){

                total=(cantidad*precio);

                $("#total").val(total);
            }
            else{
                
                alert('La cantidad a vender supera el stock')
                limpiar();

            }
        }

        function limpiar(){
            cantidad=$("#cantidad").val("");
            
        }


   </script>
   

@endsection

@stop