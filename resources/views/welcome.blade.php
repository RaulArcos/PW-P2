@extends('templates.master')
<link href="{{ asset('css/custompw.css') }}" rel="stylesheet" />
    <!-- CENTRAL CONTENT --> 
    @section('content-center')

    <?php $iCont2 = 0; $iNumRow2 = 1;?>
    @foreach ($aProduct_new as $product)
    <?php if($iCont2 > 3):?>
        <br></br><br></br>
        <div class="row">
        <?php $iCont2=0; $iNumRow2++;
        else: $iCont2++; ?>
    <?php endif; ?>
    @if( $product->HasDiscount()== true)
    <div class="col-sm-3">
        <div class="container">
            <div class="cardpw">
                <div class="imgBx">
                    <img src="https://assets.codepen.io/4164355/shoes.png">
                </div>
                <div class="contentBx">
                    <h2>{{ $product->name }}</h2>
                    <div class="size">
                        <h3>Size :</h3>
        <span>7</span>
        <span>8</span>
        <span>9</span>
        <span>10</span>
      </div>
      <div class="color">
        <h3>Color :</h3>
        <span></span>
        <span></span>
        <span></span>
      </div>
      <a href="#">Buy Now</a>
    </div>
  </div>
</div>
    </div>
    
    @else
    <div class="col-sm-3">
    <div class="container">
  <div class="cardpw">
    <div class="imgBx">
      <img src="{{ $product->imgurl }}">
    </div>
    <div class="contentBx">
      <h2>{{ $product->name }}</h2>
      <br><br>

      <div class="size">
      
      <h3>Precio: {{ $product->price }} €</h3>
      </div>
      <br>
      <a href="/product/{{ $product->id }}">Ver Producto</a>
    </div>
    </div>
    </div>
    </div>
    @endif
    
    <?php if($iNumRow2 > 0 && $iCont2 == 0):?>
        </div>
    <?php endif; ?>
    @endforeach
    @endsection
    @section('right-content')
    
    @endsection