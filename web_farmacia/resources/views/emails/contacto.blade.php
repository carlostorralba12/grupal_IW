@extends('layouts.app')

@section('content')
<head>
   
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
        {!! Form::open(['route'=>'contacto.store']) !!}

        <div class="form-group {{ $errors->has('nombre') ? 'has-error' : '' }}">
            {!! Form::label('Nombre:') !!}
            {!! Form::text('nombre', old('nombre'), ['class'=>'form-control', 'placeholder'=>'Introduce tu nombre']) !!}
            <span class="text-danger">{{ $errors->first('nombre') }}</span>
        </div>

        <div class="form-group {{ $errors->has('telefono') ? 'has-error' : '' }}">
            {!! Form::label('Teléfono:') !!}
            {!!  Form::text('telefono', old('telefono'), ['class'=>'form-control', 'placeholder'=>'Introduce tu teléfono de contacto']) !!}
            <span class="text-danger">{{ $errors->first('telefono') }}</span>
        </div>

        <div class="form-group {{ $errors->has('mensaje') ? 'has-error' : '' }}">
            {!! Form::label('Mensaje:') !!}
            {!! Form::textarea('mensaje', old('mensaje'), ['class'=>'form-control', 'placeholder'=>'Escribe tu pregunta']) !!}
            <span class="text-danger">{{ $errors->first('mensaje') }}</span>
        </div>

        <div class="form-group">
            <button class="btn btn-success">Enviar</button>
        </div>
        <div style="margin-top: 2%">
            @if(!empty(session('success')))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">
                        &times;
                    </button>
                    {{ session('success') }}
                </div>
            @endif
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
                <a href="https://www.facebook.com/" style="cursor: pointer">
                    <i style="font-size:30px;" class="fa fa-facebook-official"></i>
                </a>&nbsp&nbsp&nbsp&nbsp
                <a href="https://www.youtube.com/?reload=9" style="cursor: pointer">
                    <i style="font-size:30px; color:red" class="fa fa-youtube-play"></i>
                </a>&nbsp&nbsp&nbsp&nbsp
                <a href="https://www.instagram.com/" style="cursor: pointer">
                    <i style="font-size:30px; color:black"  class="fa fa-instagram"></i>
                </a>&nbsp&nbsp&nbsp&nbsp
                <a href="https://twitter.com/" style="cursor: pointer">
                    <i style="font-size:30px;"class="fa fa-twitter"></i>
                </a>
            </div>
        </div>
        <br>
        <hr class="featurette-divider margen">
    </div>
</body>
@endsection