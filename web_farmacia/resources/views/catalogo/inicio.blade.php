
@extends('layouts.app')

@section('content')

<head>

    <style>

        .categorias-container{
            margin: 2%;
            display: flex;
            justify-content: space-around;
            border: 1px solid #65e38f;
            border-radius: 10px;
            padding: 1%;
            background-color: #65e38f;
            box-shadow: 5px 10px 18px #888888;

        }

        .categorias-links{

            margin-top: 3%;
            text-align: right;

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
    </style>

</head>

<div class="container">

    <a href="/catalogo"><h1 style="text-align:center; margin-bottom: 2%;">Catálogo</h1></a>

    <div class="categorias-container">
         
        @foreach($categorias as $categoria)
    
            <div class="categoria-item">

                <a class="btn btn-light" href="/catalogo/categorias/{{$categoria->id}}"> {{$categoria->nombreCategoria}}</a>

            </div>
           
        @endforeach
             
       
    </div>

    <div class="categorias-links">
        {{$categorias->links()}}
    </div>
  
    <div class="productos-container ">
        <h2>Productos</h2>
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
                        
                        <button class="btn btn-warning">Añadir a favoritos</button>
                        <a class="btn btn-info" href="/catalogo/carrito/{{$producto->id}}">Añadir a cesta</a>

                    </div>

                </div>

            </div>
    
            @endforeach

        </div>
  

    </div>
    
    
</div>

@endsection