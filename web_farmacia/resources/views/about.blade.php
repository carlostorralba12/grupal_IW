@extends('layouts.app')

@section('content')

<head>
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <style>
        h1{
            font-weight: bold;
        }
        .about-item{
            justify-content:center;
            align-items: center;
            flex-direction: column;
            outline: 1px solid black;
            padding: 1%;
            width: 400px;
            margin: 2%;
        }
        .about-content{
            display: flex;
            justify-content: center;
        }
        img{
            width:300px;
            height:300px;
        }
        h3{
            display:flex;
            justify-content:center;
        }
        .centrado{
            display:flex;
            justify-content:center;
        }
    </style>
</head>

<body>
    <div class="container" style="text-align:center">
        <br>
        <h1>Así somos</h1>
        <div class="container marketing">
            <hr class="featurette-divider margen">
            <br>
                <h5>Especialistas en distribuir adecuadamente los medicamentos y suministros médicos a nuestros clientes.</5>
                <h5>Capacitados para brindar asesoramiento a los pacientes y proporcionar información general sobre los productos que recibimos.</h5>
            <br>
        </div>
        <div class="container marketing">
            <hr class="featurette-divider margen">
        </div>
    </div>
    <div class="about-content">
        <div class="about-item">
            <div class="centrado">
                <img src="images/antero.png"/>
            </div>
            <br>
            <hr class="featurette-divider margen">
            <h3>Antero Guarinos Caballero</h3>
            <hr class="featurette-divider margen">
            <br>
            <div class="centrado" style="display: flex;">
                <a href="https://www.facebook.com/" style="cursor: pointer">
                    <i style="font-size:30px" class="fab fa-facebook"></i>
                </a>&nbsp&nbsp
                <a href="https://www.youtube.com/?reload=9" style="cursor: pointer">
                    <i style="font-size:30px; color:red" class="fab fa-youtube"></i>
                </a>&nbsp&nbsp
                <a href="https://www.instagram.com/" style="cursor: pointer">
                    <i style="font-size:30px; color:black" class="fab fa-instagram"></i>
                </a>&nbsp&nbsp
                <a href="https://twitter.com/" style="cursor: pointer">
                    <i style="font-size:30px;" class="fab fa-twitter"></i>
                </a>
            </div>
            <span style="padding-top: 1%"></span>
        </div>
        <div class="about-item">
            <div class="centrado">
                <img src="images/porra.png"/>
            </div>
            <br>
            <hr class="featurette-divider margen">
            <h3>Carlos Torralba Ruiz</h3>
            <hr class="featurette-divider margen">
            <br>
            <div class="centrado" style="display: flex; align-items: center;">
                <a href="https://www.facebook.com/" style="cursor: pointer">
                    <i style="font-size:30px" class="fab fa-facebook"></i>
                </a>&nbsp&nbsp
                <a href="https://www.youtube.com/?reload=9" style="cursor: pointer">
                    <i style="font-size:30px; color:red" class="fab fa-youtube"></i>
                </a>&nbsp&nbsp
                <a href="https://www.instagram.com/" style="cursor: pointer">
                    <i style="font-size:30px; color:black" class="fab fa-instagram"></i>
                </a>&nbsp&nbsp
                <a href="https://twitter.com/" style="cursor: pointer">
                    <i style="font-size:30px;" class="fab fa-twitter"></i>
                </a>
            </div>
            <span style="padding-top: 1%"></span>
        </div>
        <div class="about-item">
            <div class="centrado">
                <img src="images/gema.png"/>
            </div>
            <br>
            <hr class="featurette-divider margen">
            <h3>Gema Lozano Jiménez</h3>
            <hr class="featurette-divider margen">
            <br>
            <div class="centrado" style="display: flex; align-items: center;">
                <a href="https://www.facebook.com/" style="cursor: pointer">
                    <i style="font-size:30px" class="fab fa-facebook"></i>
                </a>&nbsp&nbsp
                <a href="https://www.youtube.com/?reload=9" style="cursor: pointer">
                    <i style="font-size:30px; color:red" class="fab fa-youtube"></i>
                </a>&nbsp&nbsp
                <a href="https://www.instagram.com/" style="cursor: pointer">
                    <i style="font-size:30px; color:black" class="fab fa-instagram"></i>
                </a>&nbsp&nbsp
                <a href="https://twitter.com/" style="cursor: pointer">
                    <i style="font-size:30px;" class="fab fa-twitter"></i>
                </a>
            </div>
            <span style="padding-top: 1%"></span>
        </div>
    </div>
    <div class="container">
        <hr class="featurette-divider margen">
    </div>
</body>
@endsection