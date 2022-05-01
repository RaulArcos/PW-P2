<!doctype html>
    @include('layouts.header')
    <link href="{{ asset('css/custompw.css') }}" rel="stylesheet" />

<body>
<main class="containercustompw">
 
  <!-- Left Column / Headphones Image -->
  <div class="left-column">
    <img data-image="black" class="active" src="../{{ $product->imgurl}}" alt="">

  </div>
  <!-- Right Column -->
  <div class="right-column">
 
    <!-- Product Description -->
    <div class="product-description">
      <h1>{{$product->name}}</h1>
      <p>{{$product->description}}</p>
    </div>
    
    <!-- Product Pricing -->
    <div class="product-price">
      <span>{{$product->price}}€</span>
      <a href="{{ route('cart.add', $product->id) }}" class="cart-btn">Añadir al Carrito</a>
    </div>
  </div>
</main>
        
        <!-- Loading Javascripts -->   
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">')</script>
        <!-- <script src="../../assets/js/vendor/popper.min.js"></script> -->
        <script src="js/bootstrap.min.js"></script>
        <!-- FOOTER -->
        @include('layouts.footer')
    </body>
</html>   