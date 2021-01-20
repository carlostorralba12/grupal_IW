@extends('layouts.app')

@section('content')

<head>

  <style>

      .image-product{
        
        width: 30%;

      }
      .producto-header{
        display: flex;
        justify-content: space-between;
        background-color: #DFE6EB;
        color: #3490dc;
      }
      .producto-titulo{
        text-transform: capitalize;
        font-size: 24px;
        font-weight: bold;
       
      }
      .importe-producto{
        float: right;
        background-color: #A8F39E;
        border-radius: 5px;
        padding: 1%;
        font-size: 16px;
        font-weight: bold;
      }

      .datos-productos{
        width: 100%;
        display: flex;
        flex-direction: column;

      }

      .productos-descripcion{
        margin: 3%;
        display: flex;
        flex-direction: column;
      }

      .title-subcategoria{
            border: 1px solid #6fb7cb;
            border-radius: 10px;
            padding: 1%;
            background-color: #6fb7cb;
            text-transform: capitalize;
        }


  </style>

</head>

<div class="container">
    <a href="/catalogo"><h1 style="text-align:center; margin-bottom: 2%;">Catálogo</h1></a>
      
    @if(session()->has('error'))
        <div class="alert alert-warning">
            <span> El producto: <b>{{ session()->get('error') }}</b> ya existe en la lista de deseos</span> 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <div class="producto-container"style="margin: 3% 10%">
        
        <div class="card">

        <div class="card-header producto-header">

            <span class="producto-titulo">{{$producto->nombre}}</span>
            <a class="btn title-subcategoria" href="/catalogo/subcategorias/{{$subcategoria->id}}">{{$subcategoria->nombre}}</a>

        </div>


        <div class="card-body"> 

            <div style="display: flex; margin: 0 auto">
            <!--img src="{{asset('images/productos/'. $producto->imagen)}}"-->
            
            <img src="{{asset('images/productos/'. $producto->imagen)}}" class="image-product">
        

            <div class="datos-productos">
                
                <div class="productos-descripcion">

                <span style="font-size: 18px;"><b>Descripción breve</b></span>
                <span>{{$producto->descripcionCorta}}.</span>

                <span style="font-size: 18px; margin-top: 2%"><b>Descripción detallada</b></span>
                <span>{{$producto->descripcionLarga}}.</span>


                </div>

            </div>
        
            </div>
            <div style="margin: auto 0 0 0;">

                <span class="importe-producto">{{$producto->pvp}} €</span>

            </div>
        
        </div>

        <div class="card-footer text-muted" style="display:flex; justify-content: space-between;">
        
            <a class="btn btn-primary" href="{{url()->previous()}}">Volver</a>
        
            <div class="buttons-acciones">
            
              @auth
                <a class="btn btn-warning" href="/catalogo/favoritos/{{$producto->id}}">Añadir a favoritos</a>
                <a class="btn btn-info" href="/catalogo/carrito/{{$producto->id}}">Añadir a cesta</a>
              @endauth

            </div>
        

        </div>


        </div>

    </div>

</div>


@endsection