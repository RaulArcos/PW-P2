<!doctype html>
    @include('layouts.header')
    
    <body>
        <div class="card card-body">
            <section class="tm-mb-1" id="about">
                <div class="">
                    <div class="tm-section-1-l">
                    <img class="pic-1" style="max-width:25%" src= {{ $product->imgurl}}>
                    </div>
                    <article class="tm-section-1-r tm-bg-color-8">
                        <h2 class="tm-mb-2 tm-title-color">{{$product->name}}</h2>
                        <p>{{$product->description}}</p>
                        <p>Precio anterior: {{$product->price}}€</p>
                        <p>¡ Aproveche la oferta del {{$product->discountPercent}}% y cómprelo solamente por: {{ $product->price - $product->price*($product->discountPercent/100) }} € !</p>
                        <a href=" {{ route('cart.add', $product->id) }}" class="btn btn-outline-dark">Añadir al Carrito</a>
                        <a href="/" class="btn btn-outline-dark">Volver Atrás</a>
                    </article>
                </div>
            </section>
        </div>
        <!-- Loading Javascripts -->   
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">')</script>
        <!-- <script src="../../assets/js/vendor/popper.min.js"></script> -->
        <script src="js/bootstrap.min.js"></script>
        <!-- FOOTER -->
        @include('layouts.footer')
    </body>
</html>   

    
