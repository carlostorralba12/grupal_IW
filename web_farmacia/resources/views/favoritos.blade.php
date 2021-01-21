
@extends('layouts.app')

@section('content')

<head>

    <style>

        .scrollbar{
            text-transform: capitalize;
            height: 65vh;
            overflow-y: scroll;
        }
        .total-importe{
            padding: 1%;
            background-color: #78c1e3;
            border-radius: 5px;
        }
        .image-product{
        
            width: 20%;
        }
        .header-producto{
            margin: 2% 0;
            display: flex;
            justify-content: space-around;

        }
        .footer-producto{

            display: flex;
            justify-content: space-between;
           
        }

        .pvp{
           
            background-color: #5cae51;
            border-radius: 50%;
            padding: 1%;
        }
        .cantidad-content{
            width: 40%;
            height: 30%;
            display: flex;
            flex-direction: row;
        }
        .cantidad{
            
            background-color: #d4e6da;
            border-radius: 5px;
            padding: 2%;

        }
        .card-producto-header{
            display: flex;
            justify-content: space-between;
        }
        .sin-productos{
            border: 1px solid #e8e8e8;
            border-radius: 5px;
            padding:7% 5%;
            background-color: rgb(0, 255, 255);
            box-shadow: 5px 10px 18px #888888;
            text-transform: none;
            text-align: center;
            margin: 20% 15%;
        }

        .initial-header {
            display:flex;
            justify-content: space-between;
            font-size: 25px;
        }

    </style>

</head>

<div class="container">

    <div class="favoritos-container" style="width: 80%; margin: auto">

        @if(session('producto'))
            <div class="alert alert-success" role="alert">

            <span>El producto: <strong>{{session('producto')->nombre}}</strong> se ha añadido a la lista de favoritos. 
                <a href="/catalogo/productos/{{session('producto')->id}}" class="alert-link">Picha aquí</a>
                para ver sus detalles
            </span>

                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                
            </div>
        @endif



        <div class="card">

            <div class="card-header initial-header">
                <span><b><i class="fa fa-heart" aria-hidden="true"></i> Favoritos</b></span>
                @if(count($productos) > 0)
                 <a class="btn btn-info" href="/catalogo"><i class="fa fa-shopping-basket" aria-hidden="true"></i> Añade productos</a>
                @endif
            </div>

            <div class="card-body">

            <div class="productos-container scrollbar">

                @if(count($productos) < 1)
                    <div class="sin-productos">
                        <h4>Tu lista favoritos está vacía añade productos del <b>catálogo</b>.</h4>
                        <a class="btn btn-info" style="margin: 3%;" href="/catalogo"><i class="fa fa-shopping-basket" aria-hidden="true"></i>  Catálogo</a>
                    </div>
                   
                @else
                @foreach($productos as $producto)
                <div class="card" style="margin: 2% 4%;">

                    <div class="card-header card-producto-header">

                        <span style="padding-top: 1%;"><b>{{$producto->nombre}}</b></span>
                        <a class="btn btn-warning" href="/favoritos/producto/eliminar/{{$producto->id}}">Quitar de favoritos</a>

                    </div>

                    <div class="card-body">

                        <a href="/catalogo/productos/{{$producto->id}}">
                            <div class="header-producto">

                                <img src="{{asset('images/productos/'. $producto->imagen)}}" class="image-product">
                                <span style="margin: auto 0;">{{$producto->descripcionCorta}}</span>

                            </div>
                        </a>

                        <div class="footer-producto">
                          
                            <a class="btn btn-info" href="/favoritos/carrito/{{$producto->id}}">Añadir a la cesta</a>
                            <span class="pvp">{{$producto->pvp}} €</span>
                            

                        </div>
                       
                    </div>
                </div>
                @endforeach
                @endif
            </div>

            </div>

            <div class="card-footer">

                {{--
                <div style="display: flex; justify-content: space-between;">
                @if(count($productos) > 1)
                    <div style="text-align: left; width: 50%;">
                  
                        <span style="font-size: 20px;"><b>Total: </b></span>

                        <span class="total-importe">{{App\Http\Controllers\CarritoController::calcularTotal($productos, $cantidades)}} €</span>
                    
                    </div>

                    <div style="text-align: right; width: 50%">

                        <button type="button" class="btn btn-primary">Comprar</button>

                    </div>
                @endif
                </div>--}}
              
            </div>
        
        </div>
            
    </div>


</div>


@endsection