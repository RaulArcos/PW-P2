<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Carrito</title>
    <link rel="shortcut icon" href="./img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous" />
</head>

<body>
    <div class="container">
        <h1 class="display-4">Tu carrito</h1>
        <hr>

        
        <div class="row" id="cards"></div>

        <table class="table mt-5">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
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

                    <td><img src="{{$carrito['imgurl']}}"  style="max-width:50%;"></img></td>

                    <td>{{$carrito['price']}}</td>

                    <td>{{$carrito['quantity']}}</td>
                    
                    <td> 
                        <a href="{{ route('cart.operation', ['operation'=>'add', 'product'=>$product])}}">
                            <span class="btn btn-success" type="button">+</span>
                        </a>
                    </td>
                    <td>
                        <a href="{{ route('cart.operation',['operation'=>'remove', 'product'=>$product])}}">
                            <span class="btn btn-danger" type="button">-</span>
                        </a>
                    </td>
                    <td>
                        <a href="{{ route('cart.operation',['operation'=>'removeAll', 'product'=>$product])}}">
                            <span class="btn btn-warning" type="button">Borrar</span>
                        </a>
                    </td>
            </tr>
            @endforeach     
        </table>
        @endif
        <a href="/" class="btn btn-outline-dark">Volver Atrás</a>
    </div>
    
</body>

</html>