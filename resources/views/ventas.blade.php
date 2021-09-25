<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tabla ventas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h5> <center> REPORTE DE VENTAS </center> </h5>
        <table class="table table-striped" id="dataTable" >
            <thead>
            <tr>
                
                <th>Nombre Venta</th>
                <th>Especie</th>
                <th>Zona</th>
                <th>Cantidad</th>
                <th>total</th>
                <th>fecha</th>
                
                
            </tr>
            </thead>
            
            <tbody>
                @foreach ($ventas as $venta)
                    <tr>
                        
                        <td>{{ $venta['name'] }}</td>
                        <td>{{ $venta->especie->nombre }}</td>
                        <td>{{ $venta->zona->nombre }}</td>
                        <td>{{ $venta['cantidad'] }}</td>
                        <td>$ {{ $venta['total'] }}</td>
                        <th>{{$venta->created_at->format('d-m-Y')}}</th>
                        
                     
                   
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>