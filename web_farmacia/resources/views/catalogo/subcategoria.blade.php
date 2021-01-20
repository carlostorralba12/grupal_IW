
@extends('layouts.app')

@section('content')

<head>

    <style>

        .categoria-container{
            justify-content: space-between;
            border: 1px solid #e8e8e8;
            border-radius: 10px;
            padding: 2%;
            padding-bottom: 0;
            background-color:  rgb(0, 255, 255);
            box-shadow: 5px 10px 18px #888888;
            display: flex;
            justify-content: space-between;
            margin: auto;
            margin-bottom: 5%;
            width: 50%;
        }
   
        .productos-container{
          
            margin-top: 4%;
        }
        .producto-item{
            margin: 3%;
        }

        .scrollbar{
            display: grid;
            grid-template-columns: 50% 50%;
            margin: 0 2%;
            height: 55vh;
            overflow-y: scroll;
        }

        .producto-header{
            display: flex;
            justify-content: space-between;
        }

        .header-producto{
            margin: 2% 0;
            display: flex;
            justify-content: space-around;

        }
        .image-product{
        
            width: 20%;
        }

        .producto-footer{
            display: flex;
            justify-content: space-between;
        }
        .title-subcategoria{
            border: 1px solid #6fb7cb;
            border-radius: 10px;
            padding: 1%;
            background-color: #6fb7cb;
            text-transform: capitalize;
        }
        .title-categoria{
            border: 1px solid #65e38f;
            border-radius: 10px;
            padding: 1%;
            background-color: #65e38f;
            text-transform: capitalize;
            margin-bottom: 3%;
        }
    </style>

</head>

<div class="container">

    <a href="/catalogo"><h1 style="text-align:center; margin-bottom: 2%;">Catálogo</h1></a>

    <div class="categoria-container">
       
        <a class="btn btn-primary" href="{{url()->previous()}}" style="margin-bottom: 4%;">Volver</a>

        
        <a class="btn title-categoria" href="/catalogo/categorias/{{$categoria->id}}">{{$categoria->nombreCategoria}}</a>
    </div>

    <div class="productos-container ">
        <h2 style="margin-bottom: 2%;">Productos <span class="title-subcategoria">{{$subcategoria->nombre}}</span></h2> 
        @if(session()->has('error'))
            <div class="alert alert-warning">
               <span> El producto: <b>{{ session()->get('error') }}</b> ya existe en la lista de deseos</span> 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <div class="scrollbar">

            @foreach($productos as $producto)
            <div class="producto-item">

                <div class="card">

                    <div class="card-header producto-header">
                        
                        <span style="text-transform: capitalize;">{{$producto->nombre}}</span>
                        <span>{{$producto->pvp}} €</span>

                    </div>

                    <div class="card-body">

                    <a href="/catalogo/productos/{{$producto->id}}">
                        <div class="header-producto">

                            <img src="{{asset('images/productos/'. $producto->imagen)}}" class="image-product">
                            <span style="margin: auto 0;">{{$producto->descripcionCorta}}</span>

                        </div>
                    </a>
                       

                    </div>
                    <div class="card-footer text-muted producto-footer">
                        
                        @auth
                            <a class="btn btn-warning" href="/catalogo/favoritos/{{$producto->id}}">Añadir a favoritos</a>
                            <a class="btn btn-info" href="/catalogo/carrito/{{$producto->id}}">Añadir a cesta</a>
                        @endauth

                    </div>

                </div>

            </div>
    
            @endforeach

        </div>
  

    </div>
    
    
</div>

@endsection