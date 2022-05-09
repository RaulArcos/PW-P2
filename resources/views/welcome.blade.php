@extends('templates.master')
<link href="{{ asset('css/custompw.css') }}" rel="stylesheet" />
<!-- CENTRAL CONTENT --> 
@section('content-center')
  <?php $iCont = 0; $iNumRow = 0;?>
  @foreach ($aProduct_new as $product)
    <?php if($iCont > 3):?>
      <br></br><br></br>
      <div class="row">
    <?php $iCont = 0;
    else: $iCont++;
    endif; ?>
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

@endforeach

@endsection