  <?php 
    $Cart = session()->get('Cart', 0);
    if($Cart== null){
      $total = 0;
    }
    else{
      $total = $Cart->iTotalItems;
    }
    ?>

<head>
  <link href="{{ asset('css/custompw.css') }}" rel="stylesheet" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">      
  <link rel="stylesheet" href="/css/bootstrap.min.css"/>



  <!-- CUSTOM STYLE FOR NAV AND FOOTER-->
  <style>
    
    .fakeimg { height: 100px; background: #aaa; }
        
    .navbar-custom 
    {
      background-color:#0081B5 ;
    }
    .footer-custom
    {
      background-color:#0081B5 ;
    }
  </style>
    
  <title>PWComponentes eShop</title>
<!-- NAVBAR-->

  <nav class="navbar navbar-expand-lg navbar-light colorpropiopw">
    <div class="container px-4 px-lg-5">
      <a class="navbar-brand" href="/">INICIO</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
              @auth
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="/login">{{auth()->user()->name}}</a></li>
              @else
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="/login">Inicia Sesión</a></li>
              @endauth
            </ul>
                    
            <form class="d-flex form-inline">
            <a href="/cart">
              <span class="btn btn-outline-dark">
                <i class="bi-cart-fill me-1"></i>
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cart" viewBox="0  16 16">
                    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                  </svg>
                  <span class="badge bg-dark text-white ms-1 rounded-pill">{{$total}}</span>
              </span>
            </a>
            </form>
          </div>
      </div>
  </nav>

  <!-- HEADER -->

  <header class="navbar-custom py-5">
    <div class="container px-4 px-lg-5 my-2">
      <div class="text-center text-white">
        <h1 class="display-4 fw-bolder">PWComponentes</h1>
        <p class="lead fw-normal text-white-50 mb-0">Si compras aquí no te llega seguro.</p>
      </div>
    </div>
  </header>

</head>