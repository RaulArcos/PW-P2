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
    
    <?php if($iNumRow2 > 0 && $iCont2 == 0):?>
        </div>
    <?php endif; ?>
    @endforeach
    @endsection
    @section('right-content')
    
    @endsection