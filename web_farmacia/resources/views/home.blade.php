  
@extends('layouts.app')

@section('content')
<head>
<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
  <style>
    .centrado{
        display: flex;
        object-fit: fill;
        flex-direction: column;
        justify-content: flex-start;
        align-items: center;
        position: relative;
    }

    h1{
        font-weight: bold;
    }
  </style>
</head>

<body>
    <div class="container" style="text-align:center">
        <br>
        <h1>Bienvenidos/as a FarmaWeb</h1>
    </div>
    
    <div class="container marketing">
    <hr class="featurette-divider margen">
    <div class="centrado">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="width:800px">
            <div>
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img class="d-block" style="width:800px; height:500px" src="/images/portada_3.jpg" alt="First slide">
                </div>
                <div class="carousel-item">.
                <img class="d-block" style="width:800px; height:500px" src="/images/portada_2.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                <img class="d-block" style="width:800px; height:500px" src="/images/portada_1.jpg" alt="Third slide">
                </div>
                <div class="carousel-item">
                <img class="d-block" style="width:800px; height:500px" src="/images/portada_4.jpg" alt="Fourth slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <div class="container marketing">
        <hr class="featurette-divider margen">
        <div class="row featurette">
            <div class="text-center">
            <h2 class="featurette-heading">DESCRIPCIÓN</h2>
            <p class="lead text-justify">La tienda farmacéutica ingenieria web se encuentra en Alicante y está formada de diferentes estands
            compuestos por productos de la misma categoría. Estas categorías son, por ejemplo, higiene, infantil y nutrición.</p>
            <br>
            <p class="lead text-justify">Nuestro equipo lo forman tres profesionales de la farmacéutica especializados en distintos
            campos dentro de esta disciplina. En la página 'About' podrás conocerlos.</p>
            <br>
            <p class="lead text-justify">En nuestra web podrás encontrar todos los productos disponibles en la tienda, marcarlos como favoritos
            para posibles compras o añadirlos al carrito. Además podrás encontrarlos buscando en sus categorías correspondientes.</p>
            <a class="btn btn-primary btn-lg btn-block" href="/catalogo">MIRA NUESTROS PRODUCTOS</a>
            <br>  
        </div>
    </div>

    <hr class="featurette-divider margen">
    <div class="row featurette">
        <div class="text-center">
            <h2 class="featurette-heading">CLIENTES</h2>
            <p class="lead text-justify">Hazte cliente nuestro y podrás disfrutar de todos nuestros productos, añadirlos a favoritos,
            aumentar tu lista de la compra e incluso podrás optar a todo tipo de ofertas.</p>
            @if(!Auth::check())
            <a href="{{ route('register') }}" class="btn btn-primary btn-lg btn-block">REGÍSTRATE</a>
            <br>
            @endif
        </div>
    </div>

    <hr class="featurette-divider margen">

    <div class="text-center">
        <h2 class="featurette-heading">CONTACTA CON NOSOTROS</h2>
    </div>
    <ul class="list-group list-group-flush lead">
        <li class="list-group-item"><strong>Teléfono:</strong> 661497558</li>
        <li class="list-group-item"><strong>Dirección:</strong> España, San Vicente del Raspeig, Universidad de Alicante</li>
        <li class="list-group-item"><strong>Email:</strong> farmaciaiw@gmail.com</li>
    </ul>
    <br>
    <div style="display: flex; align-items: center; justify-content: center">
        <a href="https://www.facebook.com/" style="cursor: pointer">
            <i style="font-size:30px; color:black" class="fab fa-facebook"></i>
        </a>&nbsp&nbsp
        <a href="https://www.youtube.com/?reload=9" style="cursor: pointer">
            <i style="font-size:30px; color:black" class="fab fa-youtube"></i>
        </a>&nbsp&nbsp
        <a href="https://www.instagram.com/" style="cursor: pointer">
            <i style="font-size:30px; color:black" class="fab fa-instagram"></i>
        </a>&nbsp&nbsp
        <a href="https://twitter.com/" style="cursor: pointer">
            <i style="font-size:30px; color:black" class="fab fa-twitter"></i>
        </a>
    </div>
    <br>
    <p class="lead text-justify">Si lo prefieres, envíanos un email: </p>
    <a class="btn btn-primary btn-lg btn-block" href="/contacto">CONTÁCTANOS</a>
    <br>
    <hr class="featurette-divider margen">
    </div>
</body>
@endsection