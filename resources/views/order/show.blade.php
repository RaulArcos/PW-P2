<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tramitar Pedido</title>
    <link rel="shortcut icon" href="./img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous" />
</head>

<body>
<div class="container">
<h1 class="display-4">Tramitar Pedido</h1>
        <hr>

        
        <div class="row" id="cards"></div>

        <table class="table mt-5">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Cantidad</th>
                </tr>
            </thead>

            @php 
                $i = 0;
            @endphp 
            @if($Cart != NULL)
            @foreach ($Cart->aItem as $carrito)
            @php 
                $i += 1;
             @endphp
            <tr>   
                 @php
                    $product = App\Models\Product::find($carrito['id']);
                @endphp
                    <td>{{$i}}</td>

                    <td>{{$carrito['name']}}</td>

                    <td>{{$carrito['price']}}</td>

                    <td>{{$carrito['quantity']}}</td>
                    
            </tr>
            @endforeach     
        </table>
        @endif
    </div>
    <div class="container">
        <hr>
        <h5>    Dirección de envío    <h5> <form method="POST"> <input type="text" name="Dirección 1"/> </form>
        
        <h5>    Localidad             <h5> <form method="POST"> <input type="text" name="localidad"/> </form>

        <h5>    Código Postal         <h5> <form method="POST"> <input type="text" name="cp"/> </form>
        <br></br>
        <input type="radio" name="envio">Envío 24 horas (+7'99)<br></br>
        <input type="radio" name="envio">Envío Estandar (+3'99)<br></br>
        
        <a href="/" class="btn btn-success" type="button">Pedir</a>

        <a href="/cart" class="btn btn-danger" type="button">Volver Atras</a>

        @php 
            unset($_SESSION);
        @endphp 
    </div>
    
</body>

</html>