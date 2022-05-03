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
              </li>
            </ul>
                   
            <form class="d-flex form-inline">

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