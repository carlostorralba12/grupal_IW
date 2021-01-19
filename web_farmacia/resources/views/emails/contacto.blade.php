@extends('layouts.app')

@section('content')
<head>
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <style>
        h1{
            font-weight: bold;
        }
        input{
            width: 500px;
        }
        textarea{
            width: 500px;
            height: 200px;
        }
    </style>
</head>

<body>
    <div class="container" style="text-align:center">
        <br>
        <h1>Contacta con nosotros</h1>
        <hr class="featurette-divider margen">
    </div>
    <br>
    <div class="container">
        <h4>Escríbenos tu pregunta</h4>
        <br>
        <!--@if(Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
        @endif-->
        {!! Form::open(['route'=>'contacto.store']) !!}

        <div class="form-group {{ $errors->has('nombre') ? 'has-error' : '' }}">
            {!! Form::label('Nombre:') !!}
            {!! Form::text('nombre', old('nombre'), ['class'=>'form-control', 'placeholder'=>'Introduce tu nombre']) !!}
            <span class="text-danger">{{ $errors->first('nombre') }}</span>
        </div>

        <div class="form-group {{ $errors->has('telefono') ? 'has-error' : '' }}">
            {!! Form::label('Teléfono:') !!}
            {!!  Form::text('telefono', old('telefono'), ['class'=>'form-control', 'placeholder'=>'Introduce tu teléfono de contacto']) !!}
            <!--<span class="text-danger">{{ $errors->first('telefono') }}</span>-->
        </div>

        <div class="form-group {{ $errors->has('mensaje') ? 'has-error' : '' }}">
            {!! Form::label('Mensaje:') !!}
            {!! Form::textarea('mensaje', old('mensaje'), ['class'=>'form-control', 'placeholder'=>'Escribe tu pregunta']) !!}
            <span class="text-danger">{{ $errors->first('mensaje') }}</span>
        </div>

        <div class="form-group">
            <button class="btn btn-success">Enviar</button>
        </div>
        {!! Form::close() !!}

        <br>
        <hr class="featurette-divider margen">
        <br>
        <div style="text-align:center;">
            <h5><strong>Teléfono:</strong> 661497558</h5>
            <br>
            <h5><strong>Email:</strong> farmaciaiw@gmail.com</h5>
            <br>
            <h5><strong>Dirección:</strong> España, San Vicente del Raspeig, Universidad de Alicante</h5>
            <br>
            <div style="display: flex; align-items: center; justify-content:center">
                <h5><strong>Redes sociales:</strong></h5>&nbsp&nbsp&nbsp&nbsp
                <a href="#" style="cursor: pointer">
                    <i style="font-size:30px;" class="fab fa-facebook"></i>
                </a>&nbsp&nbsp&nbsp&nbsp
                <a href="#" style="cursor: pointer">
                    <i style="font-size:30px; color:red" class="fab fa-youtube"></i>
                </a>&nbsp&nbsp&nbsp&nbsp
                <a href="#" style="cursor: pointer">
                    <i style="font-size:30px; color:black" class="fab fa-instagram"></i>
                </a>&nbsp&nbsp&nbsp&nbsp
                <a href="#" style="cursor: pointer">
                    <i style="font-size:30px;" class="fab fa-twitter"></i>
                </a>
            </div>
        </div>
        <br>
        <hr class="featurette-divider margen">
    </div>
</body>
@endsection